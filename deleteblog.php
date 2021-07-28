    <?php
    require('db.php');
    session_start();
    if (isset($_POST['id'])) {


        $id = $_POST['id'];

        print_r($_SESSION['username']);
        $sql = "SELECT admin_id FROM blog WHERE id=" . $id;
        $checkRecord = mysqli_query($con, $sql);
        $totalrows = mysqli_num_rows($checkRecord);
        if ($totalrows > 0) {
            $users = mysqli_fetch_assoc($checkRecord);
            print_r($users['admin_id']);
            $query = "SELECT username FROM user WHERE id=" . $users['admin_id'];
            $check = mysqli_query($con, $query);
            $total = mysqli_num_rows($check);
            if ($total > 0) {
                $list = mysqli_fetch_assoc($check);
                print_r($list['username']);
                $username = $list['username'];
                if ($username == $_SESSION['username']) {
                    $query = "DELETE FROM blog WHERE id=" . $id;
                    mysqli_query($con, $query);
                    echo 1;
                    exit;
                } else {
                    echo '<script>alert("you cant delete")</script>';
                    echo 0;
                }
            }
        }
    }
    ?>