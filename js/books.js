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