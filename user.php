<?php 
    include("database.php");

    if(isset($_POST['submit']))
    {
        $task = $_POST['task'];
        $sql = "INSERT INTO todolist(id,task,status) VALUES(NULL,'$task','0')";
        $result = mysqli_query($conn, $sql);
        
        if($result){
            // echo "hi";
            header('location:display.php');
        }
        else{
            die(mysqli_error($conn));
        }
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no,initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Crud Application</title>
</head>
<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name:</label>
                <input type="text" class="form-control" placeholder="Enter your Task" name="task" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
        
    </div>
</body>
</html>