function validate(){
    nname=$("#username").val();
    eemail=$("#email").val();
    ppassword=$("#password").val();
    cpassword=$("#cpassword").val();
    role=$("#role").val();
    var error=" ";

    if(nname<1){
      error=$("#username").after('<span class="error">This field is required</span>');
    }
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(re.test(String(eemail).toLowerCase())==false)
    {
        error=$('#email').after('<span class="error">not a valid email</span>');
    }
    if(ppassword.length<6){
     error=$("#password").after('<span class="error">less than 6</span>');
    }
    if(ppassword != cpassword){
      error=$("#cpassword").after('<span class="error">password not match</span>');
    }
    if(role=='select'){
      error=$("#role").after('<span class="error">select role</span>');
    } 
    if(error==" "){
      $(".spinner").show();
    $.ajax({
        method: "POST",
        url: "signupajax.php",
        data: { username:nname, email: eemail ,password:ppassword,role:role }
      })
        .done(function(response) {
            if(response.trim()=="You are registered successfully."){
          alert( "registered successfully ");
          $(".spinner").hide();
          location.reload();
            }else{
                alert("not registered");
                $(".spinner").hide();
            }
        });
    }
}

