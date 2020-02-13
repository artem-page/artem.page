<?php

if (is_file($autoloader = dirname(__DIR__) . '/vendor/autoload.php')) {
    require_once $autoloader;
}

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing;

function render_template($request)
{
	extract( $request->attributes->all(), EXTR_SKIP );
	ob_start();
	include sprintf( dirname(__DIR__) . '/src/pages/%s.php', $_route );
	
	return new Response(ob_get_clean());
}

$request = Request::createFromGlobals();
$routes = include dirname(__DIR__) . '/src/app.php';

$context = new Routing\RequestContext();
$context->fromRequest($request);
$matcher = new Routing\Matcher\UrlMatcher($routes, $context);

try
{
	$request->attributes->add( $matcher->match( $request->getPathInfo() ) );
	$response = call_user_func($request->attributes->get('_controller'), $request);
}
catch (Routing\Exception\ResourceNotFoundException $exception)
{
	$response = new Response('Not Found', 404);
}
catch (Exception $exception)
{
	$response = new Response('An error occured', 500);
}

$response->send();

?>
