<?php
    // include("index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="handleActions.php" method="post">
        <!-- <div>
            Old Name for the task:
            <br>
            <?php 
                
            ?>
        </div> -->
        <label for="rewrite">
            Enter the new Task name: 
            <input type="text" name="inputEdit" id="inputEdit">
        <br>
            <button type="submit" name="edited" id="edited"><i class="fas fa-pen" ></i></button>
            <a href="/"><i class="fas fa-home"></i></a>
        </label>
    </form>
    <script src="https://kit.fontawesome.com/fb7652e7a0.js" crossorigin="anonymous"></script>
</body>
</html>