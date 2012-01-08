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
				border:1px solid silver;
				position:relative;
				padding:5px;
				background-color:white;
			}
			#about img#pic1{
				float:right;
				margin-bottom:30px;
				margin-left:30px;
				width:350px;
			}
			#about img#pic2{
				float:left;
				margin-bottom:30px;
				margin-right:30px;
				width:250px;
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
					<p><img id="pic1" src="images/image-drucker.jpg" />
					<?php echo nl2br($about_me_text_1); ?></p>
					<p><img id="pic2" src="images/image-cu.jpg" />
					<?php echo nl2br($about_me_text_2); ?></p>
					<p>略歴については<a href="background.php">こちら</a>をご覧ください。</p>
				</div>
			</div>
		<?php include('includes/bottom.html'); ?>
	</body>
</html>