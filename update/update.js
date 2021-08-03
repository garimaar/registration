function loaddata()
{
 var username=$('#username').val();
 var id=$('#id').val();
 var email=$('#email').val();
 alert(username);
	
 if(username)
 {
   $(".loading").show();
  $.ajax({
  type: 'post',
  url: 'updateajax.php',
  data: {
   username:username,id:id, email:email,},
  success: function (response) {
     if(response.trim()=="updated"){
     alert("updated");
     $(".loading").hide();
     location.reload();
     window.location.href = "./../others/admin.php";
     }
     else{
        alert("not updated");
        $(".loading").hide();
     }
  }
  });
 }
}
	
