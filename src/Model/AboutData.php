<?php

namespace App\Model;

class AboutData
{

	public static function getAbout($aboutSlug)
	{
		$data = [
			"aboutSlug" => $aboutSlug,
			"title" => "About Title",
			"description" => "About Title",
			'content' => "About Content"
		];

		return $data;
	}

}