<?php
require_once('connect.php');

$conn = connect();

$sql = "DELETE FROM `dane` WHERE id={$_POST['id']}";

if(mysqli_query($conn, $sql)){
    $message = 'Poprawnie usunięto firmę';

    echo "<SCRIPT> //not showing me this
    alert('$message')
    window.location.replace('/generator');
    </SCRIPT>";
    

} else{
    echo "Błąd $sql. " 
        . mysqli_error($conn);
}

$mysqli->close();
