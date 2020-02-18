<?php

namespace App\Framework;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Exception\Exception;
use Symfony\Component\Routing\Matcher\UrlMatcher;

class Framework
{

	protected $urlMatcher;
	protected $controllerResolver;
	protected $argumentResolver;
	
	function __construct(UrlMatcher $urlMatcher, ControllerResolver $controllerResolver, ArgumentResolver $argumentResolver)
	{
		$this->urlMatcher = $urlMatcher;
		$this->controllerResolver = $controllerResolver;
		$this->argumentResolver = $argumentResolver;
	}

	public function handle(Request $request)
	{
		$this->urlMatcher->getContext()->fromRequest($request);

		try
		{
			
			$request->attributes->add( $this->urlMatcher->match( $request->getPathInfo() ) );

			$controller = $this->controllerResolver->getController($request);
			//$arguments = $this->argumentResolver->getArguments($request, $controller);

			return call_user_func($controller, $request);


		} catch (ResourceNotFoundException $exception) {
			$response = new Response('Not Found', 404);
		} catch (Exception $exception) {
			$response = new Response('An error occured', 500);
		}

	}

}