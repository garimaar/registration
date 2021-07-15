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
function setUserCookie()
{
    $date = date("D, d M Y H:i:s", strtotime('1 January 2015')) . 'GMT';
    header("Set-Cookie: 'name'='garima'; EXPIRES{$date};");
}
?>
<html>

<body>

</body>

</html>