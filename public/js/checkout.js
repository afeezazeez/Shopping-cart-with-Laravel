Stripe.setPublishableKey('pk_test_kEAAN3lafYf9UWtwspE4pn2e00hxPO1Brb');

var $form = $('#checkout-form');

$form.submit(function(event){

		$('#charge-error').addClass('hidden');
	    $form.find('button').attr('disabled', 'disabled');
		

	 	Stripe.card.createToken({
	 	number: $('#card-number').val(),
	 	cvc: $('#card-cvc').val(),
	 	exp_month: $('#card-expiry-month').val(),
	 	exp_year: $('#card-expiry-year').val(),
	 	name:   $('#card-name').val()
	 }, stripeResponseHandler);
	 	


	 	return false;
});

function stripeResponseHandler(status, response){
	if (response.error) {
		$('#charge-error').removeClass('hidden');
		$('#charge-error').text(response);
		$form.find('button').attr('disabled', 'disabled');
		
	}else{
		var token =response.id;
		$form.append($('<input type="hidden" name="stripeToken" id="stripeToken" />').val(token));
		console.log(token);
		myForm.submit();
	}
}


