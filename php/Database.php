<?php
	session_start();
	class Database{
    private $servername;
    private $username;
    private $password;
    private $dbname;
    public $conn;

    function __construct(){
        $this->db_connect();
    }

    private function db_connect(){
      include 'db.inc.php';
      
      $this->servername = $globservername;
      $this->username = $globusername;
      $this->password = $globpassword;
      $this->dbname = $globdbname;

      $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
      return $this->conn;
    }

	}
?>
