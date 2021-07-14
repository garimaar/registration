<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <title>login</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="login.js"></script>
    <script src="jquery-3.6.0.min.js"></script>
    <link href="form.css" rel="stylesheet" />
</head>

<body>
    <div class="data">
        <p><?php echo $_SESSION['username']; ?></p>
        <p><?php echo $_SESSION['email']; ?></p>
    </div>
    <div class="form">
        <h1>login</h1>
        <input type="email" name="email" placeholder="email" id="email" class="text" />
        <input type="password" placeholder="password" id="password" name="=password" class="text" />
        <input type="submit" name="submit" class="submit" id="submit" />
    </div>
    <script>
        document.getElementById("submit").addEventListener("click", async (e) => {
            validation();
            await axios
                .post(
                    "/application/loginajax.php", {
                        email: document.getElementById("email").value,
                        password: document.getElementById("password").value,
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