	<div id="topgreen"></div>
		<div id="top">
			<h1 id="name-en"><span style="margin-right: 65px;margin-left: 10px;">Makino</span><span>Yo</span></h1>
			<h1 id="name-jp"></h1>
			<h2 id="tagline">Integrating Work and Life</h2>
		</div>
		<div id="nav">
			<ul>
				<li class="<?php if( $tab == "home" ) echo 'selected'; ?>">
					<a href="home.php"><h2>Home</h2></a>
				</li>
				<li class="<?php if( $tab == "about" ) echo 'selected'; ?>">
					<h2>About</h2><br/>
					<div>
						<a href="about.php"><h2>About Me</h2></a><br/>
						<a href="history.php"><h2>History</h2></a>
					</div>
				</li>
				<li class="<?php if( $tab == "books" ) echo 'selected'; ?>">
					<h2>Books</h2><br/>
					<div>
						<a href="books.php"><h2>Showcase</h2></a><br/>
						<a href="featured.php"><h2>Featured book</h2></a>
					</div>
				</li>
				<li class="<?php if( $tab == "news" ) echo 'selected'; ?>">
					<a href="news.php"><h2>News</h2></a>
				</li>
				<li class="<?php if( $tab == "contact" ) echo 'selected'; ?>">
					<a href="contact.php"><h2>Contact</h2></a>
				</li>
			</ul>
		</div>
		<div id="content">
			<div id="inner">