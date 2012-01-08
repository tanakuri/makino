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
			#pic{
				position:relative;
			}
			#pic #santa-monica{
				width:700px;
				display:block;
				margin:30px auto 15px;
				padding:20px 0px;
				background-color:black;
			}
			#pic .caption{
				position:absolute;
				top:15px;
				right:80px;
				color:white;
				text-shadow:0px -1px 1px #333;
				padding:10px 20px;
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