function loaddata() {
  var title = $('#title').val();
  var id = $('#id').val();
  var content = $('#content').val();

  if (title) {
    $(".loading").show();
    $.ajax({
      type: 'post',
      url: 'updateblogajax.php',
      data: {
        title: title, id: id, content: content,
      },
      success: function (response) {
        if (response.trim() == "Record updated successfully") {
          alert("updated successfuly");
          $(".loading").hide();
          location.reload();
          window.location.href = "./../blog/bloglisting.php";
        }
        else {
          alert("not updated");
          $(".loading").hide();
        }
      }
    });
  }
}