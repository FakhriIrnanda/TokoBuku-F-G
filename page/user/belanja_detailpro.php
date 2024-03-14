<div class="box-title">
    <p>Beranda / <b>Produk Jualan</b></p>
</div>
<div id="box">
<h1>Detail Barang</h1>
<?php

    include 'lib/koneksi.php';


    $iduser = $_POST['id_user'];
    $idbarang = $_POST['id_buku'];
    $harga = $_POST['harga'];
    $date = date('Ymd');
    $qty = $_POST['qty'];
    $kurir = $_POST['kurir'];
    $total = $harga * $qty;
    $sisa = $_POST['sisa'];


    if ($qty > $sisa){
      echo "<script>alert('Kuantitas buku pesanan melebihi sisa stok buku');window.location='?page=belanja_detail&id=$idbarang&st=$sisa'</script>";
    }
    elseif ($qty <= 0){
      echo "<script>alert('Kesalahan dalam menginputkan kuantitas');window.location='?page=belanja_detail&id=$idbarang&st=$sisa'</script>";
    }
    else {

    try {
      $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $pdo = $conn->prepare('INSERT INTO tbl_keranjang (id_user, id_buku, qty, kurir, date_in, total)
                  values (:id_user, :id_buku, :qty, :kurir, :date_in, :total)');
      $insertdata = array(':id_user' => $iduser, ':id_buku' => $idbarang, 'qty' => $qty, 'kurir' => $kurir, ':date_in' => $date, ':total' => $total);

      $pdo->execute($insertdata);

      echo "<center><b>Buku Pesanan berhasil ditambahkan ke keranjang</b></center>";
      echo"<meta http-equiv='refresh' content='1;
      url=?page=beranda'>";

    } catch (PDOexception $e) {
      print "Gagal menambahkan buku: " . $e->getMessage() . "<br/>";
       die();
    }
    }

 ?>
</div>
