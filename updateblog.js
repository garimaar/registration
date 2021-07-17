function loaddata()
{
 var title=$('#title').val();
 var id=$('#id').val();
 var content=$('#content').val();
 alert(title);
	
 if(title)
 {
  $.ajax({
  type: 'post',
  url: 'updateblogajax.php',
  data: {
   title:title,id:id, content:content,},
  success: function () {
     alert("send");
  }
  });
 }
}