<!DOCTYPE html>
<html>

<body>

    <?php
    $myfile = fopen("migration.txt", "r") or die("Unable to open file!");
    echo fread($myfile, filesize("migration.txt"));

    fclose($myfile);

    ?>

</body>

</html>