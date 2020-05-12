	<?php
	namespace App;
	 
	class DB extends \PDO
	{
	    public function __construct($dsn = null, $username = null, $password = null, $options = array())
	    {
	        $dsn = ($dsn != null) ? $dsn : sprintf('mysql:dbname=%s;host=%s', $_ENV['MYSQL_DBNAME'], $_ENV['MYSQL_HOST']);
	        $username = ($username != null) ? $username : $_ENV['MYSQL_USER'];
	        $password = ($password != null) ? $password : $_ENV['MYSQL_PASS'];
	         
	        parent::__construct($dsn, $username, $password, $options);
	    }
	}