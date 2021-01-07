<?php

use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();

$routes->add('home', new Routing\Route('/', [

	'_controller' => 'App\Controller\HomeController::index'

]));

$routes->add('about', new Routing\Route('/about', [

	'_controller' => 'App\Controller\AboutController::index'

]));

$routes->add('ican', new Routing\Route('/what-can-i-offer', [

	'_controller' => 'App\Controller\ICanController::index'

]));

$routes->add('contact', new Routing\Route('/contact', [

	'_controller' => 'App\Controller\ContactController::index'

]));

$routes->add('projects', new Routing\Route('/projects/{projectSlug}', [

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