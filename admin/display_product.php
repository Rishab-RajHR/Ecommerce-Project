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
                    <a href="#">Dashboard</a>
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
             </ul>
         </div>

         <div class="header">

            <div class="admin_header">
                 <a href="../logout.php">Logout</a>
            </div>
            
            <div class="info">
    
              <h1>All Products</h1>

               <table>
                   
                  <tr>
                      <th>Title</th>
                      <th>Description</th>
                      <th>Quantity</th>
                      <th>Price</th>
                      <th>Image</th>
                  </tr>

                  <tr>
                       <td>ABC</td>
                       <td>ABC</td>
                       <td>ABC</td>
                       <td>ABC</td>
                       <td>ABC</td>
                  </tr>

               </table>

            </div>

         </div>
    </div>
</body>
</html>