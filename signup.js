function validate(){
    nname=$("#username").val();
    eemail=$("#email").val();
    ppassword=$("#password").val();
    cpassword=$("#password").val();
    role=$("#role").val();
    if(nname<1){
        $("#username").after('<span class="error">This field is required</span>');
    }
    if(eemail<1){
        $("#email").after('<span class="error">this field is required</span>')
    }
    if(ppassword<6){
        $("#password").after('<span class="error">less than 6</span>');
    }
    if(ppassword != cpassword){
        $("#cpassword").after('<span class="error">password not match</span>');
    }
    if(role=='select'){
        $("#role").after('<span class="error">select role</span>');
    } 
    $.ajax({
        method: "POST",
        url: "signupajax.php",
        data: { username:nname, email: eemail ,password:ppassword,role:role }
      })
        .done(function() {
          alert( "Data Saved: ");
        });
}