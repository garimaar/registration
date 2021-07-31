<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>users detail</title>
    <script src="jquery-3.6.0.min.js"></script>
    <link href="file.css" rel="stylesheet">
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

    </div>
    <div>
        <p><?php
            if (isset($_SESSION['username'])) {
                echo $_SESSION['username'];
            } ?></p>
    </div>
    </div>
    <div class="table">
        <h1>User details</h1>
        <table>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>email</th>
                <th>edit</th>
            </tr>
            <?php
            require('db.php');
            $sql = "SELECT * FROM user WHERE role='user'";
            $query = mysqli_query($con, $sql) or die('error');
            if (mysqli_num_rows($query) > 0) {
                while ($users = mysqli_fetch_assoc($query)) {
                    echo "
            <tr id='row" . $users['id'] . "'>
            <td>" . $users['id'] . "</td>
            <td>" . $users['username'] . "</td>
            <td>" . $users['email'] . "</td>
            <td><button><a href='update.php?id=$users[id]&un=$users[username]&em=$users[email]'>edit/update</a></button><button id='$users[id] ' onclick='delete_data($users[id])'>delete</button></td>
            ";
                }
            }
            ?>
        </table>
    </div>
    <script>
        function delete_data(id) {
            if (confirm("are you sure to delete")) {
                $(".spinner").show();
                jQuery.ajax({
                    url: 'delete.php',
                    type: 'post',
                    data: 'id=' + id,
                    success: function(response) {
                        if (response == "deleted") {
                            $("#row" + id).fadeOut();
                            alert("deleted");
                            $(".spinner").hide();
                        } else {
                            alert("not deleted");
                            $(".spinner").hide();
                        }
                    }
                });
            }
        }
    </script>
</body>

</html>