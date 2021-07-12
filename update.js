function loaddata()
{
 var username=$('#username').val();
 var id=$('#id').val();
 var email=$('#email').val();
 alert(username);
	
 if(username)
 {
  $.ajax({
  type: 'post',
  url: 'updateajax.php',
  data: {
   username:username,id:id, email:email,},
  success: function () {
     alert("send");
  }
  });
 }
}
	
