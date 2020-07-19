$(function(){

	$("#cpass").on('change',function(e){

		e.preventDefault();
		var cpass = $(this).val();
		var pass = $("#pass").val();
		if(pass != cpass)
		{
			$(this).val("");
			$("#cpasserr").html("<span class='alert alert-danger'> Passwords do not match</span>");
		}
		else{
			$("#cpasserr").html("<span class='alert alert-success'> Passwords match</span>");

		}

	});

	$("#pass").on('change',function(e){
		e.preventDefault();
		$("#cpass").val(""); 
		

	});

            $("#username").on('keyup',function(e){
                  var user=$(this).val();
                  if(!user||user===' ')
                  {     
                        $(this).val("");
                        $('#usererr').html('<span class="alert alert-danger">Empty field  is not allow</span>');
                  }
                  else
                  {
                        var dataString='user='+user;
                        $.ajax({
                              type:'POST',
                              url:'checkuser.php',
                              data:dataString,
                              cache:false,
                              success:function(available)
                              {
                                    if(available=="false")
                                    {
                                          $('#usererr').html('<span class="alert alert-danger">UserName is not available</span>');
                                    }
                                    else
                                    {
                                          $('#usererr').html('<span class="alert alert-success">UserName is available</span>');
                                    }
                              },
                              error: function(xhr,xer){
                                    $('#usererr').html('<span class="alert alert-danger">Some Error is Occur '+xhr.status+'</span>')
                              }
                        });
                  }
            });






});
