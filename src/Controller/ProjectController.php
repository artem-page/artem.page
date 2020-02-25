<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Model\Project;

class ProjectController
{
	public function index(Request $request)
	{
		$slug = htmlspecialchars( $request->attributes->get('projectSlug'), ENT_QUOTES, 'UTF-8');

		if (!$slug || $slug == null) 
		{

			//$projectData["content"] = (new Project)->getProjectsMeta();
			$projectData["projects"]["all"] = (new Project)->getAllProjects();
			$projectData["projects"]["ca"] = (new Project)->getProjectsByCountry("ca");
			$projectData["projects"]["ua"] = (new Project)->getProjectsByCountry("ua");
			$response = $this->render_template_all( $request, $projectData );

		} else 
		{
			$projectData["content"] = (new Project)->getProjectBySlug( $slug );
			$response = $this->render_template( $request, $projectData );
		}

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

	function render_template_all($request, array $args)
	{
		extract( $args );

		extract( $request->attributes->all(), EXTR_SKIP );

		ob_start();

		include sprintf( dirname(__DIR__) . '/../src/View/%s_all.php', $_route );
		
		return new Response(ob_get_clean());
	}

}