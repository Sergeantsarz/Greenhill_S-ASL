<?php
	/*
		<!--
			Sarah R. Greenhill
			ASL - Footer - July 13, 2016
		-->
	*/

?>				
				<script>
					$(function() {
						$( '#dl-menu' ).dlmenu();
					});
				</script>
				<footer class="footer">
					<div id="social_media">
					<a href="http://www.facebook.com"><?php echo img('images/fb.png'); ?></a>
					<a href="http://www.twitter.com"><?php echo img('images/twitter.png'); ?></a>
					<a href="http://www.reddit.com"><?php echo img('images/reddit.png'); ?></a>
					</div>
				
					<p>&copy;Sarah R. Greenhill  | July 2016</p>
					
					<ol class="breadcrumb">
					  <li class="active">Sitemap</li>
					  <li><a href="<?php echo site_url('delete_guildie/delete_guildie_id'); ?>">Remove Members</a></li>
					  <li><a href="<?php echo  site_url('insert_guildie'); ?>">Add Members</a></li>
					  <li><a href="<?php echo site_url('members'); ?>">View Members</a></li>
					  <li><a href="<?php echo site_url('main'); ?>">Logout</a></li>
					</ol>
				</footer>
				</div>
			</div>
		</div>
	</body>
</html>