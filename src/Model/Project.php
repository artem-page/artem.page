<?php

namespace App\Model;

use PDO;
use App\DB\Database;

class Project
{

	private $connection;

	private $db_table = "projects";

	public $id;
	public $title;
	public $description;
	public $slug;
	public $img_thumb;
	public $img_cover;

	function __construct()
	{
		$this->connection = Database::getConnection();
	}

	public function getProjectBySlug($slug)
	{
		$this->slug = $slug;

		$stmt = $this->connection->prepare("SELECT * FROM " . $this->db_table . " WHERE slug = :slg LIMIT 1");
		$stmt->execute(array(':slg' => $slug));
		$result = $stmt->fetch(PDO::FETCH_ASSOC);

		$this->id = $result["id"];
		$this->title = $result["title"];
		$this->description = $result["description"];
		$this->img_thumb = $result["img_thumb"];
		$this->img_cover = $result["img_cover"];

		return $this;
	}

	public function getHomePageProjects()
	{
		$this->slug = $slug;

		$stmt = $this->connection->prepare("SELECT * FROM " . $this->db_table . " ORDER BY pub_date DESC LIMIT 3");
		$stmt->execute(array(':slg' => $slug));
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $result;
	}

	public function getAllProjects()
	{
		$this->slug = $slug;

		$stmt = $this->connection->prepare("SELECT * FROM " . $this->db_table . " ORDER BY pub_date DESC");
		$stmt->execute(array(':slg' => $slug));
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

		return $result;
	}

}