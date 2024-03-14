<div class="box-title">
    <p>Detail Pembayaran</b></p>
</div>
<div id="box">
<h1>Pemesanan Buku</h1>
<?php

    include 'lib/koneksi.php';


    $total = $_GET['jum'];
    $id = $_GET['id'];
    try {
      $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $insert = $conn->prepare("INSERT INTO tbl_pesanan (id_user,id_buku,pengarang,qty,kurir,date_in,total) SELECT id_user,id_buku,pengarang,qty,kurir,date_in,total FROM tbl_keranjang WHERE id_user=:id");
      $insert->bindparam(':id', $id);
      $insert->execute();

      $delete = $conn->prepare("DELETE FROM tbl_keranjang WHERE id_user=:id");
      $delete->bindparam(':id', $id);
      $delete->execute();
      ?>
  <table class="article">
    <tr>
      <td>Status Pesanan</td>
      <td><a class="tombol-merah">Pesanan Berhasil</a></td>
    </tr>
    <tr>
      <td>Jumlah Pembayaran</td>
      <td><b><?php echo "Rp. ".$total; ?></b></td>
    </tr>
    <tr>
      <td>Deskripsi</td>
      <td>
        Lakukan pembayaran dengan mentransfer nominal <b>Jumlah Pembayaran</b> diatas pada rekening :<br>
        BANK BRI<br>
        Rekening : 066701022717502<br>
        A.N : Gian Akhiru Ramadhan<br>
        Atau bisa menggunakan QRIS dibawah ini : <br> <a href="bri.jpg" target="_blank" > 
          <img src=https://1.bp.blogspot.com/-nYGeWq_cRBc/UmI9R592JpI/AAAAAAAADAI/QPAKTHg7cUk/s350/Logo-Bank-BRI-transparent-background.png width="5%" height="5%">
        </a>
      </td>
    </tr>
    <tr>
      <td>Lanjutan</td>
      <td>
        Jika sudah melakukan pembayaran, segera <b>Konfirmasi Pembayaran</b> dengan mengirimkan bukti pembayaran di : <br>
        <a href="https://bit.ly/3J4HF1f" target="_blank" >
          <img src=https://logos-world.net/wp-content/uploads/2020/05/Logo-WhatsApp.png width="5%" height="5%">
        </a>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>
        Terimakasih telah membeli Buku di F&G BookStore <br>
        Silahkan lihat<a class="link" href="?page=belanja"> Detail Pesanan Anda</a>
      </td>
    </tr>
  </table>

   <?php
    } catch (PDOexception $e) {
      print "Added data failed: " . $e->getMessage() . "<br/>";
       die();
    }

 ?>
 
</div>
