<?php
	include "config.php";
	$data = json_decode( file_get_contents( 'http://minecraft-api.com/v1/get/?server=' . $server_ip . $server_port ), true ); 
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $name ?></title>

    <!-- Bootstrap core CSS -->
    <link href="style.css" rel="stylesheet">
	<link rel="shortcut icon" href="http://minecraft-api.com/v1/logo/?server=<?php echo $server_ip ?>"/>
    <!-- Custom styles for this template -->
    <link href="styles.css" rel="stylesheet">
	<style type="text/css">
	body {
	background-image: url("bg.jpg");
	background-repeat: repeat;
	}
	
	</style>
    
	
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
	
    <div class="container">
	<div class="well">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="<?php echo $store ?>">Store</a></li>
  	  <li><a href="/forums">Forums</a></li>
	  <li><a href="#">Feed</a></li>
        </ul>
        <h3 class="text-muted"><img src="http://minecraft-api.com/v1/logo/?server=<?php echo $server_ip ?>"><?php echo $name ?></h3>
      </div>

      <div class="jumbotron">
        <h1><?php echo $name ?></h1>
        <p class="lead"><?php echo $description ?></p><br>
		
		<blockquote><p>Server IP: <code><?php echo $server_ip ?> : <?php echo $server_port ?> </code></p></blockquote>
      </div>

      <div class="row marketing">
        <div class="col-lg-6">
          <h4>Status:</h4>
          <p><?php if ( $data['status'] == true ) {
    // This will only be displayed if the server up and kick'in
    echo 'The server is <span class="label label-success">Online</span>';
} else {
    // This will only be displayed if the server is offline.
    echo 'The server is <span class="label label-danger">Offline!</span>';
}
?></p>
       </div>
		 
		 <div class="col-lg-6">
    <h4>Players Online</h4>
    <p><?php echo '' . $data['players']['online'] . ' players online' ?></p>
	
      </div></div>
		 

      <div class="footer">
        <p align="left">&copy; <?php echo $name ?> - <?php echo date('Y'); ?> <br>Contact: <?php echo $contact ?></p>
      </div>

    </div></div>

  </body>
  <!-- Website created by IanSzot -->
</html>
