<?php
require("./../others/header.php");
require('./../others/db.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $title = $_GET['ti'];
    $content = $_GET['co'];
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>update </title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="updateblog.js"></script>
    <script src="./../others/jquery-3.6.0.min.js"></script>
    <link href="./../css/update.css" rel="stylesheet">
</head>

<body>
    <h1>Update</h1>
    <div id="update1">
        <input type="hidden" placeholder="id" name="id" id="id" value="<?php if (isset($_GET['id'])) {
                                                                            echo $_GET['id'];
                                                                        } ?>" />
        <label>title:</label>
        <input type="text" placeholder="title" id="title" name="title" value="<?php if (isset($_GET['id'])) {
                                                                                    echo $_GET['ti'];
                                                                                } ?>" /><br>
        <label>content:</label>
        <textarea name="content" rows="4" cols="50" name="content" id="content"><?php if (isset($_GET['id'])) {
                                                                                    echo $_GET['co'];
                                                                                } ?></textarea><br>
        <button name="submit" id="submit">submit</button>
    </div>
    <script>
        document.getElementById("submit").addEventListener("click", async (e) => {
            loaddata();
        });
    </script>
</body>

</html>
<?php
require("./../others/footer.php");
?>