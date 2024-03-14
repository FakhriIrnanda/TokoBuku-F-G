<div class="box-title">
    <p>Barang / <b>Manajemen Buku</b></p>
</div>
<div id="box">


<?php
  include "lib/koneksi.php";

    $id = $_GET['id'];
    $result = $conn->prepare("SELECT * FROM tbl_buku WHERE id_buku =:id");
    $result->bindparam(':id', $id);
    $result->execute();
    $row=$result->fetch(PDO::FETCH_OBJ);
 ?>

<h1>Ubah Data Buku</h1>

<form name="edit" method="post" action="?page=edit_barangpro" enctype="multipart/form-data">

  <table class="article">
    <tr>
      <td>Cover</td>
      <td>
        <input type="hidden" name="id_buku" value="<?php echo $row->id_buku ?>">
        <img src="img/buku/<?php echo $row->nama_image ?>" width="100"><br><br>
        <input type="file" name="gambar">
      </td>
    </tr>

    <tr>
      <td>Judul Buku</td>
      <td>
        <input type="text" name="judul" size="50" value="<?php echo $row->judul ?>" required>
      </td>
    </tr>

    <tr>
      <td>Harga</td>
      <td>
        <input type="text" name="harga" size="50" value="<?php echo $row->harga ?>" required>
      </td>
    </tr>

    <tr>
      <td>Stok Buku</td>
      <td>
        <input type="text" name="stok" size="50" value="<?php echo $row->stok ?>" required>
      </td>
    </tr>

    <tr>
      <td>Pengarang</td>
      <td>
        <input type="text" name="pengarang" size="50" value="<?php echo $row->pengarang ?>" required>
      </td>
    </tr>

    <tr>
      <td>Penerbit</td>
      <td>
        <input type="text" name="penerbit" size="50" value="<?php echo $row->penerbit ?>" required>
      </td>
    </tr>

    <tr>
      <td></td>
      <td>
        <input class="tombol-biru" type="submit" name="edit" value="Ubah & Simpan">
        <a class="tombol-merah" href="?page=barang">Batal</a>
      </td>
    </tr>
  </table>

</form>

</div>
