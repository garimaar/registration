function validate(){
   var title=$("#title").val();
   var content=$('#content').val();
   var error=" ";
   if(title<1){
     error=$("#title").after('<span class="error">This field is required</span>');
    }
    if(content==" "){
        alert("empty");
        error=$("#content").after('<span class="error">This field is required</span>');
    }
    if(error==" "){
        $(".spinner").show(); 
    $.ajax({
        method: "POST",
        url: "blogajax.php",
        data: { title:title,content:content },
        success: function (response) {
            if(response.trim()=="blog created"){
            alert("blog created");
            $(".spinner").hide();
            location.reload();
            }
            else{
                alert("not created");
                $(".spinner").hide();
            }
         }
      });
    }
}