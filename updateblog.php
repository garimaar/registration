<?php
require('db.php');
$id = $_GET['id'];
$title = $_GET['ti'];
$content = $_GET['co'];
?>
<!DOCTYPE html>
<html>

<head>
    <title>update </title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="updateblog.js"></script>
    <script src="jquery-3.6.0.min.js"></script>
</head>

<body>
    <h1>Update</h1>
    <input type="hidden" placeholder="id" name="id" id="id" value="<?php echo "$id" ?>" />
    <label>title:</label>
    <input type="text" placeholder="title" id="title" name="title" value="<?php echo "$title" ?>" /><br>
    <label>content:</label>
    <textarea name="content" rows="4" cols="50" name="content" id="content"><?php echo "$content" ?></textarea><br>
    <input type="submit" class="submit" id="submit" name="submit" />
    <script>
        document.getElementById("submit").addEventListener("click", async (e) => {
            loaddata();
        });
    </script>
</body>

</html>