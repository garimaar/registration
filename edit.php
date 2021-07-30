<!DOCTYPE html>
<html>

<head>
    <title>Reset Password</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="edit.js"></script>
    <script src="jquery-3.6.0.min.js"></script>
</head>

<body>
    <input type="email" placeholder="email" id="email" name="email" />
    <input type="password" placeholder="password" id="password" name="password" />
    <input type="password" placeholder="cpassword" id="cpassword" name="cpassword" />
    <input type="submit" class="submit" id="submit" name="submit" />
    <script>
        document.getElementById("submit").addEventListener("click", async (e) => {
            validate1();
            await axios
                .post(
                    "/application/editajax.php", {
                        password: document.getElementById("password").value,
                        email: document.getElementById('email').value,
                        cpassword: document.getElementById('cpassword').value,
                    }, {
                        headers: {
                            "Content-Type": "application/json"
                        },
                    }
                )
                .then((response) => {
                    if ((response.trim() = "editted successfuly.")) {
                        alert("editted");
                    } else {
                        alert("not editted");
                    }
                });
        });
    </script>
</body>

</html>