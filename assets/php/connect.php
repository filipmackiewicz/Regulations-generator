<?php

function connect()
{
    $conn = mysqli_connect("localhost", "root", "", "generator");
    if ($conn === false) {
        die("ERROR: Could not connect. "
            . mysqli_connect_error());
    }
    return $conn;
}
