$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip(); 
	$('[data-toggle="tooltip"]').click(function(e){
		e.preventDefault();
	}); 

	$('form').submit(function(xx){
	    xx.preventDefault(); 
	    sendContactRequest();
	    return false;
	});

	$('#hamburger-menu-button').click(function(e) {
		e.preventDefault();
		$('nav').toggleClass('visible');	
		$('#hamburger-menu').toggleClass('show');	
	});

	$('nav ul li, nav ul li a').click(function(){
		$('nav').toggleClass('visible');	
		$('#hamburger-menu').toggleClass('show');	
	});
});

function sendContactRequest() {
    $.ajax({
        url: '/submit',
                type: 'POST',
                data: $('form').serialize(),
                success: function(response) {
                    alert("Your email has been sent. Thank you " + data.name + "!");
                }
    });
}

//# sourceMappingURL=all.js.map
