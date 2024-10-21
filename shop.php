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
   <title>Shop</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <style type="text/css">
   
        .homes{
           min-height: 70vh;
           background:linear-gradient(rgba(0,0,0,.7), rgba(0,0,0,.7)), url(images/shop-about.jpg) no-repeat;
           background-size: cover;
           display: flex;
           align-items: center;
           justify-content: center;
        }

        .products .box-container .box .image{
           height: 30rem;
           max-width: 300px;
           /*margin-left: 4rem;*/
        }


        .products .box-container .box .price {
            position: absolute;
            top: 46rem;
            left: 10rem;
            border-radius: .5rem;
            padding: 1rem;
            font-size: 2.5rem;
            color: red;
            background: none;
            /*color: var(--white);*/
            /*background-color: var(--red);*/
        }

        .btn, .option-btn, .delete-btn, .white-btn {
            display: inline-block;
            margin-top: 6rem;
            padding: 1rem 4rem;
            cursor: pointer;
            color: var(--white);
            font-size: 1.8rem;
            border-radius: .5rem;
            text-transform: capitalize;
        }

        .products .box-container{
           max-width: 1200px;
           margin:0 auto;
           display: grid;
           grid-template-columns: repeat(auto-fit, 30rem);
           align-items: flex-start;
           gap:4.5rem;
           justify-content: center;
        }

          @media(max-width: 768px){
            .products .box-container .box .image{
              height: 30rem;
              position: relative;
              left: -4rem;
               } }

          @media (max-width:768px){
            .banner-container .banner .women{
              display: none;
              } }

          .home-contact{
              background: linear-gradient(150deg, #3e3939 29%, #706b6b 29.1%, #837d7d 68%, #242121 68.1%);
          }

         .home-contact .content{
           max-width: 60rem;
           text-align: center;
           margin:0 auto;
        }

        .home-contact .content h3{
           font-size: 3rem;
           text-transform: uppercase;
           color:var(--white);
        }

        .home-contact .content p{
           padding:1rem 0;
           line-height: 1.5;
           color:var(--light-white);
           font-size: 1.7rem;
        }

        .contents {
          padding: 20px 50px 50px 50px;
          border-radius: 10px;
        }

        .contents span{
            font-size: 14px;
            color: #ffffff;
            margin: 30px 0 10px 0;
            display: block;
          }


        .contents h2 {
          font-size: 30px;
          font-weight: 700;
          margin-top: 10px;
          color: #ffffff;
        }

        .subscribe_form {
          width: 100%;
          height: 60px;
          position: relative;
          background: #ffffff;
          margin-top: 30px;
        }

        .contents input {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          background: transparent;
          border: transparent;
          padding-left: 20px;
        }

        .contents button {
          width: 150px;
          height: 100%;
          position: absolute;
          top: 0;
          right: 0;
          background: #000;
          color: #ffffff;
          border: transparent;
          font-size: 14px;
          transition: .3s;
        }
          
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

                 .btnss,
.option-btnss,
.delete-btnss,
.white-btnss{
   display: inline-block;
   margin-top: 5rem;
   padding:1rem 3rem;
   cursor: pointer;
   color:#fff;
   background: #cb870b;
   font-size: 1.8rem;
   border-radius: .5rem;
   text-transform: capitalize;
}

.btnss:hover,
.option-btnss:hover,
.delete-btnss:hover{
   background-color: var(--black);
}
  </style>

</head>
<body>
   
  <?php include 'header.php'; ?>

  <div class="heading">
     <h3 style="color: #fff;">our shop</h3>
     <p style="color: #fff;"> <a href="home.php">Home</a> / Shop </p>
  </div>

  <section class="products">
      <h1 class="title">latest products</h1>
      <div class="box-container" style="text-transform: capitalize;">
          <?php  
             $select_products = mysqli_query($conn, "SELECT * FROM `product` LIMIT 10") or die('query failed');
             if(mysqli_num_rows($select_products) > 0){
                while($fetch_products = mysqli_fetch_assoc($select_products)){
          ?>
        <form action="" method="post" class="box">
            <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
            <div class="name"><?php echo $fetch_products['name']; ?></div>
            <div class="price">₹<?php echo $fetch_products['price']; ?>/-</div>

            <input type="number" min="1" name="product_quantity" value="1" class="qty">
            <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
            <input type="text" style="text-decoration: line-through; font-size: 22px; margin-left: 8rem;
              color: #6a6969; width: 50%;" class="olde_price" name = "olde_price" value="<?php echo $fetch_products['olde_price'];?> ">

            <input type="submit" value="Hot" name="add_to_cart" class="btns" style="background: #d31b1b;
                color: white; padding: 10px 16px; position: absolute; top: -1rem; left: 27rem;">
            <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
            <input type="submit" value="add to cart" name="add_to_cart" class="btnss">
            <span></span>
       </form>
        <?php
           }
        }else{
           echo '<p class="empty">no products added yet!</p>';
        }
        ?>
     </div>
    </section>

    <section class="home-contact" style="">
       <div class="content">
          <h3>New Product</h3>
          <p>upto 30% 0ff</p>
       </div>
    </section>

    <?php include 'footer.php'; ?>
    <!-- custom js file link  -->
    <script src="js/script.js"></script>
</body>
</html>