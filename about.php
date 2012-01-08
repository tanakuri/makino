<?php
	$title = 'About';
	$tab = 'about';
	include('includes/header.php');
?>
		<style>
			#about{
				padding:20px 20px 100px;
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
			#about #pic1{
				float:right;
				margin-left:30px;
				width:350px;
			}
			#about #pic2{
				float:left;
				margin-bottom:30px;
				margin-right:30px;
				width:250px;
			}
			#about #pic1 img{
				width:100%;
			}
			#about #pic2 img{
				width:100%;
			}
			#about .caption{
				padding: 15px;
				display: block;
				margin: 5px auto;
				font-size: 0.8em;
				background-color: white;
				border: 1px solid silver;
			}
			#about #pic1 .caption{
				width: 330px;
			}
			#about #pic2 .caption{
				width: 230px;
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
					<p>
						<div id="pic1">
							<img src="images/image-drucker.jpg" />
							<span class="caption">クレアモントにあるドラッカースクール校舎。<br/>手前の通りは、ドラッカー生誕１００年を記念して命名されたドラッカーウエー</span>
						</div>
						<?php echo nl2br($about_me_text_1); ?>
					</p>
					<p>
						<div id="pic2">
							<img src="images/image-cu.jpg" />
							<span class="caption">ニューヨークにあるコロンビア大学ジャーナリズムスクールの正面玄関。銅像は第３第アメリカ大統領トマス・ジェファーソン</span>
						</div>
						<?php echo nl2br($about_me_text_2); ?>
					</p>
					<p>略歴については<a href="background.php">こちら</a>をご覧ください。</p>
				</div>
			</div>
		<?php include('includes/bottom.html'); ?>
	</body>
</html>