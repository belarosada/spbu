
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Aplikasi SMS Monitoring Mobil Tanki</title>

    <!-- Bootstrap -->
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/layout.css" rel="stylesheet">
    <script src="js/jquery-latest.min.js" type="text/javascript"></script>
    <script src="js/script.js"></script>
    <script src="js/script2.js"></script>
    <script src="js/script3.js"></script>
    <script src="js/script4.js"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div id="container">
      <div class="header">
      <div class="logo" ></div>
      </div><!-- end header -->
      <div id="cssmenu">
          <ul>
               <li><a href='/spbu'>Home</a></li>
               <li><a href='?page=hak_akses'>Hak Akses</a></li>
               <li><a href='?page=x'>Laporan</a></li>
               <li><a href='/spbu/logout.php'>Logout</a></li>
          </ul>
      </div><!-- end cssmenu -->
      <div class="conten">
      		<div class="leftmenu">
            	<div id='cssmenu2'>
                    <ul>
                       <li class='active'><a><span>Menu</span></a></li>
                       <li class='has-sub'><a href='#'><span>Master Data</span></a>
                          <ul>
                             <li><a href='?page=lokasi'><span>Data Lokasi</span></a></li>
                             <li><a href='?page=spbu'><span>Data SPBU</span></a></li>
                             <li><a href='?page=mobil'><span>Data Mobil</span></a></li>
							 <li><a href='?page=user'><span>Data User</span></a></li>
                          </ul>
                       </li>
                       <li class='has-sub'><a href='#'><span>SMS</span></a>
                          <ul>
                             <li><a href='?page=singel'><span>Single Cargo</span></a></li>
                             <li><a href='?page=multy'><span>Multi Cargo</span></a></li>
                          </ul>
                       </li>
                       <li class='last'><a href='?page=hak_akses'><span>Hak Akses</span></a></li>
					   <li class='last'><a href='?page=x'><span>Laporan</span></a></li>
					   <li class='last'><a href='/spbu/logout.php'><span>Logout (<?php echo $_SESSION[nama]?>)</span></a></li>
                    </ul>
                  </div>

            </div><!-- end leftmenu -->
            <div class="rightmenu"> 