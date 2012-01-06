<?php
	include('includes/data.php');
?>
<!doctype html>
<html>
	<meta charset="utf-8"/>
	<head>
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