$(document).ready(function () {
    /*if the button type is submit and you click on button, it will not execute the below
    code,  you need to change the input type to button for this button*/
    $("#login").on('click',function() {
        var email = $("#email").val();
        var password = $("#password").val();
        //console.log(email);
        //console.log(password);
        if(email == "" || password == "")
        {
            alert('Please check your inputs');
        }
        else
        {
            $.ajax
            (
                {
                    url:'login.php',
                    method: 'POST',
                    data:
                        {
                            login:1,
                            emailPHP: email,
                            passwordPHP: password
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