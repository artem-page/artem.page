<?php

if (is_file($autoloader = dirname(__DIR__) . '/vendor/autoload.php')) {
    require_once $autoloader;
}

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing;

$request = Request::createFromGlobals();
$routes = include dirname(__DIR__) . '/src/app.php';

$context = new Routing\RequestContext();
$context->fromRequest($request);
$matcher = new Routing\Matcher\UrlMatcher($routes, $context);

try
{
	extract( $matcher->match($request->getPathInfo()) );
	ob_start();
	include sprintf( dirname(__DIR__) . '/src/pages/%s.php', $_route );
	$response = new Response(ob_get_clean());
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

<!--
<pre>
<?php var_dump( $matcher->match($request->getPathInfo()) ); ?>
</pre>
-->