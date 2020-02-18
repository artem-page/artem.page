<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Model\Home;

class HomeController
{
	public function index(Request $request)
	{
		$slug = htmlspecialchars( $request->attributes->get('homeSlug'), ENT_QUOTES, 'UTF-8');

		$homeData["content"] = (new Home)->getHomeMeta();

		$response = $this->render_template( $request, $homeData );

		$response->headers->set('Content-Type', 'text/html');

		return $response;
	}

	function render_template($request, array $args)
	{
		extract( $args );

		extract( $request->attributes->all(), EXTR_SKIP );

		ob_start();

		include sprintf( dirname(__DIR__) . '/../src/View/%s.php', $_route );
		
		return new Response(ob_get_clean());
	}

}