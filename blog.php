<!DOCTYPE html>
<html>

<head>
    <title>Blog</title>
    <script src="blog.js"></script>
    <script src="jquery-3.6.0.min.js"></script>
    <link href="blog.css" rel="stylesheet">
</head>

<body>
    <div class="spinner">

        <div class="spinner-text">
            Loading
        </div>

        <div class="spinner-component red">
        </div>

        <div class="spinner-component green">
        </div>

        <div class="spinner-component blue">
        </div>

        <div>
            <h1>Blog</h1>
            <label>Title of blog:</label>
            <input type="text" value="title" id="title" name="title" /><br>
            <label>Content of blog:</label>
            <textarea rows="4" cols="50" name="comment" id="content" required>
</textarea><br>
            <input type="button" value="create button" id="create" />
        </div>
        <script>
            document.getElementById("create").addEventListener("click", async (e) => {
                validate();
            });
        </script>
</body>

</html>