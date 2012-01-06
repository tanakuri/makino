<?php
	$title = 'About';
	$tab = 'about';
	include('includes/header.php');
?>
		<style>
			#about{
				padding:20px;
			}
			#aboutme{
				font-size:1.5em;
			}
			#about #quote{
				text-align:center;
				font-size:2em;
				
			}
			#about img{
				float:right;
				width:300px;
				border:2px solid white;
				margin-bottom:30px;
				margin-left:30px;
			}
			#about div{
				
			}
			#about div p{
				font-size:0.95em;
			}
		</style>
		<script>
		
		</script>
	</head>
	<body>
		<?php include('includes/top.php'); ?>
			<div id="about">
				<p id="quote"><i><?php echo nl2br($about_me_text_above); ?></i></p>
				<p id="aboutme">About Me</p>
				<div class="mako">
					<img src="images/pic.JPG" />
					<p><?php echo nl2br($about_me_text); ?></p>
					<p>略歴については<a href="history.php">こちら</a>をご覧ください。</p>
				</div>
			</div>
		<?php include('includes/bottom.html'); ?>
	</body>
</html>