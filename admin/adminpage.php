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
    </div>
</body>
</html>