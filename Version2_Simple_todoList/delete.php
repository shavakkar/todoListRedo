<?php 
    include("database.php");

    if(isset($_GET['deleteid']))
    {
        $id = $_GET['deleteid'];

        $sql = "DELETE FROM todolist where id='$id'";
        $result = mysqli_query($conn, $sql);

        if($result){
            // echo "Deleted";
            header('location:display.php');
        }
        else{
            die(mysqli_error($conn));
        }
    }
?>