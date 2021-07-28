function validation(){
    email=$('#email').val();
    password=$('#password').val();
    if(email<1)
    {
        $('#email').after('<span class="error">Field required</span>');
    }
    if(password.length<6){
        $('#password').after('<span class="error">password less than 6 </span>');
    }
    $.ajax({
        method: "POST",
        url: "loginajax.php",
        data: { email: email , password:password }
      })
        .done(function() {
          alert( "Data found: ");
          location.reload();
        });
}