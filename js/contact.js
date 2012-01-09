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