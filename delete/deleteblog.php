    <?php
    require('./../others/db.php');
    session_start();
    if (isset($_POST['id'])) {


        $id = $_POST['id'];
        $sql = "SELECT admin_id FROM blog WHERE id=" . $id;
        $checkRecord = mysqli_query($con, $sql);
        $totalrows = mysqli_num_rows($checkRecord);
        if ($totalrows > 0) {
            $users = mysqli_fetch_assoc($checkRecord);
            $query = "SELECT username FROM user WHERE id=" . $users['admin_id'];
            $check = mysqli_query($con, $query);
            $total = mysqli_num_rows($check);
            if ($total > 0) {
                $list = mysqli_fetch_assoc($check);
                $username = $list['username'];
                if ($username == $_SESSION['username']) {
                    echo "are you sure";
                    $query = "DELETE FROM blog WHERE id=" . $id;
                    mysqli_query($con, $query);
                    exit;
                } else {
                    echo 0;
                }
            }
        }
    }
    ?>