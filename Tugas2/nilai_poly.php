<?php 
include ('koneksi.php'); //koneksi ke file koneksi.php yang memiliki akses database
$db = new NilaiPoly(); //membuat objek dari class NilaiPoly yang memiliki akses ke database
$nilai_poly = $db->tampilkanData(); //mengambil data Nilai turunan yang 
//disimpan pada variabel $nilai_poly yang dapat digunakan untuk menampilkan data dalam view nilai turunan
?>

<?php
include ('navbar.php'); //menampilkan navbar yang telah dibuat pada file navbar.php agar ditampilkan di view data nilai turunan
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Nilai</title>
  </head>

  <body>

    <div class="container" style="margin-top: 90px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
             <b> DATA NILAI </b> 
            </div>
            <!-- membuat table data nilai turunan -->
            <div class="card-body">
              <table class="table table-striped table-hover"> 
                <thead>
                  <tr>
                    <th scope="col">ID NILAI</th>
                    <th scope="col">NILAI</th>
                    <th scope="col">NILAI AKHIR</th>
                    <th scope="col">ID MAHASISWA</th>
                    <th scope="col">ID MATA KULIAH</th>
                    <th scope="col">ID SEMESTER</th>
                  
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      foreach ($nilai_poly as $row){
                  ?>
                <!-- menampilkan data dari tabel nilai yang ada di database -->
                  <tr>
                      <td><?php echo $row['nilai_id'] ?></td>
                      <td><?php echo $row['nilai'] ?></td>
                      <td><?php echo $row['nilai_akhir'] ?></td>
                      <td><?php echo $row['mahasiswa_id'] ?></td>
                      <td><?php echo $row['matkul_id'] ?></td>
                      <td><?php echo $row['semester_id'] ?></td>
                 
                      
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
