<?php
	$title = 'News';
	$tab = 'news';
	include('includes/header.php');
?>
		<link href='css/news.css' rel='stylesheet' type='text/css'>
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