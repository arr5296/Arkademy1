<?php
  session_start();
  session_destroy();
  echo "<script>window.alert('Keluar dari Test Arkademy');
        window.location=('index.php')</script>";
?>
