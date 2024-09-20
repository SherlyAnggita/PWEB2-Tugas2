<?php 
include ('koneksi.php'); //untuk mengkoneksikan ke file koneksi.php yang terkoneksi ke database
$db = new MahasiswaPoly1(); //membuat objek dari class Mahasiswa_1 yang memiliki akses ke database
$mahasiswa_poly = $db->tampilkanData();//mengambil semua data mahasiswa yang 
//disimpan pada variabel $mahasiswa yang dapat digunakan untuk menampilkan data dalam view
?>

<?php
include ('navbar.php'); //menampilkan navbar yang telah dibuat pada file navbar.php agar ditampilkan di view data mahasiswa
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Mahasiswa</title>
  </head>

  <body>

    <div class="container" style="margin-top: 90px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
             <b> DATA MAHASISWA </b>
            </div>
            <!-- membuat table data mahasiswa -->
            <div class="card-body">
              <table class="table table-striped table-hover" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">ID MAHASISWA</th>
                    <th scope="col">NAMA MAHASISWA</th>
                    <th scope="col">ALAMAT</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">NO TELPON</th>
                  
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      foreach ($mahasiswa_poly as $row){
                  ?>
                    <!-- menampilkan data dari tabel mahasiswa yang ada di database -->
                  <tr>
                      <td><?php echo $row['mahasiswa_id'] ?></td>
                      <td><?php echo $row['nama_mhs'] ?></td>
                      <td><?php echo $row['alamat'] ?></td>
                      <td><?php echo $row['email'] ?></td>
                      <td><?php echo $row['no_telp'] ?></td>
                 
                      
                  </tr>

                <?php
                }
                ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>