function validate(){
   var title=$("#title").val();
   if(title<1){
        $("#title").after('<span class="error">This field is required</span>');
    }
    var content = $("#content").val();
        if(contet == " ")
        {
        alert("Please Enter in content Here");
        }
    $.ajax({
        method: "POST",
        url: "blogajax.php",
        data: { title:title,content:content }
      });
}