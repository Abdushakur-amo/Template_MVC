$(document).ready(function() {
	$('form').submit(function(event) {
		var json;
		event.preventDefault();
		$.ajax({
			type: $(this).attr('method'),
			url: $(this).attr('action'),
			data: new FormData(this),
			contentType: false,
			cache: false,
			processData: false,
			success: function(result) {
				console.log(result);
				json = jQuery.parseJSON(result);
				if(json.message) swal({ title: json.title, text: json.message, icon: json.icon, buttons: json.button, });
				else if (json.url) window.location.href = json.url;
				else swal('Ягон запрос коркард нашуд! form.js');
			},
		});
	});
});