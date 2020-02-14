<?php

if (is_file($autoloader = dirname(__DIR__) . '/vendor/autoload.php')) {
    require_once $autoloader;
}

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver;
use Symfony\Component\Routing;
use App\Framework\Framework;

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
$matcher = new Routing\Matcher\UrlMatcher($routes, $context);

$controllerResolver = new ControllerResolver();
$argumentResolver = new ArgumentResolver();

$framework = new Framework($matcher, $controllerResolver, $argumentResolver);
$response = $framework->handle($request);

$response->send();

?>


<pre>
<?php var_dump(  ) ?>
</pre>