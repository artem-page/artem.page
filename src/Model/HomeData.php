<?php

namespace App\Model;

class HomeData
{

	public static function getHome($homeSlug)
	{
		$data = [
			"homeSlug" => $homeSlug,
			"title" => "Home Title",
			"description" => "Home Description",
			'content' => "Home Content"
		];

		return $data;
	}

}