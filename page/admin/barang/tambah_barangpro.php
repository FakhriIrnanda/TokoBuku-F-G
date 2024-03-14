
<div class="box-title">
    <p>Barang / <b>Manajemen Barang Jualan</b></p>
</div>
<div id="box">

<h1>Barang Jualan Tambah</h1>
<?php

	include 'lib/koneksi.php';

$desk = $_POST['judul'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];

$name_image = $_FILES['gambar']['name'];
$loc_image = $_FILES['gambar']['tmp_name'];
$type_image = $_FILES['gambar']['type'];

$date = date('Ymd');

$cek         = array('png','jpg','jpeg','gif');
$x           = explode('.',$name_image);
$extension   = strtolower(end($x));
$size_image  = $_FILES['gambar']['size'];


if (in_array($extension, $cek) === TRUE){
  if ($size_image < 5044070){

    move_uploaded_file($loc_image,"img/buku/$name_image");

    try {
			$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$pdo = $conn->prepare('INSERT INTO tbl_buku (judul, harga, stok, pengarang, penerbit, created, nama_image, type_image, size_image)
									values (:judul, :harga, :stok, :pengarang, :penerbit, :created, :nama_image, :type_image, :size_image)');

			$insertdata = array(':judul' => $desk, ':harga' => $harga, ':stok' => $stok, ':pengarang' => $pengarang, ':penerbit' => $penerbit, 'created' => $date,
						              ':nama_image' => $name_image, ':type_image' => $type_image, ':size_image' => $size_image);

			$pdo->execute($insertdata);

			echo "<center><img src='img/icons/ceklist.png' width='60'></center>";
			echo "<center><b>Buku berhasil ditambahkan</b></center>";
      echo "</br>";
			echo"<meta http-equiv='refresh' content='1;
			url=?page=barang'>";

		} catch (PDOexception $e) {
			print "tambah barang gagal: " . $e->getMessage() . "<br/>";
		   die();
		}



}else{
	echo "<center><img src='img/icons/cancel.png' width='60'></center>";
	echo "<center><b>ukuran file gambar terlalu besar</b></center>";
	echo "<center><a href='?page=tambah_barang'>back</a></center>";
  echo "</br>";
}
}else {
	echo "<center><img src='img/icons/cancel.png' width='60'></center>";
	echo"<center><b>ekstensi file tidak sesuai</b></center>";
	echo "<center><a href='?page=tambah_barang'>back</a></center>";
  echo "</br>";
}

 ?>

</div>
