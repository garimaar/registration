function validation(){
    eemail=$('#email').val();
    ppassword=$('#password').val();
    if(eemail<1)
    {
        $('#email').after('<span class="error">Field required</span>');
    }
    if(ppassword<6){
        $('#password').after('<span class="error">field required</span>');
    }
    $.ajax({
        method: "POST",
        url: "loginajax.php",
        data: { email: eemail , password:ppassword }
      })
        .done(function() {
          alert( "Data found: ");
        });
}