function loaddata()
{
 var title=$('#title').val();
 var id=$('#id').val();
 var content=$('#content').val();
	
 if(title)
 {
  $(".spinner").show();
  $.ajax({
  type: 'post',
  url: 'updateblogajax.php',
  data: {
   title:title,id:id, content:content,},
  success: function (response) {
     if(response.trim()=="Record updated successfully"){
     alert("updated successfuly");
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