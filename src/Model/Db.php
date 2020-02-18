<?php

namespace App\DB;

class Database
{
	private static $host = "192.168.33.10";
	private static $dbname = "a";
	private static $username = "user";
	private static $password = "password";
	protected static $connection;
	
	public static function getConnection()
	{
		self::$connection = null;

		try
		{
			self::$connection = new \PDO("mysql:host=" . self::$host . ";dbname=" . self::$dbname . ";charset=utf8", self::$username, self::$password);
		}
		catch(PDOException $exception)
		{
			echo "Connection error: " . $exception->getMessage();
		}

		return self::$connection;
	}
}