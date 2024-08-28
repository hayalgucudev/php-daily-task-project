<?php
include "database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Daily Task</title>
</head>
<body style="background-color:#dff5f5">
  
    <nav class="navbar navbar-light justify-content-center fs-1 mb-2" style="background-color:#0476D0; color:white; height:100px">
      Daily Task
    </nav>
   <div class="container" >
     <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      '. $msg .'
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>

     <div class="text-left mb-4">
      <h3>Task List</h3> 
      </div>
      <table class="table  text-center mt-1">
  <thead class="table-grey">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Task Name</th>
      <th scope="col">Description</th>
      <th scope="col">Due Date</th>
      <th scope="col">Status</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
         <?php
        $sql = "SELECT * FROM `tasks`";
        $result = mysqli_query($con, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
        ?>
      <tr>
         <td><?php echo $row["id"] ?></td>
          <td><?php echo $row["task_name"]?></td>
         <td><?php echo $row["description"]?></td>
         <td><?php echo $row["due_date"] ?></td>
          <td><?php echo $row["status"] ?></td>
         <td>
            <a href="edit.php?id=<?php echo $row['id']?>" class="link-dark"> <button class="btn btn-warning"><i class="fa-solid fa-pen-to-square fs-5 me-2"></i>Edit </button></a>
            <a href="delete.php?id=<?php echo $row['id']?>" class="link-dark"> <button class="btn btn-danger"><i class="fa-solid fa-trash fs-6 me-2"></i>Delete  </button></a>
         </td>
      </tr>
      <?php
       }
        ?> 
      </tbody>
</table>
<div class="text-center"> 
         <a href="add.php" class="text-center mb-3">Add New Task.</a>
        </div> 


   </div>
 <footer class="d-flex align-items-center justify-content-center fixed-bottom"  style="background-color:#0476D0; color:white; width:100%;  height:100px">
         <h6>&copy;2024 Daily Task.</h6>
 </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>