<?php
	$title = 'About';
	$tab = 'about';
	include('includes/header.php');
?>
		<style>
			#about{
				padding:20px;
				line-height:27px;
			}
			#about div{
				
			}
			#about div p{
				font-size:1em;
			}
			#about div #profile{
				width:250px;
				height:180px;
				float:left;
				margin:0px;
			}
			#about div #profile img{
				width:185px;
				padding:5px;
				border:1px solid silver;
				background-color:white;
			} 
			#about div #profile span{
				font-size:1.1em;
				font-weight:bold;
				margin-left:5px;
			}
		</style>
		<script>
		
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