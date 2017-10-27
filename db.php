<?php

  $site["dbhost"]   = 'localhost';
  $site["dbname"]   = 'smsd';
 
  $site["dblogin"]  = 'root';
  $site["dbpass"]   = '';

  mysql_connect($site["dbhost"], $site["dblogin"], $site["dbpass"]);
  mysql_select_db($site["dbname"]);

?>
