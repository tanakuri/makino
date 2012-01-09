<?php
	$title = 'Contact';
	$tab = 'contact';
	include('includes/header.php');
?>
		<style>
			#comment{
				padding:30px 0px 50px;
				position:relative;
			}
			#comment p{
				text-align:center;
			}
			#comment p.toiawase{
				font-size:1.5em;
				margin:10px 0px 0px;
			}
			#comment p.requiredfield{
				font-size:1em;
				margin:0px 0px 20px;
			}
			#comment #input{
				width:320px;
				margin:0px auto;
				line-height:25px;
				font-size:1.1em;
				position:relative;
			}
			#comment #input input:not([name="submit"]),
			#comment #input textarea{
				width:300px;
				border:1px solid grey;
				-webkit-border-radius: 2px;
				-moz-border-radius: 2px;
				border-radius: 2px;
				font-size:0.9em;
				padding:3px;
			}
			#comment #input textarea{
				height:100px;
			}
			#comment #input #button{
				text-align:right;
			} 
			#comment #input #button button{
				border:1px solid grey;
				-webkit-border-radius: 3px;
				-moz-border-radius: 3px;
				border-radius: 3px;
				background-color:#191941;
				color:white;
				cursor:pointer;
				font-size:1.2em;
				margin:20px 0px;
			}
			#comment #input #button button:hover{
				opacity:0.9;
			}
			#comment #input #button button:active{
				opacity:1;
			}
			.red{
				color:red;
			}
			#ajax{
				position: absolute;
				top: 190px;
				left: 415px;
				display:none;
			}
		</style>
		<script>
			function validateEmail(email) { 
			    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
			    return re.test(email);
			} 
			$(function(){
				$('#submit').click(function(){
					var errmessage = '';
					var name = $('input[name="name"]').val();
					var email = $('input[name="email"]').val();
					var comment = $('textarea[name="comment"]').val();
					if( email == '' ){
						errmessage += 'please enter your email address<br/>';
					} else if( !validateEmail( email ) ){
						errmessage += 'please re-enter your email address <br/>(example: myname@domain.com or hisname@domain.co.jp )<br/>';
					}
					if( comment == '' ){
						errmessage += 'please enter a comment<br/>';
					}	
					$('.errormessages').html(errmessage);
					if( errmessage == '' ){
						$('#input').css({'opacity':0.3});
						$('#ajax').show();
						$.post('includes/submit.php', {name:name, email:email, comment:comment}, function(value){
							if( value == "good" ){
								$('#input').css({'opacity':1});
								$('#input').html('<p id="thanks">Thank you for your message!</p>');
								$('#ajax').hide();
							} else {
								$('.errormessages').html(value);
							}
						});
					}
				});
			});
		</script>
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