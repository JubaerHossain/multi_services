var url = $("#url").val();
$( "#cus_registration" ).validate({            
    rules: {
            name: {
                required: true,
            },
            email: {
                required: true,
                email: true
            },
            password : {
                required: true,
                minlength : 8
            },
            password_confirmation : {
                required: true,
                minlength : 8,
                equalTo : '[name="password"]'
            }
        },
submitHandler: function(form) {
    // var f = $("#cus_registration");
    $('#progress').css("display","block")
    event.preventDefault();   
    var token = $('meta[name="csrf-token"]').attr('content');
    console.log(token);
    
    var formData = new FormData();
    formData.append('name', $("input[name='name']").val() );
    formData.append('email', $("input[name='email']").val() );
    formData.append('password', $("input[name='password']").val() );
    formData.append('password_confirmation', $("input[name='password_confirmation']").val() );

        $.ajax({  
                headers: {'X-CSRF-TOKEN': token },          
                url: url + '/api/register',
                method: "POST",
                data:formData,
                processData: false,
                contentType: false,
                success:function(data){
                    if (data['success']) {
                        $('#progress').css("display","none")
                        $('#success_messag').append(`<li class="alert alert-success">${data['success']}</li>`)
                        toastr.success(data['success'], 'Error!');
                    }

                    $("input[name='name']").val('')
                    $("input[name='email']").val('')
                    $("input[name='password']").val('')                    
                    $("input[name='password_confirmation']").val('')

                },
                error: function (jqXHR, textStatus, errorThrown) {
                    $('#progress').css("display","none")
                    var responseMsg = jQuery.parseJSON(jqXHR.responseText);
                    if (responseMsg['error'].hasOwnProperty('email')) {
                        $("#email-error").text(responseMsg['error'].email)
                    }
                    if (responseMsg['error'].hasOwnProperty('name')) {
                        $("#name-error").text(responseMsg['error'].name)
                    }
                    if (responseMsg['error'].hasOwnProperty('password')) {
                        $("#password-error").text(responseMsg['error'].password)
                    }
                    if (responseMsg['error'].hasOwnProperty('email')) {
                        $("#password_confirmation.error").text(responseMsg['error'].password_confirmation)
                    }
                    
                }

            }) 
}
});





$( "#cust_login" ).validate({
        
    rules: {
        email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength : 8,
            }
        },
submitHandler: function(form) {
    $('#progress').css("display","block")
    event.preventDefault();    
    var token = $('meta[name="csrf-token"]').attr('content');
    var formData = new FormData();
    formData.append('password', $("input[name='password']").val() );
    formData.append('email', $("input[name='email']").val() );

        $.ajax({  
                headers: {'X-CSRF-TOKEN': token },          
                url: url + '/sign',
                method: "POST",
                data:formData,
                processData: false,
                contentType: false,
                success:function(data){
                    $('#progress').css("display","none") 
                    if (data['success']) {
                          localStorage.setItem('_token',data['token'])
                          window.location.href = data['url'];
                    }
                    $("input[name='email']").val('')
                    $("input[name='password']").val('')                    

                },
                error: function (jqXHR, textStatus, errorThrown) {
                    $('#progress').css("display","none")
                    var responseMsg = jQuery.parseJSON(jqXHR.responseText);
                    console.log(responseMsg);
                    
                    if (responseMsg['error'] == 'unverify') {
                        toastr.error('Your Email is not Verified!', 'Error!');
                    }
                    if (responseMsg['error'] == 'Invalid') {
                        $("#email-error").text('These credentials do not match our records.')
                    }
                    if (responseMsg['error'].hasOwnProperty('email')) {
                        $("#email-error").text(responseMsg['error'].email)
                    }
                    if (responseMsg['error'].hasOwnProperty('password')) {
                        $("#password-error").text(responseMsg['error'].password)
                    }
                    
                }

            }) 
}
});