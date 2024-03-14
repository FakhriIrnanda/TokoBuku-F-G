<div class="box-title">
    <p>Barang / <b>Manajemen Buku</b></p>
</div>
<div id="box">

  
  <?php
      include 'lib/koneksi.php';

      $hal = isset($_GET['hal']) ? $_GET['hal'] : 1;
      $batas = 5;
      $posisi = ($hal-1) * $batas;
  
      $query = $conn->prepare("SELECT * FROM tbl_buku LIMIT $posisi, $batas");
      $query->execute();
      $data = $query->fetchAll();
      $count = $query->rowCount();
  ?>

  <h1>List Buku</h1>
  <a href="?page=tambah_barang"class="tombol-biru">Tambah Buku</a><br><br>
  <table class="news">
    <tr>
      <th>Id Buku</th>
      <th>Cover</th>
      <th>Judul Buku</th>
      <th>Harga</th>
      <th>Pengarang</th>
      <th>Penerbit</th>
      <th>Stok</th>
      <th>Tanggal Entri</th>
      <th>Aksi</th>
    </tr>
    <?php
    foreach ($data as $value): ?>
        <tr>
            <td><?php echo $value['id_buku'] ?></td>
            <td>
              <img src="img/buku/<?= $value['nama_image'];?>" width="80">
            </td>
            <td><?php echo $value['judul'] ?></td>
            <td><?php echo $value['harga'] ?></td>
            <td><?php echo $value['pengarang'] ?></td>
            <td><?php echo $value['penerbit'] ?></td>
            <td><?php echo $value['stok'] ?></td>
            <td><?php echo $value['created'] ?></td>
            <td>
              <a class="tombol-biru" href="?page=edit_barang&id=<?php echo $value['id_buku']; ?>">Ubah</a><br><br>
              <a class="tombol-merah" href="?page=hapus_barang&id=<?php echo $value['id_buku']; ?>">Hapus</a>
            </td>
        </tr>

    <?php
    endforeach;
     ?>
  </table>
  <br>
  <?php

    if ($count == 0){
      echo "<center>-- Belum ada data buku --</center>";
    }

    $semua = $conn->prepare("SELECT * FROM tbl_buku");
    $semua->execute();
    $jmldata = $semua->rowCount();
    $jmlhal = ceil($jmldata/$batas);
    $sebelum = $hal - 1;
    $berikut = $hal + 1;
  
    echo "<div class='paging'>";

    if ($hal > 1){
      echo "<span><a href='?page=barang&hal=1'><<</a></span>";
      echo "<span><a href='?page=barang&hal=$sebelum'>Previous</a></span>";
    }else {
      echo "<span><<</span>";
      echo "<span>Previous</span>";
    }

    if ($hal < $jmlhal){
      echo "<span><a href='?page=barang&hal=$berikut'>Next</a></span>";
      echo "<span><a href='?page=barang&hal=$jmlhal'>>></a></span>";
    }else {
      echo "<span>Next</span>";
      echo "<span>>></span>";
    }

    echo "</div>";
  ?>
  




</div>
