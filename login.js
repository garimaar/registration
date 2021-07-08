function validation(){
    email=$["#email"].val();
    password=$['#password'].val();

    if(email<1)
    {
        $['#email'].after('<span class="error">Field required</span>');
    }
    if(password<6){
        $['password'].after('<span class="error">field required</span>');
    }
    $.ajax({
        method: "POST",
        url: "loginajax.php",
        data: { username: nname,password:ppassword  }
      })
        .done(function( ) {
          alert( "Data Saved: " );
        })

        .fail(function(){
          alert("invalid email and password");
        });
}