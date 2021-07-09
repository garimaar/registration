function validation(){
  console.log($['#email'])
    email=$["#email"].val();
    password=$['#password'].val();

    if(email<1)
    {
        $('#email').after('<span class="error">Field required</span>');
    }
    if(password<6){
        $('#password').after('<span class="error">field required</span>');
    }
}