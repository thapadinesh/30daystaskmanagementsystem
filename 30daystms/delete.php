<?php
require('config.php');
session_start();
require('secureuser.php');

if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $delete_query = "DELETE FROM tasks WHERE id=$id";
    $delete_result = mysqli_query($conn,$delete_query);
    if($delete_result)
    {
        echo header('Location: home.php?msg=dsuccess');
    }
    else 
    {
        echo header('Location: home.php?msg=derror');
    }
}
?>