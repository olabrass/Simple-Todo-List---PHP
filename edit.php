<?php
include_once("includes/dbh.php");

?>

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
                <h4>Update List
                    <a href="index.php" class="btn btn-success btn-sm float-end">View All Tasks</a>
                </h4>
            </div>
           
            <div class="card-body">
            <div class="mt-4">
            <form action="code.php" method="post" class="form-group">
            <?php
            if(isset($_GET['id'])){
                $id = mysqli_real_escape_string($conn, $_GET['id']);
                        
                $sql = "SELECT * FROM tasks WHERE id=$id";
                $query = mysqli_query($conn, $sql);
                if($query){
                    $row = mysqli_num_rows($query);
                    if($row > 0){
                        $result = mysqli_fetch_array($query);
                
            ?>
            <input type="hidden" name="id" value="<?= $result['id'] ?>" class="form-control">
                <input type="text" name="task-update" value="<?= $result['task'] ?>"  class="form-control d-inline w-50" placeholder="Type your task here and choose a date" required="required">
                <input type="date" name="date-update" value="<?= $result['date'] ?>"  class="form-control d-inline w-25" required="required">
                <button type="submit" name="update" class="btn btn-primary bt-sm d-inline mt-0">Update Task</button>
            <?php
            }
        }
}
?>
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

        if(isset($_GET['id'])){
            $id = mysqli_real_escape_string($conn, $_GET['id']);
       
        $sql = "SELECT * FROM tasks WHERE id=$id";
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

    <button type="submit"  class="btn btn-danger btn-sm mt-0">Delete</button>
</td>
</tr>
<?php
$serial++;
}
}
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