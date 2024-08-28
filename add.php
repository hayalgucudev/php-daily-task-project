<?php
include "database.php";

if(isset($_POST['submit'])){
 $task_name = $_POST['task_name'];
 $description = $_POST['description'];
 $due_date = $_POST['due_date'];

 $sql = "INSERT INTO `tasks`( `task_name`, `description`, `due_date`) VALUES ('$task_name',' $description',' $due_date')";

 $result = mysqli_query($con, $sql);

 if($result){
  header("location: data.php?msg=New task added successfully");
 }
 else {
      echo"Failed" . mysqli_error($con);
 }
}
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
    <div class="container">
      <div class="text-left mb-4">
      <h3> Add New Task</h3> 
      </div>
      <div class="container d-flex justify-content-left ">
        <form action="" method="post" style="width:100%">
         <div class="mb-3">
            <div class="col">
              <label class="form-label">Task Name</label>
              <input type="text" class="form-control" name="task_name" required>
            </div>
         </div>
         <div class="mb-3">
             <div class="col">
              <label class="form-label">Description</label>
             <textarea name="description" class="form-control"  id="Description" style=" height:80px"   required></textarea>
            </div>
         </div>
         <div class="mb-3">
          <div class="col">
              <label class="form-label">Due Date</label>
              <input type="date" class="form-control" name="due_date"  required>
            </div>
         </div>
          <div>
            <button type="submit" class="btn btn-primary" name="submit">Add Task</button>
          </div>
        </form>

      </div>
      
    </div>
 <footer class="d-flex align-items-center justify-content-center"  style="background-color:#0476D0; color:white; width:100%;  height:100px">
         <h6>&copy;2024 Daily Task.</h6>
 </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>