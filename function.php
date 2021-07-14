<?php
function create()
{
    require('db.php');
    $sql = "CREATE TABLE IF NOT EXISTS `users` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `username` varchar(255) DEFAULT NULL,
    `password` varchar(100) DEFAULT NULL,
    `email` varchar(255) DEFAULT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `username` (`username`),
    UNIQUE KEY `email` (`email`)
    );";

    if ($con->query($sql) === TRUE) {
        echo "Table users created successfully";
    } else {
        echo "Error creating table: " . $con->error;
    }
}

function drop()
{
    require('db.php');
    $sql = "DROP TABLE users;";
    if ($con->query($sql) === TRUE) {
        echo "Table users deleted successfully";
    } else {
        echo "Error deketing table: " . $con->error;
    }
}
