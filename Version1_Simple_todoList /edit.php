<?php 
    include("database.php");
    $id = $_GET['editid'];

    $sql = "SELECT * FROM todolist where id='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $task = $row['task'];

    if(isset($_POST['submit']))
    {
        $task = $_POST['task'];

        $sql = "UPDATE todolist set id='$id', task='$task' WHERE id='$id'";
    $result = mysqli_query($conn, $sql);

    if($result){
        // echo "Success";
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
                <input type="text" class="form-control" placeholder="Enter your Task" name="task" value="<?php echo $task; ?>" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
        
    </div>
</body>
</html>