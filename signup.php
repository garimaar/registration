<!DOCTYPE html>
<html>

<head>
    <title>signup</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="signup.js"></script>
    <script src="jquery-3.6.0.min.js"></script>
</head>

<body>
    <div>
        <input type="text" placeholder="username" class="username" id="username" />
        <input type="emal" placeholder="email" class="class" id="email" />
        <input type="password" placeholder="password" class="password" id="password" />
        <input type="password" class="cpassword" placeholder="cpassword" id="cpassword" />
        <input type="submit" class="submit" id="submit" name="submit" />
    </div>
    <script>
        document.getElementById("submit").addEventListener("click", async (e) => {
            validate();
            await axios
                .post(
                    "/application/signupajax.php", {
                        name: document.getElementById("username").value,
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