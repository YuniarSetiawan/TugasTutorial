<?php
define('DB_HOST', 'localhost');/*server ya di pakai saat membuat database*/
define('DB_USER', 'root');/*nama user di server untuk masuk phpmyadmin*/
define('DB_PASS', '');/*memberi password di server untuk masuk phpmyadmin tapi saya kosonngin */
define('DB_NAME', 'wisataini');/*memangil database yang sudah kita buat di php myadmin*/

class Dbconfig {/*membuat class di dbconfig*/
    var $conn; /*membuat variable con untuk di gunakan di function*/

    function __construct() {/*membuat funngsi konstruktor*/
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);/*memnanggil data di atas */
        if ($this->conn->connect_error) {
            echo $this->conn->connect_error;
        }/*jika con gagal/error*/
    }

}


