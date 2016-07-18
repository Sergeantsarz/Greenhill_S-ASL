<?php
	/*
		<!--
			Sarah R. Greenhill
			ASL - Header - July 13, 2016
		-->
	*/

?>

<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Sarah Greenhill | ASL Project</title>
	<!--CSS-->
  	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css')?>"/>
  	<!--Fonts-->
  	<!--JS-->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<!--Bootstrap-->
  	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> 
	</head>
	<body id="main">
		<script>
		  window.fbAsyncInit = function() {
		    FB.init({
		      appId      : '1058358257583521',
		      xfbml      : true,
		      version    : 'v2.7'
		    });
		  };
		
		  (function(d, s, id){
		     var js, fjs = d.getElementsByTagName(s)[0];
		     if (d.getElementById(id)) {return;}
		     js = d.createElement(s); js.id = id;
		     js.src = "//connect.facebook.net/en_US/sdk.js";
		     fjs.parentNode.insertBefore(js, fjs);
		   }(document, 'script', 'facebook-jssdk'));
		</script>
		
		<div class="jumbotron">
			<div class="logo">
				<?php echo img('images/fellowship_logo.png'); ?>
				<br>
				<span class="caption">The One Guild Manager to Rule Them All</span>
			</div>
			
			<div id="menu">
				<a href="#"><p>&#9776;</p></a>
			</div>	
			<?php echo "<a href='" . 'http://localhost:8888/Fellowship/index.php/' . "' role='button'><button id='logout' class='btn btn-default btn-md'>Logout</button></a>"; ?>
		</div>
		
		
		<div class="row">
			<div class="col-lg-12">
				<div id="content">