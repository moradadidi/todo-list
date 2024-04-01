<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="oursite/bootstrap-5.2.3-dist">
  <title>Document</title>
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
    .alert-succes {
      background-color: lightgreen;
      color: #005304;
      border: 1px solid green;
    }

    .alert-danger i {
      margin-right: 10px;
    }
  </style>
</head>

<body>
<?php
  include_once "nav.php";
  ?>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["submit"])){
    $email = $_POST["Email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    $errors = [];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errors[] = "Invalid email format.";
    }

    if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/", $password)) {
      $errors[] = "Password must be at least 8 characters long, contain at least one lowercase letter, one uppercase letter, and one digit.";
      // echo "<script>alert('Password must be at least 8 characters long, contain at least one lowercase letter, one uppercase letter, and one digit.');</script>";
      // echo "<div class='alert alert-danger' role='alert'>Password must be at least 8 characters long, contain at least one lowercase letter, one uppercase letter, and one digit.</div>";
      // return false;
  }

    if ($password !== $confirm_password) {
      $errors[] = "Passwords do not match.";
    }

    if (empty($errors)) {
      ?>
        <div class="alert alert-succes">
            <i class="fas fa-exclamation-triangle"></i>
            your acount is created.
          </div>
        <?php
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
  }
  }
  ?>

  <form method="post" novalidate>
    <h2>Sign Up</h2>
    <p>
      <label for="Email" class="floatLabel">Email</label>
      <input id="Email" name="Email" type="text" />
    </p>
    <p>
      <label for="password" class="floatLabel">Password</label>
      <input id="password" name="password" type="password" />
    </p>
    <p>
      <label for="confirm_password" class="floatLabel">Confirm Password</label>
      <input id="confirm_password" name="confirm_password" type="password" />

    </p>
    <p>
      <input type="submit" value="Create My Account" id="submit" class="login__submit"  name="submit"/>
    </p>
  </form>
  
</body>

</html>