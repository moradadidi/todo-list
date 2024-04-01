<?php
  include_once "nav1.php";
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style1.css" />
    <script src="https://kit.fontawesome.com/1cf483120b.js" crossorigin="anonymous"></script>
    <title>Login Form</title>
    <style>
    .alert {
      margin-top: 10px;
      padding: 10px;
      border-radius: 5px;
    }

    .alert-danger {
      background-color: #f8d7da;
      color: #842029;
      border: 1px solid #f5c6cb;
    }

    .alert-danger i {
      margin-right: 10px;
    }
  </style>
</head>

<body>

<?php
    if(isset($_POST["submit"])){
        $email=$_POST["email"];
        $password=$_POST["pass"];
        $errors = [];

    
    // validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";

        // echo "<div class='alert alert-danger' role='alert'>Invalid email format.</div>";

    }

    // validate password
    if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/", $password)) {
        $errors[] = "Password must be at least 8 characters long, contain at least one lowercase letter, one uppercase letter, and one digit.";
        // echo "<script>alert('Password must be at least 8 characters long, contain at least one lowercase letter, one uppercase letter, and one digit.');</script>";
        // echo "<div class='alert alert-danger' role='alert'>Password must be at least 8 characters long, contain at least one lowercase letter, one uppercase letter, and one digit.</div>";
        // return false;
    }
    if (empty($errors)) {
        // proceed with form processing
         // Redirect the user to a different page
      header("Location: http://127.0.0.1:122/project/todoList/index.php");
      exit();
      } else {
        // display error messages
        foreach ($errors as $error) {
          ?>
          <div class="alert alert-danger">
              <i class="fas fa-exclamation-triangle"></i>
              <?=$error?>
            </div>
          <?php
        }
      }
    // return true;
    }
?>
<div class="form">
    <div class="container">
        <div class="screen">
            
            <div class="screen__content">
                
                <form class="login" method="post">
                    <h3>Log In</h3>
                    <div class="login__field">
                    <i class="login__icon fas fa-user"></i>
                        <input type="text" class="login__input" placeholder="Email" name="email">
                    </div>
                    <div class="login__field">
                    <i class="login__icon fas fa-lock"></i>
                        <input type="password" class="login__input" placeholder="Password" name="pass">
                    </div>
                    <button class="button login__submit" name="submit">
                        <p class="button__text">Log In Now</p>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>
                   
                </form>
                
            </div>
            <div class="screen__background">
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span>
            </div>
        </div>
    </div>
    </div>

</body>

</html>