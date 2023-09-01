<?php
include("database.php");
include("edit.php");

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(isset($_POST["add"]))
    {
        if($_POST["inputBox"]!=NULL)
        {
            add_items($_POST["inputBox"]);
        }
    }
    else if(isset($_POST["checked"]))
    {
        // echo $_POST["checked"];
        update_items($_POST["checked"]);
    }
    else if(isset($_POST["deleted"]))
    {
        delete_items($_POST["deleted"]);
    }
    // else if(isset($_POST["edited"]))
    // {
    //     if($_POST["inputEdit"]!=NULL)
    //     {
    //         edit_items($_POST["inputEdit"]);
    //     }
    // }
    header("Location:index.php");
}
?> 