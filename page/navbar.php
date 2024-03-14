<?php
session_start();
if (isset ($_SESSION['username'])){
  if ($_SESSION['status'] == 'user'){
    $user = $_SESSION['username'];
    $title = $_SESSION['status'];

    echo "<li><a href='?page=beranda'>Beranda</a></li>";
    echo "<li><a href='?page=belanja'>Pesanan</a></li>";
    echo "<li><a href='?page=profil'>Profil</a></li>";
    echo "<li><a href='?page=tentang'>Tentang</a></li>";
    echo "<li class='logout'><a href='page/logout.php'>Log Out</a></li>";
    echo "<li class='login'><a><b></b>$user</a></li>";

  } elseif ($_SESSION['status'] == 'admin') {
    $user = $_SESSION['username'];
    $title = $_SESSION['status'];

    echo "<li><a href='?page=beranda'>Beranda</a></li>";
    echo "<li><a href='?page=barang'>Buku</a></li>";
    echo "<li><a href='?page=transaksi'>Transaksi</a></li>";
    echo "<li><a href='?page=user'>User</a></li>";
    echo "<li><a href='?page=profilad'>Profil</a></li>";
    echo "<li class='logout'><a href='page/logout.php'>Log Out</a></li>";
    echo "<li class='login'><a><b></b>$title $user</a></li>";
  }
} else {
  echo "<li><a href='?page=beranda'>Beranda</a></li>";
  echo "<li><a href='?page=tentang'>Tentang</a></li>";
  echo "<li class='login'><a href='page/login.php'>Sign In</a></li>";
}
 ?>
