<?php 
require('config.php'); 
session_start();
require('secureuser.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Task Management System</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="card">
    <div class="card-header">
      <div class="container">
        <div class="row">
          <a name="" id="" class="btn btn-primary" href="home.php" role="button">Manage Tasks</a>
        </div>
      </div>
    </div>
    <div class="card-body">
    <div class="container">
    <div class="row">
    <h3>Create Task</h3>
        <div class="col-md-12">
            <!-- When the submit button is clicked -->
<?php
 if(isset($_POST['submit'])) {
    $title = $_POST['title'];
    $des = $_POST['des'];

    $insert_query = "INSERT INTO tasks(title,des) VALUES('$title','$des')";
    $insert_result = mysqli_query($conn,$insert_query);

    if($insert_result)
    {
      ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>Task is added successfully.</strong> 
        </div>
        
        <script>
          $(".alert").alert();
        </script>
      <?php 
    }
    else 
    {
        echo "Task Couldn't added successfully.";
    }
 }
?>
            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Task Title</label>
                    <input type="text" name="title" id="" class="form-control" placeholder="" aria-describedby="helpId">
                </div>

                <div class="form-group">
                    <label for="">Task Description</label>
                    <textarea class="form-control" name="des" id="" cols="30" rows="5"></textarea>
                </div>

                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
        </div>
    </div>
  </div>
    </div>
    <div class="card-footer text-muted">
      <div class="container">
        <div class="row">
          Developed by XDezo Learning.
        </div>
      </div>
    </div>
  </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>