
<?php
  include 'config.php';
  session_start();
  $user_id = $_SESSION['user_id'];
  if(!isset($user_id)){
     header('location:login.php');
  }
  if(isset($_POST['send'])){
     $name = mysqli_real_escape_string($conn, $_POST['name']);
     $email = mysqli_real_escape_string($conn, $_POST['email']);
     $number = $_POST['number'];
     $msg = mysqli_real_escape_string($conn, $_POST['message']);

     $select_message = mysqli_query($conn, "SELECT * FROM `message` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

     if(mysqli_num_rows($select_message) > 0){
        $message[] = 'message sent already!';
     }else{
        mysqli_query($conn, "INSERT INTO `message`(user_id, name, email, number, message) VALUES('$user_id', '$name', '$email', '$number', '$msg')") or die('query failed');
        $message[] = 'message sent successfully!';
     }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contact</title>

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


        .container{
          width: 85%;
          background: #fff;
          border-radius: 6px;
          padding: 20px 60px 30px 80px;

        }
        .container .content{
          display: flex;
          align-items: center;
          justify-content: space-between;
        }
        .container .content .left-side{
          width: 25%;
          height: 100%;
          display: flex;
          flex-direction: column;
          align-items: center;
          justify-content: center;
          margin-top: 15px;
          position: relative;
        }
        .content .left-side::before{
          content: '';
          position: absolute;
          height: 70%;
          width: 2px;
          right: -15px;
          top: 50%;
          transform: translateY(-50%);
          background: #afafb6;
        }
        .content .left-side .details{
          margin: 14px;
          text-align: center;
        }
        .content .left-side .details i{
          font-size: 30px;
          color: #D36215;
          margin-bottom: 10px;
        }
        .content .left-side .details .topic{
          font-size: 18px;
          font-weight: 500;
        }
        .content .left-side .details .text-one,
        .content .left-side .details .text-two{
          font-size: 14px;
          color: #666;
        }
        .container .content .right-side{
          width: 75%;
          margin-left: 75px;
        }
        .content .right-side .topic-text{
          font-size: 23px;
          font-weight: 600;
          color: #2e2b2b;
        }
        .right-side .input-box{
          height: 50px;
          width: 100%;
          margin: 12px 0;
        }
        .right-side .input-box input,
        .right-side .input-box textarea{
          height: 100%;
          width: 100%;
          border: none;
          outline: none;
          font-size: 16px;
          background: #F0F1F8;
          border-radius: 6px;
          padding: 0 15px;
          resize: none;
        }
        .right-side .message-box{
          min-height: 110px;
        }
        .right-side .input-box textarea{
          padding-top: 6px;
        }
        .right-side .button{
          display: inline-block;
          margin-top: 12px;
        }
        .right-side .button input[type="button"]{
          color: #fff;
          font-size: 18px;
          outline: none;
          border: none;
          padding: 8px 16px;
          border-radius: 6px;
          background: #3e2093;
          cursor: pointer;
          transition: all 0.3s ease;
        }
        .button input[type="button"]:hover{
          background: #5029bc;
        }

        @media (max-width: 950px) {
          .container{
            width: 90%;
            padding: 30px 40px 40px 35px ;
          }
          .container .content .right-side{
           width: 75%;
           margin-left: 55px;
        }
        }
        @media (max-width: 820px) {
          .container{
            margin: 40px 0;
            height: 100%;
          }
          .container .content{
            flex-direction: column-reverse;
          }
         .container .content .left-side{
           width: 100%;
           flex-direction: row;
           margin-top: 40px;
           justify-content: center;
           flex-wrap: wrap;
         }
         .container .content .left-side::before{
           display: none;
         }
         .container .content .right-side{
           width: 100%;
           margin-left: 0;
         }
        }

                .btnss,
.option-btnss,
.delete-btnss,
.white-btnss{
   display: inline-block;
   margin-top: 1rem;
   padding:1rem 3rem;
   cursor: pointer;
   color:#fff;
   background: #666;
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
         <h3 style="color: #fff;">contact us</h3>
         <p style="color: #fff;"> <a href="home.php">Home</a> / Contact Us</p>
      </div>
      <div class="container">
              <div class="content">
                <div class="left-side">
                  <div class="address details">
                    <i class="fas fa-map-marker-alt"></i>
                    <div class="topic">Address</div>
                    <div class="text-one">Mumbai 40034</div>
                    <!-- <div class="text-two">Birendranagar 06</div> -->
                  </div>
                  <div class="phone details">
                    <i class="fas fa-phone-alt"></i>
                    <div class="topic">Phone</div>
                    <div class="text-one">+01234 345 543</div>
                    <div class="text-two">+0096 3434 5678</div>
                  </div>
                  <div class="email details">
                    <i class="fas fa-envelope"></i>
                    <div class="topic">Email</div>
                    <div class="text-one">omka12@gmail.com</div>
                    <!-- <div class="text-two">info.codinglab@gmail.com</div> -->
                  </div>
                </div>
                <div class="right-side">
                  <div class="topic-text">Send us a message</div>
                      <form action="" method="post">
                          <div class="input-box">
                            <input type="text" name="name" required placeholder="enter your name" class="box">
                          </div>
                          <div class="input-box">
                            <input type="email" name="email" required placeholder="enter your email" class="box">
                          </div>
                          <div class="input-box">
                            <input type="number" name="number" required placeholder="enter your number" class="box">
                          </div>
                          <div class="input-box message-box">
                            <textarea name="message" class="box" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
                          </div>
                          <div class="button">
                            <input type="submit" value="send message" name="send" class="btnss">
                          </div>
                      </form>
                </div>
        </div>
      </div>
        <?php include 'footer.php'; ?>
        <!-- custom js file link  -->
        <script src="js/script.js"></script>
</body>
</html>