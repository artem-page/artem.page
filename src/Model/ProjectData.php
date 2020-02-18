<?php

namespace App\Model;

class ProjectData
{

	public static function getProject($slug)
	{
		$data = [
			"slug" => $slug,
			"title" => "Project Title",
			"description" => "Project Description",
			'content' => "Project Content"
		];

		return $data;
	}

}