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
				opacity:0.6;
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
			}
			#books li.selected{
				opacity:1;
			}
			#books li .banner-small{
				width: 10px;
				height: 25px;
				position: absolute;
				right: 15px;
				top:10px;
			}
			#books li .banner-small-tan{
				background-image:url('images/banner-tan-small.png');
				background-size:10px 25px;
			}
			#books li .banner-small-kyo{
				background-image:url('images/banner-kyo-small.png');
				background-size:10px 25px;
			}
			#books li .banner-small-kaisetu{
				background-image:url('images/banner-kaisetsu-small.png');
				background-size:10px 25px;
			}
			#books li .banner-small-kanren{
				background-image:url('images/banner-kanren-small.png');
				background-size:10px 25px;
			}
			#books li .banner-small-yaku{
				background-image:url('images/banner-yaku-small.png');
				background-size:10px 25px;
			}
			.showcase{
				display:none;
			}
			.showcase .sc-left{
				display:inline-block;
				margin:0px 0px 30px 0px;
				width: 400px;
				position:relative;
			}
			.showcase .sc-left img{
				width:332px;
				padding:5px;
				background-color:white;
				border:1px solid #333;
				display:block;
				margin:0px auto;
			}
			.showcase .sc-left .banner{
				width: 60px;
				height: 150px;
				position: absolute;
				top: -8px;
				right: 40px;				
			}
			.showcase .sc-left .banner-tan{
				background-image:url('images/banner-tan.png');
				background-size:60px 150px;
			}
			.showcase .sc-left .banner-kyo{
				background-image:url('images/banner-kyo.png');
				background-size:60px 150px;
			}
			.showcase .sc-left .banner-kaisetu{
				background-image:url('images/banner-kaisetsu.png');
				background-size:60px 150px;
			}
			.showcase .sc-left .banner-kanren{
				background-image:url('images/banner-kanren.png');
				background-size:60px 150px;
			}
			.showcase .sc-left .banner-yaku{
				background-image:url('images/banner-yaku.png');
				background-size:60px 150px;
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
				position:relative;
			}
			.showcase .description h3{
				font-weight: bold;
				font-size: 1.5em;
				width: 450px;
				position: absolute;
				background-image: url('images/old-paper-texture.jpg');
				background-size: 450px 80px;
				left: -11px;
				padding: 5px 0px;
				height: 70px;
				line-height: 70px;
				z-index: 10;
			}
			.showcase .description h3.double{
				line-height: 35px;
			}
			.showcase .description h3:before{	
				border-color: transparent #7f3d00 #7f3d00 transparent;
				border-style:solid;
				border-width:4px;
				width:0;
				height:0;
				position:absolute;
				content:"";
				left:2px;
				top:-8px;
				z-index:-10;
			}
			.showcase .description h3:after{	
				border-color: transparent transparent #7f3d00 #7f3d00;
				border-style:solid;
				border-width:4px;
				width:0;
				height:0;
				position:absolute;
				content:"";
				right:2px;
				top:-8px;
				z-index:-10;
			}
			.showcase .description h3 span{
				font-weight:normal;
				font-size:0.9em;
			}
			.showcase .description p{
				text-align:left;
				margin-top:100px;
			}
			.showcase .amazon-button{
				display:inline-block;
				margin-top: 10px;
			}
		</style>
		<script>
		function getHash() {
  			var hash = window.location.hash;
  			if( hash.indexOf('-') > -1 ){
  				hash = hash.substring(1, hash.indexOf('-'));
  			} else {
  				hash = hash.substring(1);
  			}
  			return hash; // remove #
		}
		$(function(){
			var count = $('#books li.book').length;
			var width = Math.floor(880/count) - 30;
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
			
			//onload
			var index = getHash();
			var element = $('#books li').eq(index);
			$('#books li').removeClass('selected');
			var left = element.position().left - 10;
			$('.viewfinder').css({left:left});
			element.addClass('selected');
			var src = $('img', element).attr('src');
			$('#showcase img').attr('src', src);
			$('.showcase').hide();
			$('.showcase').eq(index).show();
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
					<div class="banner-small <?php if( $value[0] ) echo 'banner-small-'.$value[0];?>"></div>
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
					<div class="banner <?php if( $value[0] ) echo 'banner-'.$value[0];?>"></div>
				</div>
				<div class="sc-right">
					<div class="description mako">
						<h3 <?php if( $value[3] ) echo 'class="double"'; ?>> 
						<?php echo $value[2]; if( $value[3] ) echo '<br/><span>'.$value[3].'</span>'; ?>
						</h3>
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