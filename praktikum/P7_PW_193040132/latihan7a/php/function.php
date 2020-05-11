	<?php
	function koneksi() {
	$connect = mysqli_connect("localhost", "root","") or die("koneksi ke DB gagal");

	mysqli_select_db($connect, "tubes_193040132") or die("Database salah!");

	return $connect;
	}
	function query($sql){
		$connect = koneksi();
		$result = mysqli_query($connect, "$sql");

		$rows = [];
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}

		return $rows;
	}

//fungsi untuk menambah data didalam database
	function tambah($mkn)
	{
		$connect = koneksi();
		$img = htmlspecialchars($mkn['img']);
		$nama = htmlspecialchars($mkn['nama']);
		$berat = htmlspecialchars($mkn['berat']);
		$kalori = htmlspecialchars($mkn['		kalori']);
		$karbohidrat = htmlspecialchars($mkn['karbohidrat']);
		$protein = htmlspecialchars($mkn['protein']);
		$lemak = htmlspecialchars($mkn['lemak']);

		$query = "INSERT INTO makanan
		VALUES 
		('', '$img', '$nama', '$berat', '$kalori', '$karbohidrat', '$protein', '$lemak')";

		mysqli_query($connect, $query);

		return mysqli_affected_rows($connect);

	}

	function hapus($id)
	{
		$connect = koneksi();
		mysqli_query($connect, "DELETE FROM makanan WHERE id = $id");

		return mysqli_affected_rows($connect);
	}

	function ubah($mkn) {
		$connect = koneksi();
		$id = htmlspecialchars($mkn['id']);
		$img = htmlspecialchars($mkn['img']);
		$nama = htmlspecialchars($mkn['nama']);
		$berat = htmlspecialchars($mkn['berat']);
		$kalori = htmlspecialchars($mkn['kalori']);
		$karbohidrat = htmlspecialchars($mkn['karbohidrat']);
		$protein = htmlspecialchars($mkn['protein']);
		$lemak = htmlspecialchars($mkn['lemak']);

		$query = "UPDATE makanan
		SET 
		id = '$id',
		img = '$img',
		nama = '$nama',
		berat = '$berat',
		kalori = '$kalori',
		karbohidrat = '$karbohidrat',
		protein = '$protein',
		lemak = '$lemak'
		WHERE id = '$id'";

		mysqli_query($connect, $query);

		return mysqli_affected_rows($connect);


	}
	?>