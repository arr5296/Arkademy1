<?php
require_once 'koneksi/koneksi.php';
error_reporting(0);
session_start();
if(empty($_SESSION[passuser]) AND empty($_SESSION[passuser])){
    echo '<center> Untuk dapat mengkases sistem Bazznas Tim Survey Harus Login Dengan Benar';
    echo'<a href=index.php?index=login><b>Login</b></a></center>';
}
else{
?>

<html lang="en">
  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!-- style -->
    
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/css.css" rel="stylesheet">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link href="https://fonts.googleapis.com/css?family=Barlow" rel="stylesheet">
    <title>Test Arkademy</title>
    <script src="assets/js/modernizr.js"></script>
  </head>

  <body>
        
    <!-- Fixed navbar -->
    

   <div class="navbar navbar-grey">
 <div class="container">
  <div class="navbar-header">
   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
   </button>
   <a class="navbar-brand" href="?index=home"><img src="https://s3.amazonaws.com/studentjob-indonesia/job_posting/job_posting_1517315703_884316.jpg" style="width:80px; margin-top:0px;"></a>
  </div>
  <div>
   <ul class="nav navbar-nav navbar-right">
       <li><a href="?index=home">HOME</a></li>
            <li><a href="?index=person">PERSONS</a></li>
            <li><a href="?index=regions">REGIONS</a></li>
             <li><a href="?index=pengguna">USER</a></li>
             
             <li><a href="?index=logout" id="logout"<i style="margin-right: 10px" class="ace-icon fa fa-power-off"></i>LOGOUT</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <!--includ menu-->
   <!-- <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12" style="margin-top: 20px;"></div>-->
          
    <?php
        if($_GET['index']=='home'){
            include "home.php";
        }
        elseif($_GET['index']=='login'){
            include 'index.php';
        }
        elseif($_GET['index']=='logout'){
            include 'logout.php';
        }
        elseif($_GET['index']=='index'){
            include 'home.php';
        }
        elseif($_GET['index']=='about'){
            include 'about.php';
        }
        
         elseif($_GET['index']=='pengguna'){
            include 'Arka/pengguna.php';
        }
        
         elseif($_GET['index']=='tambah_pengguna'){
            include 'Arka/tambah_pengguna.php';
            
        }
         elseif($_GET['index']=='edit_pengguna'){
            include 'Arka/edit_pengguna.php';
            
        }
        elseif($_GET['index']=='TambahUser'){
            include 'aksi/aksi_pengguna.php';
            
        }
        elseif($_GET['index']=='HapusUser'){
            include 'aksi/aksi_pengguna.php';
            
        }
        elseif($_GET['index']=='UbahUser'){
            include 'aksi/aksi_pengguna.php';
            
        }
         elseif($_GET['index']=='index'){
            include 'index.php';
            
        }
        
        elseif($_GET['index']=='person'){
        include 'Arka/persons.php';
        
        }
        elseif($_GET['index']=='TambahPerson1'){
            include 'Aksi/aksi_person.php';
            }
            elseif($_GET['index']=='UbahPerson'){
                include 'Aksi/aksi_person.php';
                }
                elseif($_GET['index']=='HapusPerson'){
                    include 'Aksi/aksi_person.php';
                    }
                    elseif($_GET['index']=='regions'){
                        include 'Arka/regions.php';
                        
                        }
                        elseif($_GET['index']=='TambahRegions'){
                            include 'Aksi/aksi_region.php';
                            }
                            elseif($_GET['index']=='UbahRegions'){
                                include 'Aksi/aksi_region.php';
                                }
                                elseif($_GET['index']=='HapusRegions'){
                                    include 'Aksi/aksi_region.php';
                                    }         
    ?>
	<!-- *****************************************************************************************************************
	 FOOTER
	 ***************************************************************************************************************** -->
	 <div id="footerwrap">
	 	<div class="container">
		 	<div class="row">
		 		<div class="col-lg-4">
		 			<h4>Tentang Test Arkademy</h4>
		 			<div class="hline-w"></div>
		 			<p> Arkademy adalah Adalah Situm Pembelajaran Pemrograman Sesuai Dengan Permintaan Industri. </p>
		 		</div>
		 		<div class="col-lg-4">
		 			<h4>Social Links</h4>
		 			<div class="hline-w"></div>
		 			<p>
		 				<a href="www.baznaspekanbaru.or.id"><i class="fa fa-dribbble"></i></a>
		 				<a href="#"><i class="fa fa-facebook"></i></a>
		 				<a href="#"><i class="fa fa-twitter"></i></a>
		 				<a href="#"><i class="fa fa-instagram"></i></a>
		 				<a href="#"><i class="fa fa-tumblr"></i></a>
		 			</p>
		 		</div>
		 		<div class="col-lg-4">
		 			<h4>Copy Right</h4>
		 			<div class="hline-w"></div>
		 			<p>
		 				Ahmad Rizki Ramadhan, 2019<br/>
		 			 UNIVERSITAS ISLAM NEGERI SULTAN SYARIF KASIM RIAU ,<br/>
		 				TEKNIK INFORMATIKA.<br/>
		 			</p>
		 		</div>
		 	
		 	</div><! --/row -->
	 	</div><! --/container -->
	 </div><! --/footerwrap -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
     <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/retina-1.1.0.js"></script>
	<script src="assets/js/jquery.hoverdir.js"></script>
	<script src="assets/js/jquery.hoverex.min.js"></script>
	<script src="assets/js/jquery.prettyPhoto.js"></script>
  	<script src="assets/js/jquery.isotope.min.js"></script>
  	<script src="assets/js/custom.js"></script>
       

        <script type="text/javascript">
            $(document).ready(function(){
               $("#tgl2").change(function(){
                  var tgl1 =$("#tgl1").val();
                  var tgl2 =$("#tgl2").val();
                  $.ajax({
                      url   :"cek_laporan.php",
                      data  : "&tgl1=" +tgl1 + "&tgl2="+ tgl2,
                      success  : function(data){
                          $("#exam").html(data);
                      }
                  });
               }); 
            });
        </script>
   </body>
</html>

  <?php } ?>



