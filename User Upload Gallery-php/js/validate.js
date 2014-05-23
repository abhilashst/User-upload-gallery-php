/*JQUERY CONTACT FORM STARTS*/
if ( $( '#contact-form' ).length && jQuery() ) {
$('form#contact-form').submit(function() {
  "use strict";
function resetForm($form) {
    $form.find('input:text, input:password, input:file, select, textarea').val('');
    $form.find('input:radio, input:checkbox')
    .removeAttr('checked').removeAttr('selected');
}
$('form#contact-form .error-message').remove();
var hasError = false;
$('.requiredField').each(function() {
if(jQuery.trim($(this).val()) === '') {
 var labelText = $(this).prev('label').text();
 $(this).parent().append('<div class="error-message">You forgot to enter '+labelText+'</div>');
 $(this).addClass('inputError');
 hasError = true;
 } else if($(this).hasClass('email')) {
 var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
 if(!emailReg.test(jQuery.trim($(this).val()))) {
 var labelText = $(this).prev('label').text();
 $(this).parent().append('<div class="error-message">You entered an invalid '+labelText+'</div>');
 $(this).addClass('inputError');
 hasError = true;
 }
 }
});
if(!hasError) {
$('form#contact-form input.submit').fadeOut('normal', function() {
$(this).parent().append('');
});
var formInput = $(this).serialize();
$.post($(this).attr('action'),formInput, function(data){
$('#contact-form').prepend('<div class="success-message">Your email was successfully sent. We will contact you as soon as possible.</div>');
resetForm($('#contact-form'));
$('.success-message').fadeOut(5000);
 
});
}
return false;
});
}
/*JQUERY CONTACT FORM ENDS*/