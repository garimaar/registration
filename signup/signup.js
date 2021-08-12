function validate() {
  var nname = $("#username").val();
  var eemail = $("#email").val();
  var ppassword = $("#password").val();
  var cpassword = $("#cpassword").val();
  var role = $("#role").val();
  var error = " ";

  if (nname < 1) {
    error = $("#username").after('<span class="error">This field is required</span>');
  }
  const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if (re.test(String(eemail).toLowerCase()) == false) {
    error = $('#email').after('<span class="error">not a valid email</span>');
  }
  if (ppassword.length < 6) {
    error = $("#password").after('<span class="error">less than 6</span>');
  }
  if (ppassword != cpassword) {
    error = $("#cpassword").after('<span class="error">password not match</span>');
  }
  if (role == 'select') {
    error = $("#role").after('<span class="error">select role</span>');
  }
  if (error == " ") {
    $(".loading").show();
    $.ajax({
      type: 'post',
      dataType: "json",
      url: "signupajax.php",
      data: { username: nname, email: eemail, password: ppassword, role: role },
      success: function (data) {
        alert(data.message)
        location.reload();
        $(".loading").hide();
        window.location.href = "./../others/admin.php";

      }
    });
  }
}


