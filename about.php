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
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3 style="color:#9b1c31">about us</h3>
   <p> <a href="home.php">home</a> <strong style="color :black;">/ about</strong></p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="uploaded_img/classic1.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>These books are chosen by our readers and they are classified among the top 50 must-read books,we help you discover the joy of reading</p>
         <p>By our readers' reviews we help you find the book that will trigger your passion for reading! </p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>
   <div class="flex">
      <div class="content">
         <h3>what do we provide?</h3>
         <p>We provide you with the top 50 must-read classic books,our prices are affordable</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>
      <div class="image">
         <img src="images/wallpaper2.jpg" height="200px" width="" alt="">
      </div>

   </div>
</section>









<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>