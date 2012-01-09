<?php
$title = 'Books';
$tab = 'books';
include('includes/header.php');				
?>
		<link href='css/books.css' rel='stylesheet' type='text/css'>
		<script src="js/books.js" type="text/javascript"></script>
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
			<ul id="books">
<?php		
	foreach ($books as $i => $value){
?>
				<li id="<?php echo $value[2]; ?>" class="book <?php if( $i == 0 ) echo 'selected'; ?>">
					<a name="<?php echo $i; ?>"></a>
					<img src="<?php echo $value[1]; ?>"/>
				</li>
<?php
	}
?>
				<li class="viewfinder">			
				</li>
			</ul>
<?php
	foreach ($books as $i => $value){
?>
			<div class="showcase">
				<div class="sc-left">
					<img src="<?php echo $value[1]; ?>"/>
				</div>
				<div class="sc-right">
					<div class="description mako">
						<h3 <?php if( $value[3] ) echo 'class="double"'; ?>> 
						<?php echo $value[2]; if( $value[3] ) echo '<br/><span>'.$value[3].'</span>'; ?>
						</h3>
						<p><?php echo $value[4]; ?></p>
						<a target="_blank" href="<?php echo $value[5]; ?>"><div class="amazon-button"></div></a>
					</div>
				</div>
			</div>
<?php
	}
?>			
		<?php include('includes/bottom.html'); ?>
	</body>
</html>