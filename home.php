<?php
	$title = 'Home';
	$tab = 'home';
	include('includes/header.php');
?>
		<link href='css/home.css' rel='stylesheet' type='text/css'>
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
				<div id="left">
					<div id="about" class="mako">
						<img src="<?php echo $about_image_url; ?>" />
						<p id="about"><?php echo nl2br($about_text); ?>
						<br/><br/>詳細は<a href="about">こちら</a>。</p>
					</div>
				</div>
				<div id="center">
					<h3 class="sub-title">Featured Book</h3>
					<div id="featured-book">
						<a target="_blank" href="<?php echo $featured_book_amazon_url; ?>">
							<img src="<?php echo $featured_book_image_url; ?>"/>
						</a>
					</div>
					<p id="featured-book-desc" class="mako">
						<?php echo nl2br($featured_book_text); ?>
						<br/><br/>目次は<a href="featured">こちら</a>。
					</p>
				</div>
				<div id="right">
					<h3 class="sub-title">
						<span>Twitter</span> 
						<a href="https://twitter.com/yomakino" class="twitter-follow-button" data-show-count="false">Follow @yomakino</a>
						<script src="//platform.twitter.com/widgets.js" type="text/javascript"></script>
					</h3>
					<script src="http://widgets.twimg.com/j/2/widget.js"></script>
					<script>
					new TWTR.Widget({
					  version: 2,
					  type: 'profile',
					  rpp: 4,
					  interval: 30000,
					  width: 250,
					  height: 400,
					  theme: {
						shell: {
						  //background: '#333333',
						  //color: '#ffffff'
						  background: 'transparent',
						  color: 'black'
						},
						tweets: {
						  //background: '#000000',
						  //color: '#ffffff',
						  background: 'transparent',
						  color: 'black',
						  //links: '#006600'
						  links: '#131331'
						}
					  },
					  features: {
						scrollbar: false,
						loop: false,
						live: false,
						hashtags: true,
						timestamp: true,
						avatars: false,
						behavior: 'all'
					  }
					}).render().setUser('yomakino').start();
					</script>
				</div>
			</div>
			<h3 id="works-title" class="sub-title">Books</h3>
			<div id="works">
				<div id="works-box">
					<div id="works-container">
						<ul>
<?php
	foreach( $books as $i => $value ){
?>
							<li class="start">
								<a href="<?php echo $value[5]; ?>" target="_blank"><img id="Buffet" src="<?php echo $value[1]; ?>"/></a>
								<div class="book-desc">
									<div class="book-desc-box">
										<p class="book-desc-title"><?php echo $value[2].' '.$value[3]; ?></p>
										<p class="book-desc-body"><?php echo substr($value[4],0, 120) ?>...&nbsp;詳細は<a href="books#<?php echo $i; ?>">こちら</a></p>
									</div>
								</div>
							</li>
<?php
	}
?>
						</ul>
					</div>
					<div class="works-nav" id="left-nav"></div>
					<div class="works-nav" id="right-nav"></div>
				</div>
			</div>
		</div>
		<?php include('includes/bottom.html'); ?>
	</body>
</html>