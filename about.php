<?php
   include 'config.php';
   session_start();

      $user_id = $_SESSION['user_id'];

      if(!isset($user_id)){
         header('location:login.php');
      }

      if(isset($_POST['add_to_cart'])){
         $product_name = $_POST['product_name'];
         $product_price = $_POST['product_price'];
         $product_image = $_POST['product_image'];
         $product_quantity = $_POST['product_quantity'];

         $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

         if(mysqli_num_rows($check_cart_numbers) > 0){
            $message[] = 'already added to cart!';
         }else{
            mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
            $message[] = 'product added to cart!';
         }
      }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <style type="text/css">
      .heading{
         min-height: 30vh;
         display: flex;
         flex-flow: column;
         align-items: center;
         justify-content: center;
         gap:1rem;
          background:linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.7)), url(images/shopping_img.jpg) no-repeat;
         /*background: url(../images/heading-bg.webp) no-repeat;*/
         background-size: cover;
         background-position: center;
         text-align: center;
      }
   </style>
</head>
<body> 
   <?php include 'header.php'; ?>

      <div class="heading">
         <h3 style="color: #fff;">About Us</h3>
         <p style="color: #fff;"> <a href="home.php">Home</a> / About us </p>
      </div>

      <section class="abouts">
         <h3 class="title">about us</h3>
         <div class="flex">
            <div class="image">
               <img src="images/shops.jpg" alt="">
            </div>
            <div class="contents">
               <p> When developing product ideas for your e-commerce store, consider your customers' needs, current market trends, and real-life usage scenarios. Addressing common challenges and leveraging your daily experiences can help you identify products that resonate with your audience. The product description is vital for driving sales in your e-commerce business. A compelling product description significantly impacts purchasing decisions and can make the difference between a click and a sale. We source our products from trusted brands and manufacturers to ensure you receive only the best. Our rigorous quality checks guarantee that every item meets high standards. Enjoy prompt delivery with our reliable shipping partners. Track your order easily and stay updated on its journey from our store to your doorstep.
               </p>
               <!-- <a href="about.php" class="btn">read more</a> -->
            </div>
         </div>
      </section>

      <section class="home-contact">
         <div class="content">
            <h3>have any questions?</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque cumque exercitationem repellendus, amet ullam voluptatibus?</p>
            <a href="contact.php" class="white-btn">contact us</a>
         </div>
      </section>
   <?php include 'footer.php'; ?>
   <!-- custom js file link  -->
   <script src="js/script.js"></script>
</body>
</html>