<?php
session_start();
if (isset($_SESSION["gagal"])){
    if($_SESSION["gagal"] >=3){
        echo '<h1 style="text-align:center;">anda di blokir</h1>';
        exit();
    }
}/*untuk proses peblokiran bila salah 3 kali*/
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>TUGAS BESAR</title>
        <link rel="icon"href="assets/images/fto.png">
        <link rel="stylesheet"href="assets/css/bootstrap.css"><!--memanggil bostrap di flder guna agar tamilan lebih rapi-->
        <link rel="stylesheet"href="assets/css/floating-labels.css">
        <script>
           window.setTimeout(function (){
           $(".alert").fadeTo(500,0).slideUp(500,function (){
           $(this).remove();
           });
           },7000);<!--untuk menampilkan alert jika terjadi kesalahan pada user ataupun password-->
        </script>
        <style>
            body{ background-image: url("assets/css/www.jpg");background-repeat: no-repeat; 
            background-position:center ;background-size: 100%;}
        </style><!--memberikan background pada tampilan -->
    </head>
    <body >
        <form id="frm01" name="frm01"method="POST" action="login.php" class="form-signin"><!--mengirim jika user dan password benar-->
            <div class="text-center mb-4">
                <img class="mb-4"src="assets/images/fto.png" width="100"height="100">
                <h1 style="color: greenyellow">LOGIN ADMIN</h1> 
            </div><!--untuk memberi judul dan gambar/logo-->
            <?php
            if (isset($_SESSION["gagal"])){
            if($_SESSION["gagal"] <3){
            echo'   <div class="alert alert-danger alert-dismissible fade show" role="alert">
                     anda gagal login ke-'.$_SESSION["gagal"].'......!!!'.'
                     <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>';
                  }
                }
            ?><!--untuk menampilkan pemberitahuan ke brapa jika terjadi kesalahan pada user ataupun password-->
            <div class="form-label-group">
                <input name="inEmail"   class="form-control" type="email"id="inEmail" placeholder="Email Address" autofocus="yes" autocomplete="no" required="yes" >
            <label for="inEmail">Email Address</label>
            </div><!--untuk membuat kotak username untuk di isi-->
            <div class="form-label-group">
                <input name="inPassword" class="form-control" type="password"id="inPassword"placeholder="password" required="yes">
                <label for="inPassword">password</label>
            </div><!--untuk membuat kotak password untuk di isi-->
            <div class="checkbox mb-3">
                <label style="color: greenyellow">
                    <input type="checkbox"> remember me...?
                </label>
            </div><!--untuk mengingatkan jika lupa-->
            <button type="submit" class="btn btn-lg btn-danger btn-block" data-toggle="modal" data-target="#ModalKu">login</button>
            <!--untuk membuat button agar bisa di klik saat melakukan input-->
        </form>
        <div class="modal fade" id="ModalKu" tabindex="-1" role="dialog" aria-labelledy="DialogModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ModalLabel01">
                            WARNING....
                        </h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="close">
                            &times;
                        </button>
                    </div> 
                    <div class="modal-body" >
                        <p>HARAP LENGKAPI USER DAN PASSWORD TERLEBIH DAHULU!!!!!!</p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal"> 
                            oke
                        </button>
                    </div>
                </div> 
            </div>   
        </div><!--dialog ketika user atau password belum  lenngkap agar melegkapi terlebih dahulu-->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script><!--agar alert rapi tidak berantakan-->
    </body>
</html>
