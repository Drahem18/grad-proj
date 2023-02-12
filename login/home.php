<?php


include "conncection.php";

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM `users` WHERE email = ? and  password = ?";

  $stmt = $conn->prepare($sql);

  $stmt->execute([$email, $password]);

  $row = $stmt->rowCount();
  if ($row == 1) {

    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $_SESSION['username'] = $result['username'];
      $_SESSION['password'] = $result['password'];
      $_SESSION['user_type'] = $result['user_type'];
      $_SESSION['username'] = $result['username'];
      $_SESSION['gender'] = $result['gender'];
      $_SESSION['id'] = $result['id'];

      if ($_SESSION['user_type'] == 'student') {
        header("location: ../student/home.php");
      } elseif ($_SESSION['user_type'] == 'stuff') {
        header("location: ../stuff/home.php");
      } else {
        header("location: ../admin/home.php");
      }
    }
  } else {
    $error = "there is something wrong in user or password ";
    $_SESSION['error'] = $error;
    header('location: index.php ');
  }
}