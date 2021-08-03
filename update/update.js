function loaddata()
{
 var username=$('#username').val();
 var id=$('#id').val();
 var email=$('#email').val();
 alert(username);
	
 if(username)
 {
   $(".spinner").show();
  $.ajax({
  type: 'post',
  url: 'updateajax.php',
  data: {
   username:username,id:id, email:email,},
  success: function (response) {
     if(response.trim()=="updated"){
     alert("updated");
     $(".spinner").hide();
     location.reload();
     }
     else{
        alert("not updated");
        $(".spinner").hide();
     }
  }
  });
 }
}
	
