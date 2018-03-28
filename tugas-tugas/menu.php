<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<div class="wrap">
		<div class="header">			
                    <h1 style="text-align: center">DINAS PARIWISATA KOTA YOGYAKARTA</h1>
                    <h1><marquee style="font-family:verdana; color: orange" >JOGJA ISTIMEWA</marquee></h1>
		</div>
		<div class="menu">
			<ul>
                            <li><a href="index.php" style="color: white">Home</a></li>
                            <li><a href="wisata.php" style="color: white">Wisata</a></li>
                            <li><a href="galery.php" style="color: white">Gallery</a></li>
                            <li><a href="loginadmin.php" style="color: white">Admin</a></li>
			</ul>
		</div>
		<div class="badan">			
			<div class="sidebar">
				 jogjakarta
				<fieldset>
                                    <img src="assets/images/jog.jpg" width="200" height="200">
                                </fieldset>
			</div>
			<div class="content">
                            <h2>ADMIN</h2>
               <?php
               echo '<h1> data pengunjung </h1>';
              include_once 'config/dao.php';
              $dao = new Dao();
              $result = $dao->read();
              //$list = mysqli_fetch_array($result);
              //print_r($list)
               ?>
               <center>
               <table border="1" >
               <tr>
               <tr style="background-color:palegreen">
                <td >nomor</td>
                <td>tanggal</td>
                <td>pengunjung</td>
                <td>jumlah kendaraan</td>
                <td>pemasukan</td>
            </tr>
            <?php
                    while ($data=mysqli_fetch_array($result)){
                        echo "<tr>
                                <td>".$data[nomor]."</td>
                                <td>".$data[tanggal]."</td>
                                <td>".$data[pengunjung]."</td>
                                <td>".$data[jumlah_kendaraan]."</td>
                                <td>".$data[pemasukan]."</td>
                              </tr>";
                     }       
            ?>
        </tr>
        </table>
    </center>
			</div>
                </div>
		<div class="footer">
                    <p style="text-align: center ; color: white">copyright 2018 yuniar setiawan</p>
		</div>
	</div>
</body>
</html>