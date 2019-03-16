<?php

include "koneksi/koneksi.php";
error_reporting(0);

$username=$_POST[username];
$pass=  md5($_POST['password']);
$time = date('Y-m-d H:m:s');


$login1=mysql_query(" SELECT * FROM users WHERE Email='$_POST[username]' AND Password='$pass'");
$row1=mysql_num_rows($login1);
$r1=mysql_fetch_array($login1);

    if ($row1 > 0){
  session_start();
 
  $_SESSION[passuser]   = $r1[Email];
  $_SESSION[id_user]    = $r1[Id];
  $_SESSION[password]   = $r1[Password];
  
 $insert = mysql_query("UPDATE `users` SET `creat_at` = '$time' WHERE `users`.`Id` = '$r1[id_user]'");

  
 echo'<script> window.location.href="CentralIndex.php?index=index"</script>';
  
}

else{
  echo "<script>window.alert('Username atau Password Anda Salah!!!');
        window.location=('index.php')</script>";
}

 

?>