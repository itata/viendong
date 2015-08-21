jQuery(function( $ ){
	
	$('#loginform input[type="text"]').attr('placeholder', 'Email Address');
	$('#loginform input[type="password"]').attr('placeholder', 'Password');
	$('#lostpasswordform #user_login').attr('placeholder', 'Email Address');
	
	$('#loginform label[for="user_login"], #lostpasswordform label[for="user_login"]').contents().filter(function() {
		return this.nodeType === 3;
	}).remove();
	
	$('#loginform label[for="user_pass"]').contents().filter(function() {
		return this.nodeType === 3;
	}).remove();
	
});