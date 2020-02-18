<?php

namespace App\Model;

class BlogData
{

	public static function getBlog($blogSlug)
	{
		$data = [
			"blogSlug" => $blogSlug,
			"title" => "Blog Title",
			"description" => "Blog Title",
			'content' => "Blog Content"
		];

		return $data;
	}

}