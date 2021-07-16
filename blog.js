function validate(){
   var title=$("#title").val();
   var content=$("#content").val();
    if(title<1){
        $("#title").after('<span class="error">This field is required</span>');
    }
    if(content<1){
        $("#ontent").after('<span class="error">this field is required</span>')
    }
    $.ajax({
        method: "POST",
        url: "blogajax.php",
        data: { title:title,content:content }
      })
        .done(function() {
          alert( "Data Saved: ");
        });
}