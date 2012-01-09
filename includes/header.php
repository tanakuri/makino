<?php
	include('includes/data.php');
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<meta name="keywords" content="牧野洋, 牧野, 牧野 洋, まきのよう, まきの・よう, マキノ　ヨウ, マキノ・ヨウ, 官報複合体, ジャーナリズム, ジャーナリスト, ジャーナリズムスクール, マスコミ, メディア, 報道, 経済, Ｍ＆Ａ, ドラッカー, バフェット, クレアモント, 日経, Yo Makino, Yo, Makino, Japanese journalist">
		<meta name="description" content="牧野洋の公式ウェブサイト。著書・訳書、プロフィール、予定、連絡先などを掲載。">
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