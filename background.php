<?php
	$title = 'About';
	$tab = 'about';
	include('includes/header.php');
?>
		<link href='css/background.css' rel='stylesheet' type='text/css'>
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