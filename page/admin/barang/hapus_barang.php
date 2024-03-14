<div class="box-title">
    <p>Barang / <b>Manajemen Buku</b></p>
</div>
<div id="box">
<h1>Hapus Data Buku</h1>


<?php
include('lib/koneksi.php');

		$id = $_GET['id'];

    $query = $conn->prepare("SELECT * FROM tbl_buku WHERE id_buku =:id");
    $query->bindparam(':id', $id);
    $query->execute();
    $row=$query->fetch(PDO::FETCH_OBJ);

      unlink("img/buku/$row->nama_image");

		try {
			$conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$pdo = $conn->prepare("DELETE FROM tbl_buku WHERE id_buku = :id");
			$deletedata = array(':id' => $id);

			$pdo->execute($deletedata);

      echo "<center><img src='img/icons/ceklist.png' width='60'></center>";
			echo "<center><b>Data Buku berhasil dihapus dari store</b></center>";
      echo "</br>";
      echo"<meta http-equiv='refresh' content='1;
      url=?page=barang'>";

		} catch (PDOexception $e) {
			print "Gagal menghapus data buku: " . $e->getMessage() . "<br/>";
		   die();
		}
?>

</div>
