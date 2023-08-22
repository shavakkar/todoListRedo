<?php

    $conn = new mysqli("127.0.0.1","root","text","todoList1");

    if(!$conn){
        die(mysqli_error($conn));
    }
?>