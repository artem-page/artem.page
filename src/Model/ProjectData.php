<?php

namespace App\Model;

class ProjectData
{

	public static function getProject($projectSlug)
	{
		$data = [
			"slug" => $projectSlug,
			"title" => "Project Title",
			'content' => "Project Content"
		];

		return $data;
	}

}