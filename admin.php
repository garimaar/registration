<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>users detail</title>
</head>

<body>
    <div>
        <p><?php echo $_SESSION['username']; ?></p>
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
            <tr>
            <td>" . $users['id'] . "</td>
            <td>" . $users['username'] . "</td>
            <td>" . $users['email'] . "</td>
            <td><button><a href='update.php?id=$users[id]&un=$users[username]&em=$users[email]'>edit/update</a></button><button><a href='delete.php?id=$users[id]&un=$users[username]&em=$users[email]'>delete</a></button></td>
            ";
                }
            }
            ?>
        </table>
    </div>
</body>

</html>