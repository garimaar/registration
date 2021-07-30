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
    if(eemail<1){
      error = $("#email").after('<span class="error">this field is required</span>')
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
    $.ajax({
        method: "POST",
        url: "signupajax.php",
        data: { username:nname, email: eemail ,password:ppassword,role:role }
      })
        .done(function(response) {
            if(response.trim()=="You are registered successfully."){
          alert( "registered successfully ");
            }else{
                alert("not registered");
            }
        });
    }
}
