<?php
  ## Veritabanına bağlantı kuralım...
  ## Veritabanına bağlantı kuralım...
  $host     = "localhost:3306";
  $user     = "root";
  $password = "1234";
  $database = "kis_kampi_ornekleri";
  $cnnMySQL = mysqli_connect( $host, $user, $password, $database );
  if( mysqli_connect_error() ) die("Veritabanına bağlanılamadı...");
  $temp = mysqli_query($cnnMySQL, "set names 'utf8'");
?>
