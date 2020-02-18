<?php

use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();

$routes->add('home', new Routing\Route('/', [
	
	'_controller' => 'App\Controller\HomeController::index'

]));

$routes->add('about', new Routing\Route('/about', [
	
	'_controller' => 'App\Controller\AboutController::index'

]));

$routes->add('project', new Routing\Route('/project/{projectSlug}', [
	
	'projectSlug' => null,

	'_controller' => 'App\Controller\ProjectController::index'

]));

$routes->add('blog', new Routing\Route('/blog/{blogSlug}', [
	
	'blogSlug' => null,

	'_controller' => 'App\Controller\BlogController::index'
	
]));

$routes->add('inspiration', new Routing\Route('/inspiration/{inspSlug}', [
	
	'inspSlug' => null,

	'_controller' => 'App\Controller\InspirationController::index'
	
]));

return $routes;