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
  	<link rel="shortcut icon" href="../favicon.ico"> 
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/default.css')?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/component.css')?>" />
  	<!--Fonts-->
  	<!--JS-->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  	
	<script src="<?php echo base_url('js/modernizr.custom.js')?>"></script>
  	<script src="<?php echo base_url('js/jquery.dlmenu.js')?>"></script>
  	<script>
		function toggleNavPanel(x){
		    var panel = document.getElementById(x), navarrow = document.getElementById("navarrow"), maxH="300px";
		    if(panel.style.height == maxH){
		        panel.style.height = "0px";
		        navarrow.innerHTML = "&#9662;";
		    } else {
		        panel.style.height = maxH;
		        navarrow.innerHTML = "&#9652;";
		    }
		}
</script>
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
			
		</div>
					<div class="column">
						<div id="dl-menu" class="dl-menuwrapper">
							<button class="dl-trigger">Open Menu</button>
							<ul class="dl-menu">
								<li>
									<a href="#">Pages</a>
									<ul class="dl-submenu">
										<li>
											<a href="<?php echo site_url('delete_guildie/delete_guildie_id'); ?>">Remove Members</a>
										</li>
										<li>
											<a href="<?php echo  site_url('insert_guildie'); ?>">Add Members</a>
										</li>
										<li>
											<a href="<?php echo site_url('members'); ?>">View Members</a>
										</li>
									</ul>
								</li>
								<li>
									<a href='http://localhost:8888/Fellowship/index.php/'>Logout</a>
								</li>
									
							</ul>
						</div>
					</div><!-- /dl-menuwrapper -->
				</div>
			</div>
		</div><!-- /container -->