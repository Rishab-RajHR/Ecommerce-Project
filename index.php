<?php

session_start();

error_reporting(0);

$conn = mysqli_connect("localhost","root","","php_ecom");

if(isset($_GET['search']))
{
     $search_value = $_GET['my_search'];

     $sql = "SELECT * from products Where concat(title,description) LIKE '%$search_value%' ";

     $result = mysqli_query($conn,$sql);
}

else
{
    $sql = "SELECT * from products";

    $result = mysqli_query($conn,$sql);
}

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

            <a class="logout_btn" href="user_order.php?email=<?php echo $_SESSION['user_email'] ?>">Orders</a>

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

   <div style="margin-left: 500px; padding: 100px;">
       
        <form action="" method="GET">
            <input type="text" name="my_search" placeholder="Search your products ...">

            <input type="submit" name="search" value="Search">
        </form>
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

           <?php
           if($_SESSION['user_email'])

           { 

           ?>
               <a href="my_order.php?id=<?php echo $row['id'] ?>& email=<?php echo $_SESSION['user_email'] ?>">Buy Now</a>
           <?php

           }

           else
           {
           ?>

           <a href="home/login.php">Buy Now</a>
            
          <?php
               
           }

           ?>

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