<div class="box-title">
    <p>Transaksi / <b>Transaksi Pembelian Buku</b></p>
</div>
<div id="box">
  <h1>Transaksi</h1>

  <?php
  include 'lib/koneksi.php';
  $query = $conn->prepare("SELECT * FROM tbl_pesanan
                           JOIN tbl_buku ON tbl_pesanan.id_buku=tbl_buku.id_buku
                           JOIN tbl_users ON tbl_pesanan.id_user=tbl_users.id_user
                           ORDER BY date_in DESC");
  $query->execute();
  $data = $query->fetchAll();
  $count = $query->rowCount();
  ?>

  <table class="news">
    <tr>
      <th>Id Pesanan</th>
      <th>Pemesan</th>
      <th>Id Buku</th>
      <th>Qty</th>
      <th>Kurir</th>
      <th>Tanggal Pemesanan</th>
      <th>Total</th>
      <th>Status</th>
    </tr>
    <?php
    foreach ($data as $value): ?>
        <tr>
            <td><?php echo $value['id_pesanan'] ?></td>
            <td><?php echo "(".$value['id_user'].") ".$value['nama_lengkap'] ?></td>
            <td><?php echo $value['judul'] ?></td>
            <td><?php echo $value['qty'] ?></td>
            <td><?php echo $value['kurir'] ?></td>
            <td><?php echo $value['date_in'] ?></td>
            <td><?php echo $value['total'] ?></td>
            <td>
              <a class="tombol-biru">Sukses</a><br><br>
              <a class="tombol-biru" href="?page=transaksi_detail&id=<?php echo $value['id_pesanan']; ?>">Detail</a>
            </td>
        </tr>
    <?php
    endforeach;
     ?>
  </table>
  <br>
  <?php
  if ($count == 0){
    echo "<center>-- Belum ada pesanan buku --</center>";
    echo "<br>";
  }
   ?>

</div>
