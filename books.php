<?php
$title = 'Books';
$tab = 'books';
include('includes/header.php');				
?>
		<style>
			#books{
				margin:0px;
				padding:30px 10px 30px;
				height:150px;
				position:relative;
			}
			#books li{
				width:80px;
				padding:10px;
				margin:5px;
				cursor:pointer;
				list-style-type:none;
				float:left;
				z-index:10;
				position:relative;
			}
			#books li.viewfinder{
				position: absolute;
				left: 0px;
				top: 20px;
				height: 140px;
				background-color: white;
				border:1px solid #191941;
				width: 100px;
				z-index:5;
			}
			#books li img{
				width:100%;
				opacity:0.3;
			}
			#books li.selected img{
				opacity:1;
			}
			.showcase{
				display:none;
			}
			.showcase .sc-left{
				display:inline-block;
				margin:0px 0px 30px 0px;
				width: 400px;
			}
			.showcase .sc-left img{
				width:332px;
				padding:5px;
				background-color:white;
				border:1px solid #333;
				display:block;
				margin:0px auto;
			}
			.showcase .sc-right{
				vertical-align:top;
				display:inline-block;
				text-align:center;
				width:430px;
				margin:0px 0px 0px 30px;
			}
			.showcase .description{
				padding:20px;
				border: 1px solid grey;
				background-color:whiteSmoke;
			}
			.showcase .description h3{
				font-weight:bold;
				margin:10px 0px;
				font-size:1.2em;
			}
			.showcase .description h3 span{
				font-weight:normal;
				font-size:0.9em;
			}
			.showcase .description p{
				text-align:left;
			}
			.showcase .amazon-button{
				display:inline-block;
				margin-top: 10px;
			}
		</style>
		<script>
		function getHash() {
  			var hash = window.location.hash;
  			return hash.substring(1,2); // remove #
		}
		$(function(){
			var count = $('#books li.book').length;
			var width = 880/count - 30;
			var height = width*1.5;
			$('#books .viewfinder').css({
				width:width+20,
				height:height+20
			})
			$('#books li.book').css({
				width:width
			});
			$('.showcase').eq(0).show();
			
			$('#books li').click(function(){
				window.location.hash = $(this).index() + "-" + $(this).attr('id');
				var that = $(this);
				var index = that.index();
				$('#books li').removeClass('selected');
				var left = $(this).position().left - 10;
				$('.viewfinder').animate({left:left}, 400, function(){
					that.addClass('selected');
					var src = $('img', that).attr('src');
					$('#showcase img').attr('src', src);
					$('.showcase').hide();
					$('.showcase').eq(index).show();
				});
			});
			$('#books li').eq( getHash() ).click();
		});
		</script>
	</head>
	<body>
		<?php include('includes/top.php'); ?>
			<ul id="books">
<?php		
	foreach ($books as $i => $value){
?>
				<li id="<?php echo $value[2]; ?>" class="book <?php if( $i == 0 ) echo 'selected'; ?>">
					<a name="<?php echo $i; ?>"></a>
					<img src="<?php echo $value[1]; ?>"/>
				</li>
<?php
	}
?>
				<li class="viewfinder">			
				</li>
			</ul>
<?php
	foreach ($books as $i => $value){
?>
			<div class="showcase">
				<div class="sc-left">
					<img src="<?php echo $value[1]; ?>"/>
				</div>
				<div class="sc-right">
					<div class="description mako">
						<h3><?php echo $value[2]; if( $value[3] ) echo '<br/><span>'.$value[3].'</span>'; ?></h3>
						<p><?php echo $value[4]; ?></p>
						<a target="_blank" href="<?php echo $value[5]; ?>"><div class="amazon-button"></div></a>
					</div>
				</div>
			</div>
<?php
	}
?>			
		<?php include('includes/bottom.html'); ?>
	</body>
</html>