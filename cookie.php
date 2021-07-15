<!DOCTYPE html>
<?php
function setcookie1()
{
    setcookie('name', 'garima', time() + 60 * 60 * 24 * 365, '/', 'example.com', false, false);
}
setcookie1();
function setcookie2()
{
    setcookie('name', 'garima', time() + (86400 * 30), "/");
}
setcookie2();
function setcookie3()
{
    setcookie("name", "garima", time() + 3600, "/", "", 0);
}
setcookie3();
?>
<html>

<body>

</body>

</html>