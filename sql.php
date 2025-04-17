<?php

function connect($host, $user, $password, $db_name) {
    $connect = mysqli_connect($host, $user, $password, $db_name);
    if (mysqli_connect_errno()) {
        die("Failed to connect with MySQL: " . mysqli_connect_error());
    }
    return $connect;
}

function SELECT($selected,$table,$condition,$connect) {
    $sql = "SELECT `$selected` FROM `$table` WHERE $condition";
    $result = $connect->query($sql);
    $row = $result->fetch_assoc();
    return $row;
}

// function UPDATE($table,$rows,$conditions,$connect) {
//     $sql = "UPDATE `$table` SET `$rows[0]` = '$conditions[0]'";
//     $result = $connect->query($sql);
//     $row = $result->fetch_assoc();
//     return $row;
// }

?>