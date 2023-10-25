<?php
include_once('includes/dbh.php');

?>

<?php
if(isset($_POST['submit'])){
 $task = mysqli_real_escape_string($conn, $_POST['task']);
 $date = mysqli_real_escape_string($conn, $_POST['date']);

 $sql = "INSERT INTO tasks(task, date)VALUES('$task', '$date')";
 $query = mysqli_query($conn, $sql);
 if($query){
 $_SESSION['message']="Task added successfully";
 header("Location: index.php");
 }else{
 $_SESSION['message']="Task not added";
 header("Location: index.php");
}
}
?>


<?php
if(isset($_POST['update'])){
    $id =mysqli_real_escape_string($conn, $_POST['id']);
    $taskUpdate =mysqli_real_escape_string($conn, $_POST['task-update']);
    $dateUpdate = mysqli_real_escape_string($conn, $_POST['date-update']);

    $sql = "UPDATE tasks SET task='$taskUpdate', date='$dateUpdate' WHERE id='$id'";
    $query = mysqli_query($conn, $sql);
    if($query){
        $_SESSION['message']="Task updated successfully";
 header("Location: index.php");
    }else{
        $_SESSION['message']="Update Failed";
 header("Location: index.php");
    }
}
?>