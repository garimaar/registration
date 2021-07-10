function validate1(){
    password=$('#password').val();
    cpassword=$('#cpassword').val();
    email=$('#email').val();
    if(email<1){
        $('#email').after('<span class="error">field required</span>')
    }
    if(password<6)
    {
        $('#password').after('<span class="error">field is require</span>');
    }
    if(password!=cpassword){
   $('#cpassword').after('<span class="error">password does not match</span>');
    }
}