function validate(){
  alert("xvj");
   var title=$("#title").val();
   var content=document.getElementById('content').value;
   alert(content);
   alert("sghe");
   if(title<1){
        $("#title").after('<span class="error">This field is required</span>');
    }
    if(content=="")
{
       alert("Please Enter Your Details Here");
       document.form.address.focus();
       return false;
}
    $.ajax({
        method: "POST",
        url: "blogajax.php",
        data: { title:title,content:content }
      })
}