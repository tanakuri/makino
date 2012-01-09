<?php
	$title = 'About';
	$tab = 'about';
	include('includes/header.php');
?>
		<link href='css/about.css' rel='stylesheet' type='text/css'>
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