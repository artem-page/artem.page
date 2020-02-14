<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Model\ProjectData;

class Project
{
	public function index(Request $request)
	{
		$slug = htmlspecialchars( $request->attributes->get('projectSlug'), ENT_QUOTES, 'UTF-8');

		$projectData = ProjectData::getProject( $slug );

		$response = $this->render_template( $request, $projectData );

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