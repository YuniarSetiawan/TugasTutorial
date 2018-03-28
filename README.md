# TugasTutorial
##Tutorial
````sh
1.	Pertama saiapkan aplikasi neatbean, xampp dan mysql
2.	Buka xampp lalu start apache dan mysqlnya 
3.	Lalu kita buka dulu mysql yog nya kita buat database terlebih dahulu misal seperti contoh
        CREATE DATABASE wisataini;			

        GRANT ALL PRIVILEGES
        ON wisataini.*
        TO 'root'@'localhost'
        IDENTIFIED BY'';
        FLUSH PRIVILEGES

         CREATE TABLE datapengunjung(
         nomor VARCHAR(100)NOT NULL,
         tanggal DATETIME DEFAULT NULL,
         pengunjung VARCHAR(10000) DEFAULT NULL, 
         jumlah_kendaraan VARCHAR(10000) DEFAULT NULL,
         jumlah_orang VARCHAR(10000) DEFAULT NULL,
         pemasukan VARCHAR(10000000)  DEFAULT NULL
         );
4.	Kemudian setelah berhasil kita buka di browser dengan alamat localhost/xampp lalu setelah di buka pilih phpmyadmin untuk mengisi    database yang suah dibuat.
5.	Kemudian kita buka neatbean untuk membuat program, saya membuat 
Index.php, wisata.php, login.php, loginadmin.php, menu.php, galery.php
6.	Index.php adalah halaman pertama saya kemudian buat post ke wisata.php,login.php, loginadmin.php, menu.php, galery.php.
7.	Dan membuat folder config untuk membuat dao.php dan dbconfig untuk memanggil database kita.
8.	Untuk penjelasan program saya sudah beri penjelasan di koding

````
