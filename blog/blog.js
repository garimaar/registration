function validate() {
    var title = $("#title").val();
    var content = $('#content').val();
    var error = " ";
    if (title < 1) {
        error = $("#title").after('<span class="error">This field is required</span>');
    }
    if (content == " ") {
        alert("empty");
        error = $("#content").after('<span class="error">This field is required</span>');
    }
    if (error == " ") {
        $(".loading").show();
        $.ajax({
            method: "POST",
            url: "blogajax.php",
            data: { title: title, content: content },
            success: function (response) {
                if (response.trim() == "blog created") {
                    alert("blog created");
                    $(".loading").hide();
                    location.reload();
                    window.location.href = "./../blog/bloglisting.php";
                }
                else {
                    alert("not created");
                    $(".loadimg").hide();
                }
            }
        });
    }
}