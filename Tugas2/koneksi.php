<?php

class Connection { //class yang mengkoneksikan ke database MySQL
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "pweb_2"; //nama database yang digunakan
    public $koneksi;

    public function __construct() //digunakan
    {
        //membuat koneksi ke database
        $this->koneksi = new mysqli($this->host, $this->user, $this->password, $this->database);
        
        //pengecekan jika koneksi gagal, maka akan tampil koneksi database gagal
        if (mysqli_connect_errno()) {
            echo "koneksi database gagal: " . mysqli_connect_error();
        }
    }
}

//class inheritance dari class Connection
class Mahasiswa_1 extends Connection{
    //fungsi atau metode untuk menampilkan data tabel mahasiswa yang ada di database
    public function tampilkanData()
    {
    $mahasiswa = "SELECT * FROM mahasiswa";
    return mysqli_query($this->koneksi, $mahasiswa);
    }
}

class Nilai extends Connection{
    //fungsi untuk menampilkan data tabel nilai di database
    public function tampilkanData()
    {
    $nilai = "SELECT * FROM nilai";
    return mysqli_query($this->koneksi, $nilai);
    }
}

//class turunan dari class Connection
class MahasiswaPoly1 extends Connection{
    // Fungsi untuk mengambil data mahasiswa yang beralamat di 'Purbalingga'
    public function tampilkanData()
    {
     $poly = "SELECT * FROM mahasiswa WHERE alamat = 'Purbalingga'";
     return mysqli_query($this->koneksi, $poly);   
    } 
}
// Class NilaiPoly turunan dari class Connection
class NilaiPoly extends Connection{
    // Fungsi untuk mengambil data nilai yang bernilai '90'
    public function tampilkanData()
    {
    $nilai_poly = "SELECT * FROM nilai WHERE nilai = '90'";
    return mysqli_query($this->koneksi, $nilai_poly);
    }
}
?>
