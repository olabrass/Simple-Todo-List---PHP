<?php
include_once('includes/dbh.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!-- Boostrap link -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <title>To Do List</title>
</head>
<body>
<div class="container mb-5">
    <div>

    </div>

    <div class="row">
   
        <div class="col-md-12">
        <div>
                    <?php 
                        include('includes/alert.php');
                    ?>
               </div>
            <div class="card"> 
            <div class="card-header">
                <h4>To Do List</h4>
            </div>
           
            <div class="card-body">
            <div class="mt-4">
            <form action="code.php" method="post" class="form-group">
                <input type="text" name="task" class="form-control d-inline w-50" placeholder="Type your task here and choose a date" required="required">
                <input type="date" name="date" class="form-control d-inline w-25" required="required">
                <button type="submit" name="submit" class="btn btn-primary bt-sm d-inline mt-0">Add Task</button>
            </form>
            </div>

</div>
               
            <div class="card-body">
               
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            
            <th style="text-align:center">S/N</th>
            <th>Tasks</th>
            <th>Task Date</th>
            <th>Date Added</th>
            <th class="w-25">Action</th>
        </tr>
    </thead>
    
    <tbody>
    <?php
        $serial = 1;
        $sql = "SELECT * FROM tasks";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($query);
        if($row > 0){
          
         foreach($query as $result){

           ?>
<tr>
<td style="text-align:center"><?= $serial ?></td>
<td><?= $result['task']; ?></td>
<td><?= $result['date']; ?></td>
<td><?= $result['dateadded']; ?></td>
<td>
    <a href="edit.php?id=<?= $result['id']; ?>" class="btn btn-primary btn-sm mt-0">Edit</a>
    <a href="delete.php?id=<?= $result['id']; ?>" class="btn btn-danger btn-sm mt-0">Delete</a>

</td>
</tr>
<?php
$serial++;
}
}else{
    echo "<h5> No Task Found! Please add a Task </h5>";
}
?>
    </tbody>
</table>


                </div>
            </div>
        </div>
    </div>
</div>
            </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>