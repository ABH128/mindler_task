<?php

class MySqlDriver {
  private $link;
	private $host = "localhost";
	private $database = "task";
	private $username =  "root";
	private $password = ' ';


   function __construct($database=" "){
	   if (!empty($database)){ $this->database = $database; }
	   $this->link = mysqli_connect($this->host,$this->username,$this->password);
	   if ($this->link) { mysqli_select_db($this->database,$this->link); }
	   return $this->link;  
   }
   public function __destruct() {
      mysqli_close( $this->link );
   }
}
$gLink=new MySqlDriver();


$web_name = "Complaint Management";
?>
