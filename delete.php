<?php
include('includes/dbh.php');

if(isset($_GET['id'])){
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $sql = "DELETE FROM tasks WHERE id=$id";
    $query = mysqli_query($conn, $sql);
    if($query){
        $_SESSION['message']="Task Deleted successfully";
        header("Location: index.php");
    }else {
         $_SESSION['message']="No Task is Deleted";
        header("Location: index.php");
    }
}
?>