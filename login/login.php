<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>login</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="login.js"></script>
    <script src="./../others/jquery-3.6.0.min.js"></script>
    <link href="./../css/form.css" rel="stylesheet" />
</head>

<body>
    <div>
        <?php require("./../others/header.php"); ?>
    </div>
    <div id="data">
        <p><?php require("./../others/name.php") ?></p>
        <br>
        <p><?php
            if (isset($_SESSION['username'])) {
                echo $_SESSION['email'];
            } ?></p>
        <br>
        <p><?php
            if (isset($_SESSION['username'])) {
                echo $_SESSION['role'];
                if ($_SESSION['role'] == 'admin') {
                    echo "<button><a href='./../blog/blog.php'>create blog</a></button>";
                    echo "<button><a href='./../blog/bloglisting.php'>blog list</a></button>";
                    header("Location: ./../others/admin.php");
                }
            } ?></p>
    </div>
    <div class="form">
        <h1>login</h1>
        <input type="email" name="email" placeholder="email" id="email" class="text" />
        <input type="password" placeholder="password" id="password" name="=password" class="text" />
        <input type="submit" name="submit" class="submit" id="submit" />
        <a href="./../others/logout.php">logout</a>
    </div>
    <script>
        document.getElementById("submit").addEventListener("click", async (e) => {
            validation();
        });
    </script>
</body>

</html>