<?php
session_start();/*untuk memulai*/
$user = $_POST["inEmail"];/*untuk memanggil id di username di login.php*/
$pass = $_POST["inPassword"];/*untuk memanggil id di password di login.php*/
//================================
$dbuser = "yuniarsetiawan@gmail.com";/*membuat username manual*/
$dbpass = "setiawan123";/*membuat password manual*/
//================================
if($user == $dbuser && $pass == $dbpass){/*jika username dan password sama maka akan di pos ke menu.php*/
    ?>
<script>
    window.location="menu.php";
    </script>
<?php
}else {
   if(isset($_SESSION["gagal"])){
       $_SESSION["gagal"]++;
   }else{
       $_SESSION["gagal"] = 1;
   } 
   header("location:loginadmin.php");
}/*jika gagal maka akan dikirim ke loginadmin.php*/

