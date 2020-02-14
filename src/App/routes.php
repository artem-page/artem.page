<?php

use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();

$routes->add('home', new Routing\Route('/', [
	
	'_controller' => function($request){

		$response = render_template($request);

		$response->headers->set('Content-Type', 'text/html');

		return $response;
	}
]));

$routes->add('about', new Routing\Route('/about', [
	
	'_controller' => function($request){

		$response = render_template($request);

		$response->headers->set('Content-Type', 'text/html');

		return $response;
	}
]));

$routes->add('project', new Routing\Route('/project/{projectSlug}', [
	
	'projectSlug' => null,

	'_controller' => 'App\Controller\Project::index'
]));

$routes->add('blog', new Routing\Route('/blog/{slug}', [
	
	'slug' => null,

	'_controller' => function($request){

		$request->attributes->set('title', 'All Articles');

		$response = render_template($request);

		$response->headers->set('Content-Type', 'text/html');

		return $response;
	}
]));

return $routes;