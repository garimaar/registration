function validation(){
    email=$('#email').val();
    password=$('#password').val();
    var error=" ";
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if(re.test(String(email).toLowerCase())==false)
    {
        error=$('#email').after('<span class="error">not a valid email</span>');
    }
    if(password.length<6){
        $('#password').after('<span class="error">password less than 6 </span>');
        error=$('#password').after('<span class="error">password less than 6 </span>');
    }

    if(error==" "){
   $.ajax({
        method: "POST",
        url: "loginajax.php",
       data: { email: email , password:password },
        success: function(response) {
          if (response.trim() == "found") {
            alert("found");
            success();
          } else {
                alert("invalid username/password.  Please try again");
          }
     }
    });
}
}
function success(){
    setTimeout(function(){ location.reload(); }, 4500);
}
