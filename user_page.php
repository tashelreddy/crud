<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>user page</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/styles.css">

</head>
<body>

<h1 class="title"> Welcome to <span>your</span> profile page </h1>

<section class="profile-container">

   <?php
      $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
      $select_profile->execute([$user_id]);
      $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
   ?>

   <div class="profile">
      <h3><?= $fetch_profile['name']; ?></h3>
      <div class="date">
      <?php
      // Prints the day, date, month, year, time, AM or PM
      echo date("l jS \of F Y") . "<br>";
      date_default_timezone_set("America/New_York");
      echo "The time is " . date("h:i:sa");
      ?>
      </div>
      <a href="user_profile_update.php" class="btn">update profile</a>
      <a href="logout.php" class="delete-btn">logout</a>
      <div class="flex-btn">
         <a href="login.php" class="option-btn">login</a>
         <a href="user_page.php" class="option-btn">Schedule Session</a>
      </div>
   </div>

</section>

</body>
</html>