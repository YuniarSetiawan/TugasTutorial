<?php
include_once 'dbconfig.php';/*untuk memanggil dbconfig*/
class Dao{/*membuat class dao*/
    var $db;/*membuat var db*/
    public function __construct() {/*nmemanggil function di dao.php*/
        $this->db = new Dbconfig();/*variable db di ganti menjadi Dbconfig*/
    }
    public function read(){/*unntuk membaca function*/
        $query = 'Select * from datapengunjung';/*untuk menampilkan database dari phpmyadmin/memaggilnya*/
        return mysqli_query($this->db->conn, $query);/*mengembalikan db/conn ke querry*/
    }
    
}



