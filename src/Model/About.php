<?php

namespace App\Model;

class About
{

	private $connection;

	private $db_table = "about";

	public $id;
	public $title;
	public $description;
	
	function __construct()
	{
		$this->connection = Database::getConnection();
	}
	
	public function getMeta()
	{
		$stmt = $this->connection->prepare("SELECT * FROM " . $this->db_table . " LIMIT 1");
		$stmt->execute();
		$result = $stmt->fetch(PDO::FETCH_ASSOC);

		$this->id = $result["id"];
		$this->title = $result["title"];
		$this->description = $result["description"];

		return $this;
	}

}