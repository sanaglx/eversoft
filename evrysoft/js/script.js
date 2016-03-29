$(document).ready(function() {
	$('.carousel').carousel({
		interval: 5000,
		pause: 'hover',
		wrap: true
	});
	$('.fancybox').fancybox();
	$('#popupbutton').fancybox({
		helpers: {
			overlay: {
				locked: false
			}
		},
        'padding': [45, 73, 21, 73],
        'overlayOpacity': 0.8,
        'centerOnScroll': true,
        'maxWidth': 400,
    });
	$("#form-feedback").submit(function(event){
		var postForm = $('#form-feedback').serialize();
		$.ajax({
            type: 'POST',
            url: 'mail.php',
            data: postForm,
            dataType: 'json',
            success: function(data){
                if(!data.success){
                    if (data.errors.name){
                        $('.throw_error').fadeIn(1000).html(data.errors.name);
                    }
                }else{
                    $('#form-feedback').fadeIn(1000).html("<h2>" + data.posted + "</h2>");
                }
            }
        });
        event.preventDefault();
    });
});





















