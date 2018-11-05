<?php
 include_once 'koneksi.php';



if (isset($_GET['nim'])) {
  $nim = $_GET['nim'];
  $sql = "select * from mahasiswa where nim = $nim ";
  $result = $conn->query($sql);
    $row = $result->FETCH_ASSOC();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>
<body>
	<form method="post">
		<center>
		<table>
			<tr>
				<td colspan="2"><h1><center>UPDATE DATA</center></h1></td>
			</tr>
			<tr>
				<td>Nama Depan</td>
				<td><input type="text" name="nama_depan" value="<?php echo $row['nama_depan']; ?>"></td>
			</tr>

			<tr>
				<td>Nama Belakang</td>
				<td><input type="text" name="nama_belakang" value="<?php echo $row['nama_belakang']; ?>"></td>
			</tr>

			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim"value="<?php echo $row['nim']; ?> " readonly></td>
			</tr>

			<tr>
				<td>Kelas</td>
				<td>
					<input type="radio" name="kelas" value="D3SI 4101">D3SI 4101 <br>
					<input type="radio" name="kelas" value="D3SI 4102">D3SI 4102 <br>
					<input type="radio" name="kelas" value="D3SI 4103">D3SI 4103 <br>
					<input type="radio" name="kelas" value="D3SI 4104">D3SI 4104
				</td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td>
					<input type="checkbox" name="hobi[]" value="Membaca">Membaca <br>
					<input type="checkbox" name="hobi[]" value="ngegame">ngegame <br>
					<input type="checkbox" name="hobi[]" value="ngopi">ngopi <br>
				</td>
			</tr>
			<tr>
				<td>Genre film</td>
				<td>
					<input type="checkbox" name="genre_film[]" value="Horror">Horror <br>
					<input type="checkbox" name="genre_film[]" value="Anime">Anime <br>
					<input type="checkbox" name="genre_film[]" value="action">action <br>
					<input type="checkbox" name="genre_film[]" value="Drama">Drama <br>
				</td>
			</tr>
			<tr>
				<td>Tempat wisata</td>
				<td>
					<input type="checkbox" name="tempat_wisata[]" value="Bali">Bali <br>
					<input type="checkbox" name="tempat_wisata[]" value="Tanjung Selor">Tanjung Selor <br>
					<input type="checkbox" name="tempat_wisata[]" value="Jakarta">Jakarta <br>
					<input type="checkbox" name="tempat_wisata[]" value="Lombok">Lombok <br>
				</td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tgl_lahir"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="Email" name="email" pattern="[a-z0-9.-_]+@+[a-z]+.com"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="update"></td>
			</tr>
		</table>
		</center>
	</form>
</body>
</html>

<?php
  if (isset($_POST['nama_depan'])) {
    $namadep = $_POST['nama_depan'];
  	$namabel = $_POST['nama_belakang'];
  	$nim = $_POST['nim'];
  	$kelas1 = $_POST['kelas'];
  	$hobi = implode("," , $_POST['hobi']);
  	$genre_film = implode("," , $_POST['genre_film']);
  	$tempat_wisata = implode("," , $_POST['tempat_wisata']);
  	$tgl_lahir = $_POST['tgl_lahir'];
  	$email = $_POST['email'];

    $sql = "UPDATE mahasiswa
            set
            nama_depan = '$namadep',
            nama_belakang = '$namabel',
            nim = '$nim',
            kelas = '$kelas1',
            hobi = '$hobi',
            genre_film = '$genre_film',
            tempat_wisata = '$tempat_wisata',
            tgl_lahir = '$tgl_lahir',
            email = '$email'
            WHERE nim = '$nim'";
    $result = $conn->query($sql);
    if ($sql) {
      header("location: dashboard.php");
    }
  }
?>
