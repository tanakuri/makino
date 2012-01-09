<?php
	$title = 'About';
	$tab = 'about';
	include('includes/header.php');
?>
		<link href='css/background.css' rel='stylesheet' type='text/css'>
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-28208851-1']);
			_gaq.push(['_setDomainName', 'yomakino.com']);
			_gaq.push(['_trackPageview']);

			(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
	</head>
	<body>
		<?php include('includes/top.php'); ?>
			<div id="about">
				<div class="mako">
					<p id="profile">
						<img src="images/pic.JPG"/><br/><span>牧野洋（まきの・よう）</span>
					</p>
					<p><?php echo nl2br($about_ryakureki); ?></p>
				</div>
			</div>
		<?php include('includes/bottom.html'); ?>
	</body>
</html>