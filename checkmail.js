	$(function(){
      $("#emailid").on('keyup',function(e){
                  var user=$(this).val();
                  if(!user||user===' ')
                  {     
                        $(this).val("");
                        $('#emailerr').html('<span class="alert alert-danger">Empty field  is not allow</span>');
                  }
                  else
                  {
                        var dataString='email='+user;
                        $.ajax({
                              type:'POST',
                              url:'checkemail.php',
                              data:dataString,
                              cache:false,
                              success:function(available)
                              {
                                    if(available=='false')
                                    {
                                          $('#emailerr').html('<span class="alert alert-danger">Email is Already Taken</span>');
                                    }
                                    else
                                    {
                                          $('#emailerr').html('<span class="alert alert-success">Email is Not Taken</span>');
                                    }
                              },
                              error: function(xhr,xer){
                                    $('#emailerr').html('<span class="alert alert-danger">Some Error is Occur '+xhr.status+'</span>')
                              }
                        });
                  }
            });
});
