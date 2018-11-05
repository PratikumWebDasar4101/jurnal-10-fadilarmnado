<?php
class proses{
  private $conn;

public function __construct()
{
  $server = "localhost";
  $user = "root";
  $pass = "";
  $db = "modul8";
  $this->conn = mysqli_connect($server,$user,$pass,$db);
}

public function dashboard($conn)
{
  $sql = mysqli_query($this->conn,"SELECT * FROM mahasiswa");
return $sql;
}

}
 ?>
