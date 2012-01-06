<?php
	$title = 'Home';
	$tab = 'home';
	include('includes/header.php');
?>
		<style>
			#inner{
				position:relative;
				z-index:100;
			}
			/* TOP LEVEL LEFT CENTER RIGHT */
			#left, #center, #right{
				display:inline-block;
				vertical-align:top;
			}
			#left{
				width:200px;
				margin-top:57px;
			}	
			#center{
				width:400px;
				margin:0px 50px;
			}
			#right{
				width:100px;
			}
			.sub-title{
				font-size:1.3em;
				//font-weight:bold;
				margin:15px 0px;
				width:200px;
			}
			
			/* LEFT */
			#about{
				text-shadow:0px 1px 1px white;
				width:170px;
				font-size:0.9em;
			}
			#about img{
				border:solid 3px white; 
				width:150px;
			}
			
			/* CENTER */
			#featured-book{
				width:240px;
				height:320px;
				border:3px solid white;
				margin:auto;
				background-color:grey;
			}
			#featured-book img{
				width:100%;
				height:100%;
			}
			#featured-book img:hover{
				-moz-box-shadow: 0 0 5px 5px #fae28d;
				-webkit-box-shadow: 0 0 5px 5px #fae28d;
				box-shadow: 0 0 5px 5px #fae28d;
			}
			#featured-book-desc{
				padding:5px;
				margin:5px;
				font-size:0.9em;
			}
			/* RIGHT */
			.twitter-follow-button{
				display:inline-block;
				width: 60px !important;
				margin-left:20px;
				vertical-align:middle;
			}
			
			/* WORKS */
			#works{
				height:165px;
				//background-color:#333;
				padding:5px 0px 0px;
				//-moz-box-shadow: inset 0px 5px 5px #000000;
				//-webkit-box-shadow: inset 0px 5px 5px #000000;
				//box-shadow: inset 0px 5px 5px #000000;
				border-top:1px solid white;
				border-bottom:1px solid white;
				background-color:rgba(0,0,0,0.1);
				position:relative;
				z-index:50;
			}
			#works-title{
				width:900px;
				margin:10px auto;
				//font-weight:bold;
				//color:white;
				//text-shadow:0px -1px 1px grey;
			}
			#works-box{
				width:960px;
				height:100%;
				margin:auto;
				position:relative;
			}
			#works-container{
				width:900px;
				height:100%;
				overflow:hidden;
				margin:auto;
				position:relative;
				padding-top:195px;
				top:-195px;
			}
			#works ul{
				margin:0px auto;
				padding:5px 0px;
				width:10000px;
				height:150px;
				list-style-type:none;
				position:absolute;
				left:0px;
			}
			#works ul li{
				float:left;
				width:100px;
				height:100%;
				margin:0px 40px;
				cursor:pointer;
				position:relative;
			}
			#works ul li:hover .book-desc{
				display:block;
			}
			#works ul li img{
				width:100px;
				/*
				-moz-box-shadow: 3px 3px 3px #333;
				-webkit-box-shadow: 3px 3px 3px #333;
				box-shadow: 3px 3px 3px #333;
				*/
			}
			#works ul li img:hover{
				-moz-box-shadow: 0 0 5px 5px #fae28d;
				-webkit-box-shadow: 0 0 5px 5px #fae28d;
				box-shadow: 0 0 5px 5px #fae28d;
			}
			.book-desc{
				display:none;
				position:absolute;
				top: -130px;
				left: -35px;
				padding-bottom: 35px;
			}
			.book-desc-box{	
				position:relative;
				font-size:0.7em;
				width:140px;
				//height:170px;
				background-color:silver;
				z-index:100;
				padding:5px 10px;
				-webkit-border-radius: 15px;
				-moz-border-radius: 15px;
				border-radius: 15px;
				border:2px solid white;
				/*
				-moz-box-shadow: 3px -3px 3px #333;
				-webkit-box-shadow: 3px -3px 3px #333;
				box-shadow: 3px -3px 3px #333;
				*/
			}
			.book-desc-box:before{
				content:"";
			   display:block; 
			   position:absolute;
			   bottom:-11px;
			   left:70px;
			   width:0;
			   border-width:11px 11px 0;
			   border-style:solid;
			   border-color:white transparent;
			   z-index:110;
			}
			.book-desc-box:after{
				content:"";
			   display:block; 
			   position:absolute;
			   bottom:-8px;
			   left:73px;
			   width:0;
			   border-width:8px 8px 0;
			   border-style:solid;
			   border-color:silver transparent;
			   z-index:120;
			}
			.book-desc-box .book-desc-title{
				font-weight:bold;
				margin:0px;
			}
			.book-desc-box .book-desc-body{
				margin:0px;
			}
			.works-nav{
				position:absolute;
				top:50px;
				width:0px;
				height:0px;
				border-style: solid;
				border-width: 20px;
				cursor:pointer;
			}
			/*NAVY*/
			#right-nav{
				right:-10px;
				border-color: transparent transparent transparent #131331;
				display:none;
			}
			#left-nav{
				left:-10px;
				border-color: transparent #131331 transparent transparent;
			}
			#right-nav:hover{
				border-color: transparent transparent transparent #24245e;
			}
			#left-nav:hover{
				border-color: transparent #24245e transparent transparent;
			}
			#right-nav:active{
				border-color: transparent transparent transparent #131331;
			}
			#left-nav:active{
				border-color: transparent #131331 transparent transparent;
			}
		</style>
	</head>
	<body>
		<?php include('includes/top.php'); ?>
				<div id="left">
					<div id="about" class="mako">
						<img src="<?php echo $about_image_url; ?>" />
						<p id="about"><?php echo nl2br($about_text); ?>
						<br/>詳細は<a href="about.php">こちら</a>。</p>
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
						<br/>詳細は<a href="featured.php">こちら</a>。
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
										<p class="book-desc-body"><?php echo substr($value[4],0, 120) ?>...&nbsp;詳細は<a href="books.php#<?php echo $i; ?>">こちら</a></p>
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