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

		return $this;
	}

}