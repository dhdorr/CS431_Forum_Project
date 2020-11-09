<?php
  if (isset($_POST['login_submit'])) {
    require 'dbh.inc.php';

    $u_name = $_POST['username'];
    $u_pwd = $_POST['pwd'];

    $query = "SELECT u_name FROM users WHERE u_name=$u_name AND u_pwd=$u_pwd";
    mysqli_stmt_execute($query);
    $result = mysqli_stmt_get_result($query);
    if ($row = mysqli_fetch_assoc($result)) {
      session_start();
      $_SESSION['uid'] = $row['u_id'];
      $_SESSION['uname'] = $row['u_name'];

      header("Location: ../index.php?login=success");
      exit();
    }
  }
  /*    $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $query)) {
        header("Location: ../login.php?error=sqlerror");
        exit();
      }
      else {
        mysqli_stmt_bind_param($stmt, "ss", $username, $password);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($result)) {
          session_start();
          $_SESSION['uid'] = $row['u_id'];
          $_SESSION['uname'] = $row['u_name'];

          header("Location: ../index.php?login=success");
          exit();
        }
        else {
          header("Location: ../index.php?login=failure");
          exit();
        }
      }
      */
?>
