<?php
	$title = 'About';
	$tab = 'about';
	include('includes/header.php');
?>
		<style>
			#about{
				padding:20px;
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
				<div class="mako">
					<p><?php echo nl2br($about_ryakureki); ?></p>
				</div>
			</div>
		<?php include('includes/bottom.html'); ?>
	</body>
</html>