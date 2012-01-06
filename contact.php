<?php
	$title = 'Contact';
	$tab = 'contact';
	include('includes/header.php');
?>
		<script>
			jQuery.preLoadImages("images/icons-hover.png");
		</script>
		<style>
			#comment{
				padding:30px 0px 50px;
			}
			#comment p{
				text-align:center;
				font-size:1.5em;
			}
			#comment #input{
				width:300px;
				margin:0px auto;
				line-height:25px;
				font-size:1.1em;
			}
			#comment #input input:not([name="submit"]),
			#comment #input textarea{
				width:300px;
				border:1px solid grey;
				-webkit-border-radius: 2px;
				-moz-border-radius: 2px;
				border-radius: 2px;
			}
			#comment #input input{
				font-size:1em;
			}
			#comment #input textarea{
				height:100px;
			}
			#comment #input #button input{
				float:right;
				border:1px solid grey;
				-webkit-border-radius: 2px;
				-moz-border-radius: 2px;
				border-radius: 2px;
				background-color:#191941;
				color:white;
				cursor:pointer;
			}
			#comment #input #button input:hover{
				opacity:0.8;
			}
			#comment #input #button input:active{
				opacity:0.5;
			}
		</style>
		<script>
		
		</script>
	</head>
	<body>
		<?php include('includes/top.php'); ?>
			<div id="contacts">	
				<div  class="mako" id="comment">
					<p>お問い合わせはこちらから</p>
					<form id="input" method="post" action="">
						<label for="name">Your Name</label><br/>
						<input name="name" type="text"><br/>
						<label for="email">Your Email</label><br/>
						<input name="email" ype="text"><br/>
						<label for="comment">Your Comment</label><br/>
						<textarea name="comment"></textarea><br/>
						<div id="button"><input name="submit" type="submit" value="Submit"/></div>
					</form>
				</div>
			</div>
		<?php include('includes/bottom.html'); ?>
	</body>
</html>