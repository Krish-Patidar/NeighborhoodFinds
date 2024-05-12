<?php
session_start();
include("php/config.php");
if(!isset($_SESSION['valid'])){
  header("Location: signin.php");
  exit(); // It's a good practice to add exit() after redirecting
}

// Check if the order button is clicked
if(isset($_POST['order_btn'])){
   // Get user input
   $name = $_POST['name'];
   $number = $_POST['number'];
   $email = $_POST['email'];
   $method = $_POST['method'];
   $flat = $_POST['flat'];
   $street = $_POST['street'];
   $city = $_POST['city'];
   $state = $_POST['state'];
   $country = $_POST['country'];
   $pin_code = $_POST['pin_code'];

   // Get cart items
   $cart_query = mysqli_query($conn, "SELECT * FROM `cart`");
   $price_total = 0;
   $product_name = []; // Initialize an empty array to store product names
   if(mysqli_num_rows($cart_query) > 0){
      while($product_item = mysqli_fetch_assoc($cart_query)){
         $product_name[] = $product_item['name'] .' ('. $product_item['quantity'] .') ';
         $product_price = $product_item['price'] * $product_item['quantity']; // Calculate total price for each product
         $price_total += $product_price; // Accumulate total price
      }
   }

   $total_product = implode(', ',$product_name); // Convert array to string
   // Insert order details into database
   $detail_query = mysqli_query($conn, "INSERT INTO `order` (name, number, email, method, flat, street, city, state, country, pin_code, total_products, total_price) VALUES ('$name','$number','$email','$method','$flat','$street','$city','$state','$country','$pin_code','$total_product','$price_total')") or die('query failed');

   // Check if both queries were successful
   if($detail_query){
      // Display order confirmation message
      echo "
      <div class='order-message-container'>
         <div class='message-container'>
            <h3>Thank you for shopping!</h3>
            <div class='order-detail'>
               <span>".$total_product."</span>
               <span class='total'> Total: $".$price_total."/-  </span>
            </div>
            <div class='customer-details'>
               <p> Your name: <span>".$name."</span> </p>
               <p> Your number: <span>".$number."</span> </p>
               <p> Your email: <span>".$email."</span> </p>
               <p> Your address: <span>".$flat.", ".$street.", ".$city.", ".$state.", ".$country." - ".$pin_code."</span> </p>
               <p> Your payment mode: <span>".$method."</span> </p>
               <p>(cash on delivery)</p>
            </div>
            <a href='user.php' type='submit' class='btnn'>Continue Shopping</a>
         </div>
      </div>
      ";
   } else {
      // Display error message if insertion fails
      echo "<p>Failed to place the order. Please try again.</p>";
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>NeighborhoodFinds.com</title>
  <link rel="icon" href="./Front-end Images/Neighboorhood 2.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@460&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css">
<script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <!-- <link rel="stylesheet" href="a.css"> -->


   <style>
      html{
   font-size: 62.5%;
   overflow-x: hidden;

}



@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

:root{
   --blue:#2980b9;
   --red:tomato;
   --orange:orange;
   --black:#333;
   --white:#fff;
   --bg-color:#eee;
   --dark-bg:rgba(0,0,0,.7);
   --box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
   --border:.1rem solid #999;
}

*{
   font-family: 'Poppins', sans-serif;
   margin:0; padding:0;
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
   text-transform: capitalize;
}

html{
   font-size: 62.5%;
   overflow-x: hidden;
}

.container{
   max-width: 1200px;
   margin:0 auto;
   /* padding-bottom: 5rem; */
}

section{
   padding:2rem;
}

.heading{
   text-align: center;
   font-size: 3.5rem;
   text-transform: uppercase;
   color:var(--black);
   margin-bottom: 2rem;
}

/* .btn,
.option-btn,
.delete-btne{
   display: block;
   width: 100%;
   text-align: center;
   background-color: rgb(8, 57, 101);
   color:white;
   font-size: 1.7rem;
   padding:1.2rem 3rem;
   border-radius: .5rem;
   cursor: pointer;
   margin-top: 1rem;
}

.btn:hover,
.option-btn:hover,
.delete-btne:hover{
   background-color: rgb(10, 71, 124);
}

.option-btn i,
.delete-btn i{
   padding-right: .5rem;
}

.option-btn{
   background-color: rgb(10, 71, 124);
}

.delete-btne{
   margin-top: 0;
   background-color: rgb(193, 43, 17);
}
 */
.message{
   background-color: var(--blue);
   position: sticky;
   top:0; left:0;
   z-index: 10000;
   border-radius: .5rem;
   background-color: var(--white);
   padding:1.5rem 2rem;
   margin:0 auto;
   max-width: 1200px;
   display: flex;
   align-items: center;
   justify-content: space-between;
   gap:1.5rem;
}

.message span{
   font-size: 2rem;
   color:var(--black);
}

.message i{
   font-size: 2.5rem;
   color:var(--black);
   cursor: pointer;
}

.message i:hover{
   color:var(--red);
}

.header{
   background-color: var(--blue);
   position: sticky;
   top:0; left:0;
   z-index: 1000;
}

.header .flex{
   display: flex;
   align-items: center;
   padding:1.5rem 2rem;
   max-width: 1200px;
   margin:0 auto;
}

.header .flex .logo{
   margin-right: auto;
   font-size: 2.5rem;
   color:var(--white);
}

.header .flex .navbar a{
   margin-left: 2rem;
   font-size: 2rem;
   color:var(--white);
}

.header .flex .navbar a:hover{
   color:yellow;
}

.header .flex .cart{
   margin-left: 2rem;
   font-size: 2rem;
   color:var(--white);
}

.header .flex .cart:hover{
   color:yellow;
}

.header .flex .cart span{
   padding:.1rem .5rem;
   border-radius: .5rem;
   background-color: var(--white);
   color:var(--blue);
   font-size: 2rem;
}

#menu-btn{
   margin-left: 2rem;
   font-size: 3rem;
   cursor: pointer;
   color:var(--white);
   display: none;
}

.add-product-form{
   max-width: 50rem;
   background-color: var(--bg-color);
   border-radius: .5rem;
   padding:2rem;
   margin:0 auto;
   margin-top: 2rem;
}

.add-product-form h3{
   font-size: 2.5rem;
   margin-bottom: 1rem;
   color:var(--black);
   text-transform: uppercase;
   text-align: center;
}

.add-product-form .box{
   text-transform: none;
   padding:1.2rem 1.4rem;
   font-size: 1.7rem;
   color:var(--black);
   border-radius: .5rem;
   background-color: var(--white);
   margin:1rem 0;
   width: 100%;
}

.display-product-table table{
   width: 100%;
   text-align: center;
}

.display-product-table table thead th{
   padding:1.5rem;
   font-size: 2rem;
   background-color: var(--black);
   color:var(--white);
}

.display-product-table table td{
   padding:1.5rem;
   font-size: 2rem;
   color:var(--black);
}

.display-product-table table td:first-child{
   padding:0;
}

.display-product-table table tr:nth-child(even){
   background-color: var(--bg-color);
}

.display-product-table .empty{
   margin-bottom: 2rem;
   text-align: center;
   background-color: var(--bg-color);
   color:var(--black);
   font-size: 2rem;
   padding:1.5rem;
}

.edit-form-container{
   position: fixed;
   top:0; left:0;
   z-index: 1100;
   background-color: var(--dark-bg);
   padding:2rem;
   display: none;
   align-items: center;
   justify-content: center;
   min-height: 100vh;
   width: 100%;
}

.edit-form-container form{
   width: 50rem;
   border-radius: .5rem;
   background-color: var(--white);
   text-align: center;
   padding:2rem;
}

.edit-form-container form .box{
   width: 100%;
   background-color: var(--bg-color);
   border-radius: .5rem;
   margin:1rem 0;
   font-size: 1.7rem;
   color:var(--black);
   padding:1.2rem 1.4rem;
   text-transform: none;
}

.products .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, 35rem);
   gap:1.5rem;
   justify-content: center;
}

.products .box-container .box{
   text-align: center;
   padding:2rem;
   box-shadow: var(--box-shadow);
   border:var(--border);
   border-radius: .5rem;
}

.products .box-container .box img{
   height: 25rem;
}

.products .box-container .box h3{
   margin:1rem 0;
   font-size: 2.5rem;
   color:var(--black);
}

.products .box-container .box .price{
   font-size: 2.5rem;
   color:var(--black);
}

.shopping-cart table{
   text-align: center;
   width: 100%;
}

.shopping-cart table thead th{
   padding:1.5rem;
   font-size: 2rem;
   color:var(--white);
   background-color: #2a2626;
}

.shopping-cart table tr td{
   border-bottom: var(--border);
   padding:1.5rem;
   font-size: 2rem;
   color:var(--black);
}

.shopping-cart table input[type="number"]{
   border: var(--border);
   padding:1rem 2rem;
   font-size: 2rem;
   color:var(--black);
   width: 10rem;
}

.shopping-cart table input[type="submit"]{
   padding:.5rem 1.5rem;
   cursor: pointer;
   font-size: 2rem;
   background-color: var(--orange);
   color:var(--white);
}

.shopping-cart table input[type="submit"]:hover{
   background-color: var(--black);
}

.shopping-cart table .table-bottom{
   background-color: var(--bg-color);
}

.shopping-cart .checkout-btn{
   text-align: center;
   margin-top: 1rem;
}

.shopping-cart .checkout-btn a{
   display: inline-block;
   width: auto;
}

.shopping-cart .checkout-btn a.disabled{
   pointer-events: none;
   opacity: .5;
   user-select: none;
   background-color: var(--red);
}

.checkout-form form{
   padding:2rem;
   border-radius: .5rem;
   background-color: var(--bg-color);
}

.checkout-form form .flex{
   display: flex;
   flex-wrap: wrap;
   gap:1.5rem;
}

.checkout-form form .flex .inputBox{
   flex:1 1 40rem;
}

.checkout-form form .flex .inputBox span{
   font-size: 2rem;
   color:var(--black);
}

.checkout-form form .flex .inputBox input,
.checkout-form form .flex .inputBox select{
   width: 100%;
   background-color: var(--white);
   font-size: 1.7rem;
   color:var(--black);
   border-radius: .5rem;
   margin:1rem 0;
   padding:1.2rem 1.4rem;
   text-transform: none;
   border:var(--border);
}

.display-order{
   max-width: 50rem;
   background-color: var(--white);
   border-radius: .5rem;
   text-align: center;
   padding:1.5rem;
   margin:0 auto;
   margin-bottom: 2rem;
   box-shadow: var(--box-shadow);
   border:var(--border);
}

.display-order span{
   display: inline-block;
   border-radius: .5rem;
   background-color: var(--bg-color);
   padding:.5rem 1.5rem;
   font-size: 2rem;
   color:var(--black);
   margin:.5rem;
}

.display-order span.grand-total{
   width: 100%;
   background-color: var(--red);
   color:var(--white);
   padding:1rem;
   margin-top: 1rem;
}

.order-message-container{
   position: fixed;
   top:0; left:0;
   height: 100vh;
   overflow-y: scroll;
   overflow-x: hidden;
   padding:2rem;
   display: flex;
   align-items: center;
   justify-content: center;
   z-index: 1100;
   background-color: var(--dark-bg);
   width: 100%;
}

.order-message-container::-webkit-scrollbar{
   width: 1rem;
}

.order-message-container::-webkit-scrollbar-track{
   background-color: var(--dark-bg);
}

.order-message-container::-webkit-scrollbar-thumb{
   background-color: var(--blue);
}

.order-message-container .message-container{
   width: 50rem;
   background-color: var(--white);
   border-radius: .5rem;
   padding:2rem;
   text-align: center;
}

.order-message-container .message-container h3{
   font-size: 2.5rem;
   color:var(--black);
}

.order-message-container .message-container .order-detail{
   background-color: var(--bg-color);
   border-radius: .5rem;
   padding:1rem;
   margin:1rem 0;
}

.order-message-container .message-container .order-detail span{
   background-color: var(--white);
   border-radius: .5rem;
   color:var(--black);
   font-size: 2rem;
   display: inline-block;
   padding:1rem 1.5rem;
   margin:1rem;
}

.order-message-container .message-container .order-detail span.total{
   display: block;
   background: var(--red);
   color:var(--white);
}

.order-message-container .message-container .customer-details{
   margin:1.5rem 0;
}

.order-message-container .message-container .customer-details p{
   padding:1rem 0;
   font-size: 2rem;
   color:var(--black);
}

.order-message-container .message-container .customer-details p span{
   color:var(--blue);
   padding:0 .5rem;
   text-transform: none;
}


















/* media queries  */

@media (max-width:1200px){

   .shopping-cart{
      overflow-x: scroll;
   }

   .shopping-cart table{
      width: 120rem;
   }

   .shopping-cart .heading{
      text-align: left;
   }

   .shopping-cart .checkout-btn{
      text-align: left;
   }

}

@media (max-width:991px){

   html{
      font-size: 55%;
   }

}

@media (max-width:768px){

   #menu-btn{
      display: inline-block;
      transition: .2s linear;
   }

   #menu-btn.fa-times{
      transform: rotate(180deg);
   }

   .header .flex .navbar{
      position: absolute;
      top:99%; left:0; right:0;
      background-color: var(--blue);
      clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
      transition: .2s linear;
   }

   .header .flex .navbar.active{
      clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
   }

   .header .flex .navbar a{
      margin:2rem;
      display: block;
      text-align: center;
      font-size: 2.5rem;
   }

   .display-product-table{
      overflow-x: scroll;
   }

   .display-product-table table{
      width: 90rem;
   }

}

@media (max-width:450px){

   html{
      font-size: 50%;
   }

   .heading{
      font-size: 3rem;
   }

   .products .box-container{
      grid-template-columns: 1fr;
   }

}
.btn{
  height: 3.5rem;
  background: rgba(76, 68, 182, 0.808);
  border: 0;
  border-radius: .5rem;
  background-color: #B7242A;
  color:#fff;
  font-size: 1.5rem;
  cursor: pointer;
  transition: all .3s;
  margin-top: 1rem;
  padding: 0rem 1rem;
}

.btn:hover{
  background-color: #a61d22;
  color:#fff;
}

.link{
  margin-bottom: 1.5rem;
}

.cp{
  font-size:1.4rem;
  padding: 1rem;
  color:#fff;
}

.cp:hover{
  color:#fff;

}
/* 
.nav{
  background: #fff;
  display: flex;
  flex-direction: row;
  justify-content: space-around;
  line-height: 6rem;
  z-index: 100;
} */

.logo{
  font-size: 2.5rem;
  font-weight: 900;

}

.logo a{
text-decoration: none;
  color: black;
}

.right-links a{
  padding: 0 1rem;
  
}

      
      /* Body color end */
      
      /* Navbar name start */
      .te {
        color: #fff;
        font-weight: 500;
      
        font-size: 2.5rem;
        font-family: "Protest Riot", sans-serif;
      }
      
      .ab{
        font-size: 2.5rem;
        color: #fff;
        font-weight: 500;
        font-family: "Protest Riot", sans-serif;
      
      }
      /* Navbar name end */
   
      
      /* Navbar start */
      
      .btn{
        font-size: 1.7rem;
      }
      .btn-outline-primary {
        color: #fff;
        background-color: transparent;
        background-image: none;
        border-color: #7cc;
      }
      
      .btn-outline-primary:hover {
        color: #222;
        background-color: #8ad3d3;
        border-color: #7cc;
      }
      
      .btn-outline-primary:focus,
      .btn-outline-primary.focus {
        box-shadow: 0 0 0 .2rem rgba(119, 204, 204, 0.5)
      }
      
      .btn-outline-primary.disabled,
      .btn-outline-primary:disabled {
        color: #7cc;
        background-color: transparent
      }
      
      .btn-outline-primary:not(:disabled):not(.disabled):active,
      .btn-outline-primary:not(:disabled):not(.disabled).active,
      .show>.btn-outline-primary.dropdown-toggle {
        color: #212529;
        background-color: #8ad3d3;
        border-color: #7cc;
      }
      
      .btn-outline-primary:not(:disabled):not(.disabled):active:focus,
      .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
      .show>.btn-outline-primary.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(119, 204, 204, 0.5);
      }
      
      .navbar-light .navbar-nav .nav-link {
        color: black;
      
      }
      
      .navbar-light .navbar-nav .nav-link:hover {
        color: white;
      }
      
      .btn-outline-dark {
        color: #7cc;
        background-color: transparent;
        background-image: none;
        border-color: #7cc;
      }
      
      .btn-outline-dark:hover {
        color: #222;
        background-color: #8ad3d3;
        border-color: #7cc;
      }
      
      .btn-outline-dark:focus,
      .btn-outline-dark.focus {
        box-shadow: 0 0 0 .2rem rgba(119, 204, 204, 0.5)
      }
      
      .btn-outline-dark.disabled,
      .btn-outline-dark:disabled {
        color: #7cc;
        background-color: transparent
      }
      
      .btn-outline-dark:not(:disabled):not(.disabled):active,
      .btn-outline-dark:not(:disabled):not(.disabled).active,
      .show>.btn-outline-dark.dropdown-toggle {
        color: #212529;
        background-color: #8ad3d3;
        border-color: #7cc
      }
      
      .btn-outline-dark:not(:disabled):not(.disabled):active:focus,
      .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
      .show>.btn-outline-dark.dropdown-toggle:focus {
        box-shadow: 0 0 0 .2rem rgba(119, 204, 204, 0.5)
      }
      
      .navbar-light .navbar-nav .nav-link {
        color: black;
      
      }
      
      .navbar-light .navbar-nav .nav-link:hover {
        color: white;
      }
      
      .navbar-toggler-icon {
        background-color: #475460;
        /* background-color: white;
        /* color: white; */
        border-radius: 20%; 
        font-size: 2.8rem;
      }
      
      .bg-light {
        background-color: #475460 !important;
      }
      
      .navbar-nav {
        margin-left: 3rem;
      }
      
      /* Navbar end */

      
.display-order span.grand-total{
   background-color: rgb(8, 57, 101);

}
.btnn{
   display: block;
   width: 100%;
   text-align: center;
   background-color: rgb(8, 57, 101);
   color:white;
   font-size: 1.7rem;
   padding:1.2rem 3rem;
   border-radius: .5rem;
   cursor: pointer;
   margin-top: 1rem;

}
.btnn:hover{
   background-color: rgb(10, 71, 124);

}

.btn-outline-dark{
   color: white;
}

   </style>
</head>
<body>

<nav class="navbar sticky-top bg-light">

    <div class="logo">
    <a class="navbar-brand" href="#">
      <img src="./Front-end Images/Neighbourhood 1.png" width="65" height="35" class="d-inline-block align-top" alt="">
      &nbsp;&nbsp;<span class="te">NeighborhoodFinds</span>
    </a>
        <!-- <p><a href="user.php">NeighborhoodFinds</a></p> -->
    </div>

    <div class="right-links">
    <?php
$id=$_SESSION['id'];
$query= mysqli_query($conn, "SELECT*FROM users WHERE Id=$id");

while($select=mysqli_fetch_assoc($query)){
  $res_Uname=$select['Username'];
  $res_Email=$select['Email'];
  $res_MobileNo=$select['Mobileno'];
  $res_id=$select['Id'];

}

echo "<a class='cp' href='edit.php?Id=$res_id'>Update Profile</a>";
?>
  
  <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

  <a href="cart.php" ><button class="btn btn-outline-dark my-2 my-sm-0" type="" style="font-family: poppins;"><?php echo $row_count; ?><i class='bx bxs-cart' ></i></button>

    <a href="php/logout.php"><button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Log Out</button>
</a>
</div>
</nav>




<div class="container">

<section class="checkout-form">

   <h1 class="heading">complete your order</h1>

   <form action="" method="post">

   <div class="display-order">
   <?php
$select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
$grand_total = 0;
$total = 0; // Initialize $total before the loop
if(mysqli_num_rows($select_cart) > 0){
    while($fetch_cart = mysqli_fetch_assoc($select_cart)){
        $total_price = number_format($fetch_cart['price'] * $fetch_cart['quantity']);
        $total += $fetch_cart['price'] * $fetch_cart['quantity']; // Calculate total without formatting
        $grand_total = $total; // Assign $total to $grand_total
?>
        <span><?= $fetch_cart['name']; ?>(<?= $fetch_cart['quantity']; ?>)</span>
<?php
    }
}else{
    echo "<div class='display-order'><span>your cart is empty!</span></div>";
}
?>
<span class="grand-total"> grand total : ₹ <?= number_format($grand_total); ?>/- </span>

   </div>

      <div class="flex">
         <div class="inputBox">
            <span>your name</span>
            <input type="text" placeholder="Enter Your Full Name" name="name" required>
         </div>
         <div class="inputBox">
            <span>your number</span>
            <input type="number" placeholder="Enter Your Mobile Number" name="number" required>
         </div>
         <div class="inputBox">
            <span>your email</span>
            <input type="email" placeholder="Enter Your Email" name="email" required>
         </div>
         <div class="inputBox">
            <span>payment method</span>
            <select name="method">
               <option value="cash on delivery" selected>Cash on Devlivery</option>
               <option disabled value="credit cart">credit cart</option>
               <option disabled value="paypal">paypal</option>
            </select>
         </div>
         <div class="inputBox">
            <span>address 1</span>
            <input type="text" placeholder="Address 1" name="flat" required>
         </div>
         <div class="inputBox">
            <span>address 2</span>
            <input type="text" placeholder="Address 2" name="street" required>
         </div>
         <div class="inputBox">
            <span>city</span>
            <input type="text" placeholder="e.g. Indore" name="city" required>
         </div>
         <div class="inputBox">
            <span>state</span>
            <input type="text" placeholder="e.g. Madhya Pradesh" name="state" required>
         </div>
         <div class="inputBox">
            <span>country</span>
            <input type="text" placeholder="e.g. India" name="country" required>
         </div>
         <div class="inputBox">
            <span>pin code</span>
            <input type="text" placeholder="e.g. 123456" name="pin_code" required>
         </div>
      </div>
      <input type="submit" value="order now" name="order_btn" class="btnn">
   </form>

</section>

</div>

<!-- custom js file link  -->
<script src="a.js"></script>
   
</body>
</html>