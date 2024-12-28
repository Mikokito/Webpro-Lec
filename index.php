<?php
include 'components/connect.php';
session_start();
if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};
include 'components/add_cart.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>
   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include 'components/user_header.php'; ?>

<section class="hero">
   <div class="swiper hero-slider">
      <div class="swiper-wrapper">
         <div class="swiper-slide slide">
            <div class="image">
               <img src="images/13848.jpg" alt="">
            </div>
            <div class="content">
               <span>WELCOME TO ELGATO!</span>
               <h3>You can see our menus to order right here</h3>
               <a href="menu.php" class="btn">Our Menus</a>
            </div>
         </div>
      </div>
      <div class="swiper-pagination"></div>
   </div>
</section>

<section class="category">
   <h1 class="title">food category</h1>
   <div class="box-container">
      <a href="category.php?category=main" class="box">
         <img src="images/maindish.jpg" alt="">
         <h3>Main Dishes</h3>
      </a>
      <a href="category.php?category=bev" class="box">
         <img src="images/dirnk.jpg" alt="">
         <h3>Beverages</h3>
      </a>
      <a href="category.php?category=des" class="box">
         <img src="images/des.jpg" alt="">
         <h3>Desserts</h3>
      </a>
   </div>
</section>
<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
<script>
var swiper = new Swiper(".hero-slider", {
   loop:true,
   grabCursor: true,
   effect: "flip",
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
});
</script>
</body>
</html>
