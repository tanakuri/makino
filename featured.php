<?php
$title = 'Books';
$tab = 'books';
include('includes/header.php');				
?>
		<link href='css/featured.css' rel='stylesheet' type='text/css'>
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-28208851-1']);
			_gaq.push(['_setDomainName', 'yomakino.com']);
			_gaq.push(['_trackPageview', document.location.href]);
			
			(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
	</head>
	<body>
		<?php include('includes/top.php'); ?>
			<h3><?php  echo $featured_book_title; if( $featured_book_tagline ){ ?>&nbsp;&nbsp;&nbsp;<span><?php echo $featured_book_tagline ?></span><?php } ?></h4>
			<div class="image">
				<img src="<?php echo $featured_book_image_url; ?>"/>
				<a target="_blank" href="<?php echo $featured_book_amazon_url; ?>"><div class="amazon-button"></div></a>
			</div>
			<div class="contents">
				<?php echo nl2br( $featured_book_details ); ?>
			</div>
		<?php include('includes/bottom.html'); ?>
	</body>
</html>