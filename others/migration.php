<!DOCTYPE html>
<html>

<body>
    <?php
    require("./../others/function.php");
    create();
    $shortopts  = "";
    $shortopts .= "f:";
    $shortopts .= "v::";
    $shortopts .= "abc";

    $longopts  = array(
        "required:",
        "optional::",
        "option",
        "opt",
    );
    $options = getopt($shortopts, $longopts);
    var_dump($options);
    ?>

</body>

</html>