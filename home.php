<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}

?>

<html>
<head>
    <!-- Boostrap -->
    <link rel="stylesheet" href=" 	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
    
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

   
<title>Portal</title>
</head>
<body>
<div class="container">



<h1> Welcome <?php echo $_SESSION['username']; ?> </h1>

<p class="text-center text-light"> To schedule a session, select time and date or send a message. </p>

<div class=" d-md-flex justify-content-md-end">
<a class="float-left"  href="logout.php">LOGOUT</a>
</div>

</div>

</body>

</html>

