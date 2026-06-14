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

?><!DOCTYPE html>
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
                    <a href="#">Dashboard</a>
               </li>
               <li>
                    <a href="#">Users</a>
               </li>
               <li>
                    <a href="#">Add Products</a>
               </li>
               <li>
                    <a href="#">View Products</a>
               </li>
             </ul>
         </div>

         <div class="header">

            <div class="admin_header">
                 <a href="#">Logout</a>
            </div>
            
            <div class="info">
    
               <p>Our company delivers innovative solutions, high-quality services, and customer-focused experiences. We are committed to excellence, integrity, and growth, helping businesses achieve success through technology, expertise, and continuous improvement.</p>

            </div>

         </div>
    </div>
</body>
</html>