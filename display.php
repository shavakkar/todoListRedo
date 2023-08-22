<?php 
    include("database.php");

    // $sql = "SELECT id,task from todolist WHERE status='1'";
    //         $result = mysqli_query($conn, $sql);
    //         if($result)
    //         {
    //             // header('location:display.php');
    //         }
    //         else{
    //             die(mysqli_error($conn));
    //         }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <Button class="btn btn-primary"><a href="user.php" class="text-light">Add Task</a></Button>

        <table class="table my-5">
            <thead>
                <tr>
                    <th scope="col">Sl no</th>
                    <th scope="col">Task</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
            
            <?php 
            
               $sql = "SELECT id,task from crud WHERE status='0'";
               $result = mysqli_query($conn, $sql);
               if($result)
               {
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row['id'];
                    $task = $row['task'];
                    echo '<tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$task.'</td>
                        <td>
                            <button class="btn btn-primary">
                                <a href="edit.php?editid='.$id.'" class="text-light">Edit</a>
                            </button>
                            <button class="btn btn-primary">
                                <a href="check.php?checkid='.$id.'" class="text-light" name="checked">Check</a>
                            </button>
                            <button class="btn btn-danger">
                                <a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a>
                            </button>
                        </td>
                        </tr>';
                }
               }
               
?>

            </tbody>
        </table>
        
        <table class="table my-5">
            <!-- <thead>
                <tr>
                    <th scope="col">Sl no</th>
                    <th scope="col">Task</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead> -->
            <tbody>
            
            <?php 

               $sql = "SELECT id,task FROM crud WHERE status='1'";
               $result = mysqli_query($conn, $sql);
               if($result)
               {
                while($row = mysqli_fetch_assoc($result)){
                    $id = $row['id'];
                    $task = $row['task'];
                    // echo $id;
                    echo '<tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$task.'</td>
                        <td>
                            <button class="btn btn-danger">
                                <a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a>
                            </button>
                        </td>
                        </tr>';
                }
               }
               
?>

            </tbody>
        </table>
    </div>
</body>
</html>


