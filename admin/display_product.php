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

   $conn = mysqli_connect("localhost","root","","php_ecom");

   $sql = "SELECT * FROM products";

   $result = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Page</title>
  <link rel="stylesheet" href="admin_style.css?v=2">
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

                  <?php
                  
                    while($row=mysqli_fetch_assoc($result))

                    {
                   ?>

                  <tr>
                       <td><?php echo $row['title'] ?></td>
                       <td><?php echo $row['description'] ?></td>
                       <td><?php echo $row['quantity'] ?></td>
                       <td><?php echo $row['price'] ?></td>
                       <td>
                           <img height="100" width="100" src="../product_image/<?php echo $row['image'] ?>">
                       </td>
                  </tr>

                  <?php

                    }
                  ?>

               </table>

            </div>

         </div>
    </div>
</body>
</html>