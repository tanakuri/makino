<?php
	$title = 'News';
	$tab = 'news';
	include('includes/header.php');
?>
		<style>
			#news{
				padding:30px;
			}
			#news span{
				display:inline-block;
			}
			.date{
				width:150px;
				font-size:1.1em;
			}
		</style>
		<script>
		
		</script>
	</head>
	<body>
		<?php include('includes/top.php'); ?>
			<div id="news">
				<p class="news-header">
					<span class="date"></span>
					<span></span>
				</p>
<?php 
	foreach( $news as $value ){
?>
				<p class="news">
					<span class="date"><?php echo $value[0]; ?></span>
					<span class="mako"><?php echo $value[1]; ?></span>
				</p>
<?php
	}
?>
			</div>
		<?php include('includes/bottom.html'); ?>
	</body>
</html>