<?php require_once "../navigasi/navbar.php";
require_once "../navigasi/koneksi.php"; //memanggil file koneksi

// Query untuk mengambil data dari tabel users
$sql = "SELECT id_buku, judul, penerbit, tahun_terbit, stok, deskripsi FROM tb_buku ORDER BY id_buku ASC";

//untuk menjalankan perintah atau sql juga query diatasnya
$hasil = mysqli_query($koneksi ,$sql);

//mysqli_num_rows digunakn untk menghitung jmlh baris dri hasil query.
if (mysqli_num_rows($hasil) > 0){
//jika hsl query memiliki baris atau data, maka lakukan pengulangan untk mengambil setiap datanya, dan ubah datanya menjadi array asosiatif
  while ($row = mysqli_fetch_assoc($hasil)){
// $data[] berfungsi untk menampung data dari hasil while atau pengulangan diatas, yang akan digunakn atau diimplementasikan
    $data[] = $row;
  }
} else{
  $data = []; // Inisialisasi array kosong jika tidak ada data
}
?>

<div class="container">
  <!-- awal -->

  <div class="container center">
        <h1 class="fw-normal display-4">Data buku</h1>
        <hr class="border border-dark border-2 opacity-100">
        <div class="row align-items-center">
        </div>
        <div class="table-responsive">
         <table class="table table-bordered table-striped align-middle">
  <thead>
    <tr>
      <th scope="col" style="width:5%;">id_buku</th>
      <th scope="col">judul</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Tahun Terbit</th>
      <th scope="col">Stok</th>
      <th scope="col">Deskripsi</th>
      <th scope="col" style="width:15%; text-align:center;">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    if (!empty($data)) {
        $no = 1;
        foreach ($data as $user) {
    ?>
    <tr>
      <td><?php echo htmlspecialchars($user['id_buku']); ?></td>
      <td><?php echo htmlspecialchars($user['judul']); ?></td>
      <td><?php echo htmlspecialchars($user['penerbit']); ?></td>
      <td><?php echo htmlspecialchars($user['tahun_terbit']); ?></td>
      <td><?php echo htmlspecialchars($user['stok']); ?></td>
      <td><?php echo htmlspecialchars($user['deskripsi']); ?></td>
      <td class="text-center">
          <a href="../edit/edit_user.php?id=<?php echo $user['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
          <a href="../aksi/aksi_hapus.php?id=<?php echo $user['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</a>
      </td>
    </tr>
    <?php 
        } 
    } else {
    ?>
    <tr>
      <td colspan="6" class="text-center">Tidak ada data</td>
    </tr>
    <?php } ?>
  </tbody>
    </table>
  </div>
</div>

<?php require "../navigasi/footer.php"; ?>