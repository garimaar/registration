<?php
session_start();
require("./../others/header.php");
require("./../others/name.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>users detail</title>
    <script src="./../others/jquery-3.6.0.min.js"></script>
    <link href="./../css/file.css" rel="stylesheet">
</head>

<body>
    <div class="table">
        <h1>User details</h1>
        <table>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>email</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>edit</th>
            </tr>
            <?php
            require('./../others/db.php');
            $sql = "SELECT * FROM user WHERE role='user'";
            $query = mysqli_query($con, $sql) or die('error');
            if (mysqli_num_rows($query) > 0) {
                while ($users = mysqli_fetch_assoc($query)) {
                    echo "
            <tr id='row" . $users['id'] . "'>
            <td>" . $users['id'] . "</td>
            <td>" . $users['username'] . "</td>
            <td>" . $users['email'] . "</td>
            <td>" . $users['created_at'] . "</td>
            <td>" . $users['updated_at'] . "</td>
            <td><button><a href='./../update/update.php?id=$users[id]&un=$users[username]&em=$users[email]'>edit/update</a></button><button id='$users[id] ' onclick='delete_data($users[id])'>delete</button></td>
            ";
                }
            }
            ?>
        </table>
    </div>
    <a href="./../others/logout.php">logout</a>
    <div>
        blog :
        <a href="./../blog/blog.php">blog</a>
        <a href="./../blog/bloglisting.php">bloglisting</a>
    </div>
    <script>
        function delete_data(id) {
            if (confirm("are you sure to delete")) {
                $(".loading").show();
                jQuery.ajax({
                    url: './../delete/delete.php',
                    type: 'post',
                    data: 'id=' + id,
                    success: function(response) {
                        if (response == "deleted") {
                            $("#row" + id).fadeOut();
                            alert("deleted");
                            $(".loading").hide();

                        } else {
                            alert("not deleted");
                            $(".loading").hide();
                        }
                    }
                });
            }
        }
    </script>
</body>

</html>
<?php
require("./../others/footer.php");
?>