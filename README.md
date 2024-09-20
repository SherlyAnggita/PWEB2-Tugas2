# Tugas 2 Praktik Pemrograman Web II
<h2>Konsep Object Oriented Programing</h2>
<p></p>OOP atau Object Oriented Programming merupakan pemograman yang beroritentasi pada objek yang didalamnya terdapat konsep class dan Objek. Dengan memanfaatkan class dan objek, kode dapat diorganisir dengan baik dan dapat digunakan kembali. Cara kerja OOP yaitu membangun program dari gabungan objek objek yang saling berhubungan dan disusun menjadi satu kesatuan.</p>
<h2>Konsep dasar OOP meliputi:</h2>
<ul>
  <li> Inheritance (pewarisan)</li>
  <li> Encapsulation (pembungkusan)</li>
  <li> Polymorphism (memiliki banyak wujud)</li>
  <li> Abstraction</li>
</ul>
<p>Pada tugas 2 kita akan menerapkan metode constract pada koneksi ke database. Selain itu pada tugas ini akan menerapkan konsep dasar OOP Pewarisan, dimana suatu class akan mewarisi class lain, serta akan menampilkan data yang ada di database.</p>
<h2>1. Membuat Database</h2>

![database pweb2](https://github.com/user-attachments/assets/1fc1b4b4-ae07-461f-a5db-acd3e53114db)<br><hr>

pembuatan database dilakukan dengan mengaktifkan server database. kemudian klik create database. Pada gambar diatas database diberi nama pweb_2 yang didalamnya terdapat tabel mahasiswa dan tabel nilai.

<h3>a. Tabel mahasiswa</h3>


![tabel mhs](https://github.com/user-attachments/assets/3ed81282-e543-4dd1-9125-f902a015e9cf)<br>


![database nilai kebalik sm mhs](https://github.com/user-attachments/assets/abf00999-3b66-4b29-b29e-e5fde7b9c655)<br><hr>


Pada saat pembuatan tabel mahasiswa, kita akan mengisi type data pada setiap kolom yang dibuat dengan id mahasiswa sebagai primary key dan dilanjutkan dengan mengisi data tabael mahasiswa seperti dibawah ini.<br>



<h3>b. Tabel Nilai</h3>


![tbl nilai](https://github.com/user-attachments/assets/9be91eec-9abc-4902-b6a9-e2cdc6906c80)<br>



![database mhs](https://github.com/user-attachments/assets/f6bb7e63-7c48-4850-b59b-d5cf453602bd)<br><hr>



Pembuatan tabel Nilai sama dengan membuat tabel mahasiswa sebelumnya. Pada tabel ini id nilai sebagai primary key dan id mahasiswa, id matkul dan id semester sebagai foreign key. Foreign merupakan primary key yang ada di tabel lain. <br>




<h2>2. Membuat koneksi database</h2><br>


![class connec](https://github.com/user-attachments/assets/2f72687c-813e-4190-b070-14f9d100e9ff)<br><hr>



<p><b>Penjelasan :</b> Koneksi ke database dilakukan dengan membuat file koneksi.php di vscode. Kemudian kita membuat class dengan nama connection yang berisikan atribut atau properti yang telah di encapsulation menjadi private. metode construct sebagai fungsi untuk membuat koneksi database seperti dokumentasi diatas. </p><br>

<h2>3. Membuat class Mahasiswa</h2><br>


![class mhs](https://github.com/user-attachments/assets/5d4ff91c-01be-4f04-bd57-3b393db9a745)<br>



![image](https://github.com/user-attachments/assets/51744ee1-859d-44a5-b468-f1b72aaf6a13)<br>



![data mahasiswa](https://github.com/user-attachments/assets/3a35dfb8-1a9a-4f22-a910-dba76f6b2133)<br><hr>



<p><b>Penjelasan :</b>class mahasiswa merupakan turunan dari class Connection.Pada class Mahasiswa terdapat metode tampilkanData dimana metode tersebut akan menyimpan data yang akan ditampilkan. Untuk menampilkan data tabel mahasiswa maka dibuat file indexmahasiswa.php yang berisi objek yang akan ditampilkan oleh class mahasiswa yang memiliki akses ke database. Output yang akan muncul seperti gambar dibawah ini</p><br>



<h2>4. Membuat class Nilai</h2><br>


![class nilai](https://github.com/user-attachments/assets/702c65e7-10e1-484c-8aff-f68d53656b4d)<br>



![image](https://github.com/user-attachments/assets/ae673ffb-0d09-462b-81bc-fbd8b3f5b5da)<br>




![data nilai](https://github.com/user-attachments/assets/68e48c49-b7ce-4cae-aa61-21dc6d3b0dec)<br><hr>



<p><b>Penjelasan :</b> Class Nilai juga merupakan turunan dari class Connection. Terdapat metode tampilkanData untuk menyimpan data dan file indexnilai.php berisikan objek yang akan ditampilkan seperti Output.</p><br>


<h2>5. Membuat Class MahasiswaPoly1</h2><br>

![class purbalingga](https://github.com/user-attachments/assets/935b843e-8564-4380-8b87-067b61462141)<br>



![image](https://github.com/user-attachments/assets/c0212df0-abff-449f-8ed7-63527db66dcf)



![image](https://github.com/user-attachments/assets/db87bf41-407a-4671-989b-1165102506dd)<br><hr>



<p><b>Penjelasan :</b> Pada class ini metode yang digunakan adalah polymorphism dimana class ini merupakan turunan dari class Connection dan memiliki metode yang sama tetapi data yang akan ditampilkan akan berbeda. Code tersebut hanya akan menampilkan data yang diambil dari tabel  mahasiswa dimana hanya mahasiswa dengan alamat = 'Purbalingga' saja yang akan ditampilkan. seperti output yamg ditampilkan. </p><br>



<h2>6. Membuat class NilaiPoly</h2><br>

![class nilai poly](https://github.com/user-attachments/assets/321f0d43-b495-4b4c-ba95-3cfadfa80d7f)<br>


![image](https://github.com/user-attachments/assets/0b007bd4-a3d1-456f-ae5c-fd9c5fa846ca)



![nilai turunan](https://github.com/user-attachments/assets/97d1fa09-8909-4812-88ec-aca97d8708eb)<br><hr>


<p><b>Penjelasan :</b> class NilaiPoly juga merupakan turunan dari class Connection dimana class ini menggunakan metode polymorphism. Sehingga data yang akan diambil dari tabel nilai di database hanya mahasiswa dengan nilai 90 yang akan ditampilkan seperti output dari class NilaiPoly.</p><br>


<h2>7. Membuat Nav Bar</h2>

![nav mahasiswa](https://github.com/user-attachments/assets/996f1e35-be05-40fa-a6ee-0148eafca1ff)



![nav nilai](https://github.com/user-attachments/assets/95bdfa7d-87c6-4a20-b1b4-44d678fab0cf)<br><hr>


<p>NavBar merupakan menu navigasi pada website kita harus responsive saat diakses menggunakan berbagai perangkat.Navbar berfungsi sebagai panduan bagi pengguna untuk menjelajahi situs web. Ini memudahkan pengguna untuk berpindah ke berbagai halaman tanpa harus mencari link di dalam konten. Biasanya, navbar berisi tautan (link) yang mengarahkan pengguna ke berbagai bagian atau halaman website, seperti pada navbar diatas yang mangarahkan pengguna untuk melihat data mahasiswa dan data mahasiswa turunan serta data nilai dan data nilai turunan dengan mengklik navigasi tersebut, yang kemudian secara otomatis akan diarahkan ke halaman tujuan.</p>



