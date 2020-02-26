<?php

namespace App\Model;

class Inspiration
{

	private $connection;

	private $db_table = "inspiration";

	public $id;
	public $title;
	public $description;
	public $slug;
	
	function __construct()
	{
		$this->connection = Database::getConnection();
	}

	public function getMeta()
	{
		$stmt = $this->connection->prepare("SELECT * FROM pages WHERE route = '" . $this->db_table . "'  LIMIT 1");
		$stmt->execute();
		$result = $stmt->fetch(PDO::FETCH_ASSOC);

		$this->id = $result["id"];
		$this->title = $result["title"];
		$this->description = $result["description"];

		return $this;
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