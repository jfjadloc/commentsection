$(function() {
	$('.notifyPatient').on('click', function(event){
	  	var email = $(event.currentTarget).attr('data-value');
	  	var code = $(event.currentTarget).attr('data-subject');

	  	console.log(email + " " + code);

	  	$.ajax({
    		url: "notifyPatient.php?email=" + email + "&code=" + code,
    		method: 'GET'
    	}).done(function(data){
	  		console.log("sent");

	  		swal({
				title: "Notification has been sent!",
				icon: "success"
		    })

		}).fail(function(data) {
			console.log("failed - %o", data);

			swal({
				title: "Notification cannot be sent!",
				icon: "error"
		    })
		});
	});
});