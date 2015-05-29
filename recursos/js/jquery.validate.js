$(function(){

    //add custom validator for jquery validator
    jQuery.validator.addMethod('passwordMatch', function(value, element) {
        
    // The two password inputs
   	var password = $("#user_password").val();
    var confirmPassword = $("#user_password_confirmation").val();
 
    // Check for equality with the password inputs
    if (password != confirmPassword ) {
    	return false;
    } else {
        return true;
    }
}, "Your Passwords Must Match");


$("#signup").validate({

  errorClass:'error',  
  errorPlacement:function(error,element){
  	element.parent().prev().html(error);
  },
  
  success: function(label) {
    label.parent().next().find('button.success').show();
    label.parent().next().find('button.fail').hide();
    label.parent().html(get_string_from_for(label.attr('for')));
    console.log(label.parent().next());
  },
  
  highlight: function(element, errorClass) {
  	$(element).prev().show();
  },
  
  rules: {
    'user[username]': "required",
    'user[email]': "required",
    'user[password]': {
    	required:true,
    	minlength:9
    },
    'user[password_confirmation]': {
    	required:true,
    	passwordMatch:true
    }
   },
   messages:{
   		'user[username]':{
   			required:'You have to enter something here'
   		},
   		'user[email]':{
   			required:'Purr, you have to enter something here',
   			email:'Are you sure this is your email?'
   		},
        'user[password]': {
   			required:'You have to enter something here',
            minlength: "Your password is not long enough. Please enter at least 9 characters"
        },
        'user[password_confirmation]': {
   			required:'You have to enter something here',
            passwordMatch: "Your password aren't matching" // custom message for mismatched passwords
        }

   }
});//end of validate()

$('#user_name').on('change',function(){
  $('#signup').validate();
  console.log('here');
});

    
 function get_string_from_for(for_text){
 	switch(for_text) {
    case 'user_name':
        return 'username';
        break;
    case 'user_email':
        return 'email'
        break;
    case 'user_password':
        return 'password'
        break;
    case 'user_password_confirmation':
        return 'password confirmation';
        break;
    default:
        return '';
	}
}

 });