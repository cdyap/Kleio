$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip(); 
	$('[data-toggle="tooltip"]').click(function(e){
		e.preventDefault();
	}); 

	$('#contactus').submit(function(xx){
	    xx.preventDefault(); 

	    $.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});
	    
	    $.ajax({
	    	dataType: 'JSON',
	        url: $('#contactus').attr('action'),
	        type: $('#contactus').attr('method'),
	        data: $('#contactus').serialize(),
	        success: function(response) {
	            console.log(response);
	            console.log(data);
	        }
	    });

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

//# sourceMappingURL=all.js.map
