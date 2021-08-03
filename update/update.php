<?php
require('./../others/db.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $username = $_GET['un'];
    $email = $_GET['em'];
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>update </title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="update.js"></script>
    <script src="./../others/jquery-3.6.0.min.js"></script>
    <link href="./../css/update.css" rel="stylesheet">
</head>

<body>
    <div>
        <?php require("./../others/header.php"); ?>
    </div>
    <h1>Update</h1>
    <div id="update">
        <input type="text" placeholder="id" name="id" id="id" value="<?php
                                                                        if (isset($_GET['id'])) {
                                                                            echo $_GET['id'];
                                                                        } ?>" /><br><br>
        <input type="text" placeholder="username" id="username" name="username" value="<?php
                                                                                        if (isset($_GET['id'])) {
                                                                                            echo $_GET['un'];
                                                                                        }   ?>" /><br><br>
        <input type="email" placeholder="email" id="email" name="email" value="<?php
                                                                                if (isset($_GET['id'])) {
                                                                                    echo $_GET['em'];
                                                                                }   ?>" /><br><br>
        <input type="submit" class="submit" id="submit" name="submit" />
    </div>
    <script>
        document.getElementById("submit").addEventListener("click", async (e) => {
            loaddata();
        });
    </script>
</body>

</html>