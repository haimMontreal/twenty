$(document).ready(function () {
    /*if the button type is submit and you click on button, it will not execute the below
    code,  you need to change the input type to button for this button*/
    $("#register").on('click',function() {
        var email = $("#email").val();
        var password = $("#password").val();
        var age = $("#age").val();
        var name = $("#name").val();
        var username = $("#username").val();

     //checking empty case
        if(email == "" || password == "" || age=="" || name=="" || username=="" || age<1 || password.length!==8)
        {
            alert('Please check your inputs');
        }
        else
        {
            $.ajax
            (
                {
                    url:'register.php',
                    method: 'POST',
                    data:
                        {
                            login:1,
                            emailPHP: email,
                            passwordPHP: password,
                            agePHP: age,
                            namePHP: name,
                            usernamePHP: username
                        },
                    success: function(response)
                    {
                        //console.log(response);
                        $("#response").html(response);
                        if(response.indexOf('Success') >= 0)
                        {
                            //alert('if statement is true');
                            window.location = 'hidden.php';
                        }
                    },
                    datatype:'text'
                }
            );
        }
    });

});