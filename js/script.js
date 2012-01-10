$(function(){
	var navIndex = 0;
	var max = ($('#works-container ul li').length - 5 ) * 180;
	$('#left-nav').click(function(){
		if( !$('#works-container ul').is(":animated") ){
			$('#works-container ul li').eq(navIndex).removeClass('start');
			navIndex++;
			$('#works-container ul li').eq(navIndex).addClass('start');
			var left = Math.round($('#works-container ul').position().left);
			left -= 180;
			if( left <= -max ){
				$('#left-nav').hide();
			} else {
				$('#right-nav').show();
			}
			$('#works-container ul').animate({ left: left });
		}
	});
	$('#right-nav').click(function(){
		if( !$('#works-container ul').is(":animated") ){
			$('#works-container ul li').eq(navIndex).removeClass('start');
			navIndex--;
			$('#works-container ul li').eq(navIndex).addClass('start');
			var left = Math.round($('#works-container ul').position().left);
			left += 180;
			if( left >= 0 ){
				$('#right-nav').hide();
			} else {
				$('#left-nav').show();
			}
			$('#works-container ul').animate({ left: left });
		}
	});
	$('#works-container li').hover(function(){
		$('#works').css({'z-index':150});
	}, function(){
		$('#works').css({'z-index':50});
	});
});
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
(function() {
	var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
	po.src = 'https://apis.google.com/js/plusone.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();