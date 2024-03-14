<div class="box-title">
    <p>Barang / <b>Manajemen Buku</b></p>
</div>
<div id="box">

  <h1>Tambah Buku</h1>
  <form name="add" method="post" action="?page=tambah_barangpro" enctype="multipart/form-data">
  
    <table class="article">

      <tr>
        <td>Cover</td>
        <td>
          <input type="file" name="gambar" required>
        </td>
      </tr>
  
      <tr>
        <td>Judul Buku</td>
        <td>
          <input type="text" name="judul" size="50"required>
        </td>
      </tr>
  
      <tr>
        <td>Harga</td>
        <td>
          <input type="text" name="harga" size="50"required>
        </td>
      </tr>
  
      <tr>
        <td>Stok Buku</td>
        <td>
          <input type="text" name="stok" size="50"required>
        </td>
      </tr>

      <tr>
        <td>Pengarang</td>
        <td>
          <input type="text" name="pengarang" size="50"required>
        </td>
      </tr>

      <tr>
        <td>Penerbit</td>
        <td>
          <input type="text" name="penerbit" size="50"required>
        </td>
      </tr>

      <tr>
        <td>Tahun Terbit</td>
        <td>
          <input type="text" name="th_terbit" size="50"required>
        </td>
      </tr>
  
      <tr>
        <td></td>
        <td>
          <input class="tombol-biru" type="submit" name="add" value="Tambah & Simpan">
          <a class="tombol-merah" href="?page=barang">Batal</a>
        </td>
      </tr>
    </table>
  
  </form>
  


</div>
