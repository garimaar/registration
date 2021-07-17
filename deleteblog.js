$(document).ready(function(){
    $('.delete').click(function(){
      var el = this;
      var deleteid = $(this).data('id');
    
      var confirmalert = confirm("Are you sure?");
      alert("are you sure");
      if (confirmalert == true) {
         $.ajax({
           url: 'deleteblog.php',
           type: 'POST',
           data: { id:deleteid },
           success: function(response){
             if(response == 1){
           $(el).closest('tr').fadeOut(800,function(){
              $(this).remove();
           });
             }else{
           alert('Invalid ID.');
             }
   
           }
         });
      }
   
    });
   
   });