<?php 

  require "db_connect.php";

  if (isset($_POST['register_submit'])) {

    $fName = $_POST['first_name'];
    $lName = $_POST['last_name'];
    $email = $_POST['email'];
    $pwd = $_POST['password'];
    $pwdConf = $_POST['confirm_password'];

    if (empty($fName) || empty($lName) || empty($email) || empty($pwd) || empty($pwdConf)) {
      header("Location: ../register.php?error=emptyfields&first_name=".$fName."&last_name=".$lName."&email=".$email);
      exit();
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      header("Location: ../register.php?error=invalidemail&first_name=".$fName."&last_name=".$lName);
      exit();
    }
    elseif (!preg_match("/^[a-zA-Z ]*$/", $fName) || !preg_match("/^[a-zA-Z ]*$/", $lName)) {
      header("Location: ../register.php?error=invalidname&first_name=".$fName."&last_name=".$lName."&email=".$email);
      exit();
    }
    elseif ($pwd !== $pwdConf) {
      header("Location: ../register.php?error=passwordcheck&first_name=".$fName."&last_name=".$lName."&email=".$email);
      exit();
    }
    elseif (!strlen($pwd) >= 8) {
      header("Location: ../register.php?error=passwordlength&first_name=".$fName."&last_name=".$lName."&email=".$email);
      exit();
    }
    else {
      $sql = "SELECT ID FROM users WHERE email=?";
      $stmt = mysqli_stmt_init($conn);

      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../register.php?error=sqlerror");
        exit();
      }
      else {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);
        
        if ($resultCheck > 0) {
          header("Location: ../register.php?error=emailexists&first_name=".$fName."&last_name=".$lName."&email=".$email);
          exit();
        }
        else {
          $sql = "INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)";
          $stmt = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../register.php?error=sqlerror");
            exit();
          }
          else {
            $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
            
            mysqli_stmt_bind_param($stmt, "ssss", $fName, $lName, $email, $hashedPwd);
            mysqli_stmt_execute($stmt);
            header("Location: ../index.php?register=success");
            exit();
          }        
        }
      }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
  }
  else {
    header("Location: ../register.php");
    exit();
  }

?>