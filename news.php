<?php
	$title = 'News';
	$tab = 'news';
	include('includes/header.php');
?>
		<link href='css/news.css' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<?php include('includes/top.php'); ?>
			<div id="news">
				<p class="news-header">
					<span class="date"></span>
					<span></span>
				</p>
<?php 
	for( $i = count($news) - 1; $i >= 0; $i-- ){
?>
				<p class="news">
					<span class="date"><?php echo $news[$i][0]; ?></span>
					<span class="mako"><?php echo $news[$i][1]; ?></span>
				</p>
<?php
	}
?>
				<p id="pic">
					<img id="santa-monica" src="images/image-santamonica.jpg"/>
					<span class="caption">サンタモニカの夕陽</span>
				</p>
			</div>
		<?php include('includes/bottom.html'); ?>
	</body>
</html>