<?php

    $conn = new mysqli("127.0.0.1","root","testtest","todolist");

    if(!$conn){
        die(mysqli_error($conn));
    }
?>