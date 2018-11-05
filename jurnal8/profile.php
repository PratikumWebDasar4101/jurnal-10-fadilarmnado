<?php
  include_once 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>profile</title>
  </head>
  <body>
    <table border="1">
      <tr>
        <th>Nama Depan</th>
        <th>Nama Belakang</th>
        <th>NIM</th>
        <th>Kelas</th>
        <th>Hobi</th>
        <th>Genre Film</th>
        <th>Tempat Wisata</th>
        <th>Tanggal Lahir</th>
        <th>Email</th>
      </tr>
      <?php
        $sql = "SELECT * FROM mahasiswa WHERE nim =  ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          while ($row = $result->FETCH_ASSOC()) {
            ?>
            <tr>
              <td><?php echo $row['nama_depan']; ?></td>
              <td><?php echo $row['nama_belakang']; ?></td>
              <td><?php echo $row['nim']; ?></td>
              <td><?php echo $row['kelas']; ?></td>
              <td><?php echo $row['hobi']; ?></td>
              <td><?php echo $row['genre_film']; ?></td>
              <td><?php echo $row['tempat_wisata']; ?></td>
              <td><?php echo $row['tgl_lahir']; ?></td>
              <td><?php echo $row['email']; ?></td>
            </tr>
            <?php
          }
        }
       ?>
    </table>
  </body>
</html>
