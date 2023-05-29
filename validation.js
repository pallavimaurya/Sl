$(document).ready(function(){
   alert("hello");
    $('#name_check').hide();
    $('#password_check').hide();
    $('#cpassword_check').hide();

    var name_err = true;
    var password_err = true;
    var cpassword_err = true;

    // name validation
    $('#name').keyup(function(){
        name_fun();
    });

    function  name_fun(){
        var name_val = $('#name').val();

        if(name_val.length == ''){
            $('#name_check').show();
            $('#name_check').html("Please fill the name");
            $('#name_check').focus();
            $('#name_check').css("color","red");
            name_err = false;
            return false;
        }
        else{
            $('#name_check').hide();
           
        }
    }      
    
    // password validation
    $('#password').keyup(function(){
        password_fun();
    });

    function  password_fun(){
        var password_val = $('#password').val();
        var password_regex= "^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$";

        if(password_val.length == ''){
            $('#password_check').show();
            $('#password_check').html("Please fill the Password");
            $('#password_check').focus();
            $('#password_check').css("color","red");
            password_err = false;
            return false;
        }
        else if(password_val !== password_regex){
            $('#password_check').show();
            $('#password_check').html("Invalid Password");
            $('#password_check').focus();
            $('#password_check').css("color","red");
            password_err = false;
            return false;
        }
        else{
            $('#password_check').hide();
        }
    }

    // confirm-password validation 
    $('#cpassword').keyup(function(){
        cpassword_fun();
    });

    function  cpassword_fun(){
        var cpassword_val = $('#cpassword').val();

        if(cpassword_val.length == ''){
            $('#cpassword_check').show();
            $('#cpassword_check').html("Please fill the Password");
            $('#cpassword_check').focus();
            $('#cpassword_check').css("color","red");
            cpassword_err = false;
            return false;
        }
        else if(cpassword_val !== password_val ){
            $('#cpassword_check').show();
            $('#cpassword_check').html("Password not match");
            $('#cpassword_check').focus();
            $('#cpassword_check').css("color","red");
            cpassword_err = false;
            return false;
        }
        else{
            $('#cpassword_check').hide();
        }
    }

    $('submitbtn').click(function(){
        name_err=true;
        email_err= true;
        number_err= true;
        password_err= true;
        cpassword_err= true;

        name_fun();
        email_fun();
        number_fun();
        password_fun();
        cpassword_fun();

        if((name_err== true) && (email_err== true) && (number_err== true) && (password_err== true) && (cpassword_err== true)){
            return true;
        }
        else{
            return false;
        }
    })
});
