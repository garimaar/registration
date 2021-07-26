<!DOCTYPE html>
<html>

<head>
    <title>Blog</title>
    <script src="blog.js"></script>
    <script src="jquery-3.6.0.min.js"></script>
</head>

<body>
    <div>
        <h1>Blog</h1>
        <label>Title of blog:</label>
        <input type="text" value="title" id="title" name="title" /><br>
        <label>Content of blog:</label>
        <textarea name="content" rows="4" cols="50" name="content" id="content" required></textarea><br>
        <input type="button" value="create button" id="create" />
    </div>
    <script>
        document.getElementById("create").addEventListener("click", async (e) => {
            validate();
        });
    </script>
</body>

</html>