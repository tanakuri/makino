<?php
$title = 'Books';
$tab = 'books';
include('includes/header.php');				
?>
		<style>
			h3{
				padding:30px;
				font-size:1.6em;
				text-align:center;
			}
			.image{
				display:inline-block;
				width:280px;
				margin:10px;
			}
			.image img{
				width:100%;
			}
			.image div{
				margin:20px auto;
			}
			.contents{
				display:inline-block;
				width: 530px;
				vertical-align: top;
				margin: 10px 30px;
			}
		</style>
		<script>
		
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