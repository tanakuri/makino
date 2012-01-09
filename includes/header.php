<?php
	include('includes/data.php');
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="keywords" content="Yo, Makino, Freelance journalist, Japanese, journalist, 日本語, ジャーナリズム, 経済, 牧野, 洋, 牧野洋">
		<meta name="description" content="">
		<meta name="author" content="Yo Makino">
		<meta name="copyright" content="January 2012">
		<title>Yo Makino - <?php echo $title; ?></title>
		<script src="js/jquery-1.6.1.min.js" type="text/javascript"></script>
		<script src="js/script.js" type="text/javascript"></script>
		<link href='http://fonts.googleapis.com/css?family=Cardo' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Mako' rel='stylesheet' type='text/css'>
		<link href='css/style.css' rel='stylesheet' type='text/css'>
		<script>
		(function($) {
			var cache = [];
			// Arguments are image paths relative to the current page.
			$.preLoadImages = function() {
				var args_len = arguments.length;
				for (var i = args_len; i--;) {
					var cacheImage = document.createElement('img');
					cacheImage.src = arguments[i];
					cache.push(cacheImage);
				}
			}
		})(jQuery);
		</script>