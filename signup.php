<!DOCTYPE html>
<html>

<head>
    <title>signup</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="signup.js"></script>
    <script src="jquery-3.6.0.min.js"></script>
    <link href="form.css" rel="stylesheet" />
</head>

<body>
    <div class="form">
        <h1>signup</h1>
        <input type="text" placeholder="username" name="username" id="username" class="text" />
        <input type="email" placeholder="email" name="email" id="email" class="text" />
        <input type="password" placeholder="password" name="password" id="password" class="text" />
        <input type="password" name="cpassword" placeholder="cpassword" id="cpassword" class="text" />
        <lable class="lable">select user type</lable>
        <select class="select type" name="role" id="role">
            <option value="select" default>select</option>
            <option value="user">user</option>
            <option value="admin">admin</option>
        </select>
        <input type="submit" class="submit" id="submit" name="submit" />
        <a href="login.php">login</a>
        <a href="admin.php">users</a>
    </div>
    <script>
        document.getElementById("submit").addEventListener("click", async (e) => {
            validate();
            await axios
                .post(
                    "/application/signupajax.php", {
                        username: document.getElementById("username").value,
                        email: document.getElementById("email").value,
                        password: document.getElementById("password").value,
                        cpassword: document.getElementById("cpassword").value,
                        role: document.getElementById('role').value,
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