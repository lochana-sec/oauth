$(document).ready(function() {

	

    $('#login_form').submit(function() {

        event.preventDefault();
        var data = $("#login_form").serialize();

        $.ajax({
            type: 'POST',
            url: 'login_process.php',
            data: data,
            success: function(response) {
				//alert(response);
				if(response==true){
					$('#edit_error').hide();	
					 $('#edit_success').show();	
					setTimeout('window.location.href = "../index.php"; ', 1000);

				}
				else{
					 $('#edit_error').show();
					 $('#edit_success').hide();	
					 }
            },
            error: function() {
				
                $('#edit_error').show();
				
            }
        });;
    });




});