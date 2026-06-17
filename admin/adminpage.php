<?php

   session_start();

   $conn=mysqli_connect("localhost","root","","php_ecom"); 

   if(!isset($_SESSION['user_email']))
   {
      header("location:../home/login.php");
   }

  else if ($_SESSION['usertype'] == "user")
   {
      header("location:../home/login.php");
   }

     //  Total Users

   $user_sql="SELECT * FROM users";

   $u_result=mysqli_query($conn,$user_sql);

   $total_user = mysqli_num_rows($u_result);


   // Total Products

   $product_sql = "SELECT * FROM  products";

   $p_result=mysqli_query($conn,$product_sql);

   $total_product = mysqli_num_rows($p_result);


   // Total Orders

   $order_sql = "SELECT * FROM orders";

   $o_result=mysqli_query($conn,$order_sql);

   $total_order = mysqli_num_rows($p_result);


   // Total Delivered

     $deliver_sql = "SELECT * FROM orders WHERE status = 'Delivered' ";

     $d_result=mysqli_query($conn,$deliver_sql);

     $total_delivered = mysqli_num_rows(($d_result));


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
                    <a href="users.php">Users</a>
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
    
               <div class="card">

                  <div class="my_card">
                      <h3>Total Users</h3>

                      <hr>

                      <p><?php echo $total_user ?></p>
                  </div>

                  <div class="my_card">
                      <h3>Total Products</h3>

                       <hr>

                      <p><?php echo $total_product ?></p>
                  </div>

                  <div class="my_card">
                      <h3>Total Orders</h3>

                      <hr>

                      <p><?php echo $total_order ?></p>
                  </div>

                   <div class="my_card">
                      <h3>Total Delivered</h3>

                      <hr>

                      <p><?php echo $total_delivered ?></p>
                  </div>
               </div>

            </div>

         </div>
    </div>
</body>
</html>