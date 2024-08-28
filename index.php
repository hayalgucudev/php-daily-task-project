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

   <div class="container" style="background-color:#f2f2f2; height:650px; width:1500px ">

    <div class="text-center " style="height:220px; width:100%">
      
       <p class=" display-4 mx-auto pt-5 fw-lighter ">Manage your team & everything with Daily Task.</p>
       <p class="text-muted">Unlock your potential, unleash your productivity and experiance the joy of progress with our powerful daily task. </p>
       
    </div>
    <hr>

        <div class="text-center mt-5 ">
           <img class="rounded me-4 " src="image2.png" alt="daily task" style="width:350px; height:350px; background:#f2f2f2" />
            
           <a href="add.php"><button class="btn btn-primary">Let's go</button></a>
       </div>    
         

     
   </div>
 <footer class="d-flex align-items-center justify-content-center"  style="background-color:#0476D0; color:white; width:100%;  height:100px">
         <h6>&copy;2024 Daily Task.</h6>
 </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>