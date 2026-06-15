<?php

session_start();

error_reporting(0);

$conn = mysqli_connect("localhost","root","","php_ecom");

$sql = "SELECT * from products";

$result = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ecommerce Project</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>
<body>
   <nav>

        <input type="checkbox" id="check">

        <label for="check" class="checkbtn">
            <i class="fa fa-bars"></i>
        </label>

        <label class="my_logo">My Ecom</label>

        <ul>
            <li>
               <a href="#">Home</a>
            </li>

            <li>
               <a href="#">Products</a>
            </li>

            <li>
               <a href="#">Contact</a>
            </li>

            <?php
            
            if($_SESSION['user_email'])

            {

            ?>

            <a class="logout_btn" href="logout.php">Logout</a>

            <?php
            
            }

            else
            {

            ?>

            
            <li>
               <a href="home/register.php">Register</a>
            </li>

            <li>
               <a href="home/login.php">Login</a>
            </li>
              
            <?php
            }

            ?>

        </ul>
   </nav>

   <div>

       <img class="my_cover" src="images/cover.png">

   </div>

   <div>
  
     <h3 class="p_title">Products</h3>

   </div>

   <div class="my_card">

        <?php 
        
         while($row=mysqli_fetch_assoc($result))
         
         {
               
         ?>

         <div class="card">
            
          <img class="p_image" src="product_image/<?php echo $row['image'] ?>">

           <h4><?php echo $row['title'] ?></h4>

           <p><?php echo $row['description'] ?></p>

           <p>Price : <?php echo $row['price'] ?></p>

           <a href="">Buy Now</a>

        </div>


        <?php
         }  
        ?>
        
       
       

   </div>
  

   <!-- Footer Section -->

   <div class="footer">

     <div class="footer_title">
         <h3>My Ecom</h3>
     </div>

      <div class="footer_content">
          
         <div>
              <h4>Services</h4>

              <p>
                 <a href="#">Web Development</a>
              </p>

              <p>
                 <a href="#">App Development</a>
              </p>

              <p>
                 <a href="#">Digital Marketing</a>
              </p>
         </div>
         <div>
              <h4>Social Links</h4>

              <p>
                 <a href="#">Facebook</a>
              </p>

              <p>
                 <a href="#">Instagram</a>
              </p>

              <p>
                 <a href="#">Twitter</a>
              </p>
         </div>
         <div>
              <h4>Quick Links</h4>

              <p>
                 <a href="#">home</a>
              </p>

              <p>
                 <a href="#">Products</a>
              </p>

              <p>
                 <a href="#">Contact</a>
              </p>

              <p>
                 <a href="home/register.php">Register</a>
              </p>

              <p>
                 <a href="home/login.php">Login</a>
              </p>
         </div>

         <div>
              <h4>Location</h4>

              <p>
                 Western Union Street , House 27 
              </p>

              <p>
                 Email : myecom@gmail.com
              </p>

              <p>
                  Phone : 058163538
              </p>
         </div>

      </div> 

      <footer>
           <hr/>
           <h3>Copyright @AlexZen Knowledge 2020</h3>
      </footer>

   </div>
 
</body>
</html>