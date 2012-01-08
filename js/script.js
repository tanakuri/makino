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