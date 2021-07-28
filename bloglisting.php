<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Blogs</title>
    <script src="jquery-3.6.0.min.js"></script>
    <link href="file.css" rel="stylesheet">
</head>

<body>
    <div>
        <p><?php if (isset($_SESSION['username'])) {
                echo $_SESSION['username'];
            } ?></p>
    </div>
    <div class="table">
        <h1>User details</h1>
        <table id='example'>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>content</th>
                <th>Admin_name</th>
                <th>Created_time</th>
                <th>Updated_time</th>

            </tr>
            <?php
            require('db.php');
            $sql = "SELECT b.id, b.title,b.content,u.username, b.created_at, b.updated_at
            FROM  blog b
            INNER JOIN user u
            ON u.id =b.admin_id ;
            ";
            $query = mysqli_query($con, $sql) or die('error');
            if (mysqli_num_rows($query) > 0) {
                while ($users = mysqli_fetch_assoc($query)) {
                    echo "
            <tr id='row" . $users['id'] . "'>
            <td>" . $users['id'] . "</td>
            <td>" . $users['title'] . "</td>
            <td>" . $users['content'] . "</td>
            <td>" . $users['username'] . "</td>
            <td>" . $users['created_at'] . "</td>
            <td>" . $users['updated_at'] . "</td>
            <td><button><a href='updateblog.php?id=$users[id]&ti=$users[title]&co=$users[content]'>edit/update</a></button><button class='delete' onclick='delete_data($users[id])'> delete</button></td>";
                }
            }
            ?>
        </table>
    </div>
    <button><a href='blog.php'>create blog</a></button>

    <script>
        function delete_data(id) {
            alert(id);
            alert("are you sure to delete");
            jQuery.ajax({
                url: 'deleteblog.php',
                type: 'post',
                data: 'id=' + id,
                success: function() {
                    alert("found");
                    location.reload();
                }
            });
        }
    </script>
</body>

</html>