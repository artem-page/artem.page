<?php

use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();

$routes->add('home', new Routing\Route('/'));

$routes->add('about', new Routing\Route('/about'));

$routes->add('blog', new Routing\Route('/blog/{title}', ['title' => 'All articles']));

return $routes;