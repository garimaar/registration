<?php
require('db.php');
$id = $_GET['id'];
echo $username = $_GET['un'];
$email = $_GET['em'];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Reset Password</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <input type="text" placeholder="id" name="id" id="id" value="<?php echo "$id" ?>" />
    <input type="text" placeholder="username" id="username" name="username" value="<?php echo "$username" ?>" />
    <input type="email" placeholder="email" id="email" name="email" value="<?php echo "$email" ?>" />
    <input type="submit" class="submit" id="submit" name="submit" />
    <script>
        document.getElementById("submit").addEventListener("click", async (e) => {
            await axios
                .post(
                    "/application/updateajax.php", {
                        username: document.getElementById("username").value,
                        email: document.getElementById("email").value,
                        id: document.getElementById('id').value,
                    }, {
                        headers: {
                            "Content-Type": "application/json"
                        },
                    }
                )
                .then((response) => {
                    if ((response.data = "error")) {
                        alert(" error");
                    } else {
                        alert("done");
                    }
                });
        });
    </script>
</body>

</html>