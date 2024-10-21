
   <?php
   if (isset($message)) {
   foreach($message as $message) {
      
         echo '
            <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="parentElement.remove();"></i>
            </div>
         ';
      }
   }

   ?>


   <!DOCTYPE html>
   <html>
   <head>
       <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/admi_style.css">
   <body>

      <header class="header">
         
         <div class="flex">
            
            <a href="#" class="logo">Admin<span>Panel</span></a>

            <nav class="navbar">
               <a href="admin_page.php"> Home</a>
               <a href="admin_products.php"> Product</a>
               <a href="admin_products2.php">Lauch Product</a>
               <a href="admin_orders.php">Order</a>
               <a href="admin_users.php">Users</a>
               <a href="#"> </a>
            </nav>

            <div class="icons">
               <div class="fas fa-bars" id="menu-btn"></div>
               <div class="fas fa-user" id="user-btn"></div>
            </div>

            <div class="account-box">
               <p>username : <span><?php echo $_SESSION['admin_name']; ?></span></p>
               <p>email : <span><?php echo $_SESSION['admin_email']; ?></span></p>
               <a href="logout.php" class="delete-btn">logout</a>
               <div>new <a href="login.php">login</a> | <a href="register.php">register</a></div>
            </div>

          </div>
          
      </header>
   
   </body>
   </html>