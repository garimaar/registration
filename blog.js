function validate(){
   var title=$("#title").val();
   var content=$('#content').val();
   if(title<1){
        $("#title").after('<span class="error">This field is required</span>');
    }
    if(content==" "){
        alert("empty");
    }
    $.ajax({
        method: "POST",
        url: "blogajax.php",
        data: { title:title,content:content },
        success: function (response) {
            if(response.trim()=="blog created"){
            alert("blog created");
            }
            else{
                alert("not created");
            }
         }
      });
}