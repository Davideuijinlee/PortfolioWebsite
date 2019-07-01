$(function() {
	$('form').on('submit', 'input, textarea', function() {

		$(this).val((i, value) => value.trim());
	
	});
	// Get the form.
	$('#contact-submit').off('click');
	var form = $('#contact-form');

	// Get the messages div.
	var formMessages = $('.ajax-response');

	// Set up an event listener for the contact form.
	$(form).submit(function(e) {
		// Stop the browser from submitting the form.

		e.preventDefault();

		// Serialize the form data.
		var formData = $(form).serialize();

		// Submit the form using AJAX.
		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: formData,
			beforeSend: function() { 
				$("#contact-submit").prop('disabled', true); // disable button
			  },
		})
		.done(function(response) {
			$("#contact-submit").prop('disabled', false);
			// Make sure that the formMessages div has the 'success' class.
			$(formMessages).removeClass('error');
			$(formMessages).addClass('success');

			// Set the message text.
			$(formMessages).text(response);

			// Clear the form.

			if (response === 'Message has been sent') {
				$('#contact-form input,#contact-form textarea').val('');
			}

			$('#contact-submit').on('click');
		})
		.fail(function(data) {
			// Make sure that the formMessages div has the 'error' class.
			$(formMessages).removeClass('success');
			$(formMessages).addClass('error');

			// Set the message text.
			if (data.responseText !== '') {
				$(formMessages).text(data.responseText);
			} else {
				$(formMessages).text('Oops! An error occured and your message could not be sent.');
			}
			
			$('#contact-submit').on('click');
		})
	});
});