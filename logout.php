<?php
  session_start();
  session_destroy();
  echo "<script>window.alert('Terimakasih anda telah berhasil logout');
        window.location=('/spbu/login.php')</script>";
?>