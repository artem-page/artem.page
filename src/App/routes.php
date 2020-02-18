<?php

use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();

$routes->add('home', new Routing\Route('/', [
	
	'_controller' => 'App\Controller\Home::index'

]));

$routes->add('about', new Routing\Route('/about', [
	
	'_controller' => 'App\Controller\About::index'

]));

$routes->add('project', new Routing\Route('/project/{projectSlug}', [
	
	'projectSlug' => null,

	'_controller' => 'App\Controller\Project::index'

]));

$routes->add('blog', new Routing\Route('/blog/{blogSlug}', [
	
	'blogSlug' => null,

	'_controller' => 'App\Controller\Blog::index'
	
]));

return $routes;