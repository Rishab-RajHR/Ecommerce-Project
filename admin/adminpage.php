<?php

session_start();

   if(!isset($_SESSION['user_email']))
   {
      header("location:../home/login.php");
   }

  else if ($_SESSION['usertype'] == "user")
   {
      header("location:../home/login.php");
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Page</title>
  <link rel="stylesheet" href="admin_style.css">
</head>
<body>
    
    <div class="wrapper">
         
         <div class="sidebar">
              
             <h2>Ecom Admin</h2>

             <ul>
               <li>
                    <a href="adminpage.php">Dashboard</a>
               </li>
               <li>
                    <a href="#">Users</a>
               </li>
               <li>
                    <a href="add_product.php">Add Products</a>
               </li>
               <li>
                    <a href="display_product.php">View Products</a>
               </li>
               <li>
                    <a href="all_orders.php">Orders</a>
               </li>
             </ul>
         </div>

         <div class="header">

            <div class="admin_header">
                 <a href="../logout.php">Logout</a>
            </div>
            
            <div class="info">
    
               <p>Our company is dedicated to delivering innovative, reliable, and high-quality solutions that help businesses grow and succeed. With a strong focus on customer satisfaction, we combine technology, expertise, and creativity to meet diverse business needs. We believe in integrity, teamwork, and continuous improvement, ensuring excellence in every project we undertake. Our mission is to build lasting relationships with clients by providing value-driven services and supporting their long-term success.</p>

            </div>

         </div>
    </div>
</body>
</html>