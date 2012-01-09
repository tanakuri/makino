<?php
	$title = 'Contact';
	$tab = 'contact';
	include('includes/header.php');
?>
		<link href='css/contact.css' rel='stylesheet' type='text/css'>
		<script src="js/contact.js" type="text/javascript"></script>
	</head>
	<body>
		<?php include('includes/top.php'); ?>
			<div id="contacts">	
				<div  class="mako" id="comment">
					<p class="toiawase">お問い合わせはこちらから</p>
					<p class="requiredfield"><span class="red">*</span> required field</p>
					<p class="red errormessages"></p>
					<div id="input" >
						<label for="name">Your Name</label><br/>
						<input name="name" type="text"><br/>
						<label for="email">Your Email <span class="red">* </span></label><br/>
						<input  class="required" name="email" ype="text"><br/>
						<label for="comment">Your Comment <span class="red">* </span></label><br/>
						<textarea class="required" name="comment"></textarea><br/>
						<div id="button"><button name="submit" id="submit">submit</button></div>
					</div>
					<img id="ajax" src="images/ajax-loader.gif"/>
				</div>
				<div id="direct">
					<p id="direct-email">
						<span class="label">Email: </span><span class="text">contact@yomakino.com</span>
					</p>
					<p id="direct-twitter">
						<span class="label">Twitter: </span><span class="text">@yomakino</span>
					</p>
				</div>
			</div>
		<?php include('includes/bottom.html'); ?>
	</body>
</html>