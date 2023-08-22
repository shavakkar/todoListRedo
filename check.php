<?php 
include('database.php');

if(isset($_GET['checkid'])){
    $id = $_GET['checkid'];

    // if(isset($_POST['checked'])){
        $sql = "UPDATE crud set status='1' WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            // echo "success";
            header('location:display.php');
        }
        else{
            die(mysqli_error($conn));
        }
    }
?>
