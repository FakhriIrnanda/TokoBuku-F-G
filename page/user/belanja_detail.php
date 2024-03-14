<div class="box-title">
    <p>Beranda / <b>Pemesanan</b></p>
</div>
<div id="box">


<?php
  include "lib/koneksi.php";

    $user = $_SESSION['username'];
    $ambiluser = $conn->prepare("SELECT * FROM tbl_users WHERE username =:user");
    $ambiluser->bindparam(':user', $user);
    $ambiluser->execute();
    $data = $ambiluser->fetch(PDO::FETCH_OBJ);

    $id = $_GET['id'];
    $sisa = $_GET['st'];
    $result = $conn->prepare("SELECT * FROM tbl_buku WHERE id_buku =:id");
    $result->bindparam(':id', $id);
    $result->execute();
    $row=$result->fetch(PDO::FETCH_OBJ);
 ?>

<h1>Detail Buku</h1>

<form name="belanja" method="post" action="?page=belanja_detailpro" enctype="multipart/form-data">

  <table class="article">
    <tr>
      <td>Cover</td>
      <td>
        <input type="hidden" name="id_user" value="<?php echo $data->id_user ?>">
        <input type="hidden" name="id_buku" value="<?php echo $row->id_buku ?>">
        <img src="img/buku/<?php echo $row->nama_image ?>" width="100"><br><br>
      </td>
    </tr>

    <tr>
      <td>Nama Buku</td>
      <td>
        <?php echo $row->judul ?>
      </td>
    </tr>

    <tr>
      <td>Harga</td>
      <td>
        <input type="hidden" name="harga" value="<?php echo $row->harga; ?>">
        <?php echo "Rp. ".$row->harga ?>
      </td>
    </tr>

    <tr>
      <td>Stok</td>
      <td>
        <input type="hidden" name="sisa" value="<?php echo $sisa ?>">
        <?php echo $sisa ?>
      </td>
    </tr>

    <tr>
      <td>Pengarang</td>
      <td>
      <?php echo $row->pengarang ?>
      </td>
    </tr>

    <tr>
      <td>Penerbit</td>
      <td>
      <?php echo $row->penerbit ?>
      </td>
    </tr>

    <tr>
      <td>Qty</td>
      <td>
        <input type="number" name="qty" min="1">
      </td>
    </tr>

    <tr>
      <td>Kurir Pengiriman</td>
      <td>
        <select name="kurir">
          <option>-- Pilih Ekspedisi --</option>
          <option value="JNT">JNT</option>
          <option value="JNE">JNE</option>
          <option value="NINJA">NINJA</option>
          <option value="SILAMBAT">SI-LAMBAT</option>
          <option value="SICEPAT">SI-CEPAT</option>
          <option value="GOJEK">GO-JEK</option>
        </select>
      </td>
    </tr>

    <tr>
      <td></td>
      <td>
        <input class="tombol-biru" type="submit" name="belanja" value="Masukkan Kedalam Keranjang">
        <a class="tombol-merah" href="?page=beranda">Batal</a>
      </td>
    </tr>
  </table>

</form>

</div>
