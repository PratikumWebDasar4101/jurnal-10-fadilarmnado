<?php
  include_once 'koneksi.php';

  if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];

    $sql = "delete from mahasiswa where nim = $nim ";
    $result = $conn->query($sql);
    if ($result) {
      header("location: dashboard.php");
    }else {
      echo "data gagal";
    }
  }
?>
