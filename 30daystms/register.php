<?php require('config.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <title>Register Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div class="card">
    <div class="card-body">
    <div class="container">
    <div class="row">
    <h3>Register to Task Management System</h3>
        <div class="col-md-12">
            <!-- When the submit button is clicked -->
            <?php
             if(isset($_POST['submit'])) {
              $name = $_POST['name'];
              $email = $_POST['email'];
              $password = md5($_POST['password']);
              $confirm_password = md5($_POST['confirm_password']);

              if($name!="" && $email!="" && $password!="" && $confirm_password!="")
              {
                if($password==$confirm_password)
                {
                  //Storing data into table
                  $register_query = "INSERT INTO users(name,email,password) VALUES('$name','$email','$password')";
                  $register_result = mysqli_query($conn,$register_query);
                  if($register_result)
                  {
                    echo header('Location: index.php');
                  }
                  else 
                  {
                    echo "Your registration failed. Please try again.";
                  }
                }
                else 
                {
                  echo "Both Password doesn't match";
                }
              }
              else 
              {
                echo "All fields are necessary.";
              }
             }
            ?>
            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId" >
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId" >
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId" >
                </div>

                <div class="form-group">
                    <label for="">Confirm Password</label>
                    <input type="password" name="confirm_password" id="" class="form-control" placeholder="" aria-describedby="helpId" >
                </div>

                <button type="submit" class="btn btn-primary" name="submit">Register</button>
            </form>
            <p class="form-text text-secondary">
                If you already have an account, Please <a href="index.php">login here</a>.
            </p>
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