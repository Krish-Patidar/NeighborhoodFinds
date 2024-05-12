<?php
session_start();
include("php/config.php");
if(!isset($_SESSION['valid'])){
  header("Location: signin.php");
}
?>
<?php

@include 'php/config.php';

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_para = $_POST['product_para'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, para, image, quantity) VALUES('$product_name', '$product_price', '$product_para', '$product_image', '$product_quantity')");
      $message[] = 'product added to cart succesfully';
   }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
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
<link rel="stylesheet" href="search.css">
<!-- <link rel="stylesheet" href="a.css"> -->


<style>
  
/* user */

  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

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

.headerr{
  background-color: #201f1f;

}
.heading{
   text-align: center;
   font-size: 3.5rem;
   text-transform: uppercase;
   color:var(--black);
   margin-bottom: 2rem;
}


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
   background-color: var(--black);
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

@media screen and (max-width:596px) {
  html{
    font-size: 60%;

    .te{
      font-size: 2rem;
    }

    .la{
      text-align: center;
    }
  }
}

@media screen and (max-width:576px) {
  html{
    font-size: 55%;

    .te{
      font-size: 2rem;
    }

    .la{
      text-align: center;
    }
  }
}

@media screen and (max-width:481px) {
  html{
    font-size: 85%;

    .la{
      font-size: 3rem;
    }

    .te{
      font-size: 2rem;
    }

    .cp{
      font-size: 1rem;
      text-align:left;
    }

    .bx{
      font-size: 1rem;
    }

    .btn{
      font-size: 1rem;
      align-items:right;
    }

    .utext{
      font-size: 1rem;
    }
  }

}

@media screen and (max-width:403px) {
  html{
    font-size: 78%;

    .te{
    font-size: 2rem;
  }
  }

}

@media screen and (max-width:376px) {
  html{
    font-size: 72%;

    .te{
    font-size: 2rem;
  }
  }
  

}
@media screen and (max-width:350px) {
  html{
    font-size: 65%;

    .te{
    font-size: 2rem;
  }
  }
  
}


/* @media (max-width:991px){

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

} */

/* @media (max-width:450px){

   html{
      font-size: 50%;
   }

   .heading{
      font-size: 3rem;
   }

   .products .box-container{
      grid-template-columns: 1fr;
   }

} */

 
.box{
  background: #fdfdfd;
  display: flex;
  flex-direction: column;
  padding: 2.5rem 2.5rem;
  border-radius: 2rem;
  box-sizing: 0 0 12.8rem 0 rgba(0,0,0,0.1),
              0 3.2rem 6.4rem -4.8rem rgba(0,0,0,0.5);
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

main{
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 6rem;
}

.main-box{
  display: flex;
  flex-direction: column;
  width: 70%;
}

.main-box .top{
  display: flex;
  flex-direction: row;
  justify-content: space-between;
}

.bottom{
  width: 100%;
  margin-top: 2rem;
}

@media screen and (max-width:840px) {
.main-box .top{
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}
.top .box{
  margin: 1rem 1rem;
}

.bottom{
  margin-top: 0;

}
}

      body {
        overflow-x: hidden;
      }
    /* Body color start */
    .bg {
        background-color: #1B2631;
        /* background-color: rgba(42, 23, 152, 0.737); */
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
      
      /* Header for every page start */
      .head {
        color: white;
        font-weight: bold;
        text-align: center;
        font-size: 7rem;
        margin-top: 2.2rem;
        /* font-family: 'Roboto Slab', serif; */
      }
      
      .cont {
        color: white;
        text-align: justify;
        text-align: center;
        font-size: 2rem;
      }
      
      .btn-outline-dark {
        color: #fff;
      }
      
      /* Header for every page end */
      

  

  .utext{
    font-size:1.5rem;
    text-align:center;
  }
  
   
  .us{
    background-color: #edecec;
  }
  

  .data {
    width: 100%;
    border-radius: 1rem;
    height: 92rem;
    overflow-y: auto;
}
.top {
    height: 6rem;
    border-radius: .3rem;
    background-color: #eee;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 2rem;
}


.card {
        --accent-color:#f5a535;
  position: relative;   
  width: 24rem;
  background: white;
  height: 45rem;
  border-radius: 1rem;
  padding: 0.3rem;
  box-shadow: rgba(100, 100, 111, 0.2) 0rem 5rem 3rem -2rem;
  transition: all 0.5s ease-in-out;
  margin-right: 2rem;
  margin-left: 2rem;
}

.card .image-container {
  position: relative;
  width: 100%;
  height: 25rem;
  border-radius: 0.7rem;
  border-top-right-radius: 6rem;
  margin-bottom: 1rem;
}

.card .image-container img {
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
  object-fit: cover;
  border-radius: inherit;
}

.card .image-container .svg {
  height: 100%;
  width: 100%;
  border-radius: inherit;
}

.card .image-container .price {
  position: absolute;
  right: 0.7rem;
  bottom: -1rem;
  background: white;
  color: var(--accent-color);
  font-weight: 900;
  font-size: 1.5rem;
  padding: 0.5rem;
  border-radius: 1rem 1rem 2rem 2rem;
  box-shadow: rgba(100, 100, 111, 0.2) 0rem 0rem 1.5rem 0rem;
}

.card .favorite {
  position: absolute;
  width: 2rem;
  height: 2rem;
  top: .5rem;
  right: .5rem;
  cursor: pointer;
}

.card .favorite input {
  position: absolute;
  opacity: 0;
  width: 0;
  height: 0;
}

.card .favorite input:checked ~ svg {
  animation: bouncing 0.5s;
  fill: rgb(226, 75, 75);
  filter: drop-shadow(0rem .3rem .1rem rgba(53, 53, 53, 0.14));
}

.card .favorite svg {
  fill: #a8a8a8;
}

.card .content {
  padding: 0px 0.8rem;
  margin-bottom: 1rem;
}

.card .content .brand {
  font-weight: 900;
  font-size: 1.4rem;
  color: #a6a6a6;
}

.card .content .product-name {
  font-weight: 700;
  color: #666666;
  font-size: 0.9rem;
  margin-bottom: 1rem;
}

.card .content .color-size-container {
  display: flex;
  justify-content: space-between;
  text-transform: uppercase;
  font-size: 1rem;
  font-weight: 700;
  color: #a8a8a8;
  gap: 2rem;
  margin-bottom: 1.5rem;
}

.card .content .color-size-container > * {
  flex: 1;
}

.card .content .color-size-container .colors .colors-container {
  list-style-type: none;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  gap: 0.3rem;
  font-size: 0.5rem;
  margin-top: 0.2rem;
}

.card .content .color-size-container .colors .colors-container .color {
  height: 1.4rem;
  position: relative;
}

.card .content .color-size-container .colors .colors-container .color:hover .color-name {
  display: block;
}

.card .content .color-size-container .colors .colors-container .color a {
  display: inline-block;
  height: 100%;
  aspect-ratio: 1;
  border: .3rem solid black;
  border-radius: 50%;
}

.card .content .color-size-container .colors .colors-container .color .color-name {
  display: none;
  position: absolute;
  bottom: 125%;
  left: 50%;
  transform: translateX(-50%);
  z-index: 99;
  background: black;
  padding: 0.2rem 1rem;
  border-radius: 1rem;
  text-align: center;
}

.card .content .color-size-container .colors .colors-container .color:first-child a {
  border-color: #ffd426;
}

.card .content .color-size-container .colors .colors-container .color:nth-child(2) a {
  background: #144076;
}

.card .content .color-size-container .colors .colors-container .color:nth-child(3) a {
  border-color: #00b9ff;
}

.card .content .color-size-container .colors .colors-container .color:nth-child(4) a {
  border-color: #ff6ba1;
}

.card .content .color-size-container .colors .colors-container .active {
  border-color: black;
}

.card .content .color-size-container .sizes .size-container {
  list-style-type: none;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  margin-top: 0.2rem;
}

.card .content .color-size-container .sizes .size-container .size {
  height: 1.4rem;
}

.card .content .color-size-container .sizes .size-container .size .size-radio {
  cursor: pointer;
}

.card .content .color-size-container .sizes .size-container .size .size-radio input {
  display: none;
}

.card .content .color-size-container .sizes .size-container .size .size-radio input:checked ~ .name {
  background: var(--accent-color);
  border-radius: 2rem 2rem 2rem 2rem;
  color: white;
}

.card .content .color-size-container .sizes .size-container .size .size-radio .name {
  display: grid;
  place-content: center;
  height: 100%;
  aspect-ratio: 1.2/1;
  text-decoration: none;
  color: #484848;
  font-size: 1rem;
  text-align: center;
}

.card .content .rating {
  color: #a8a8a8;
  font-size: 0.9rem;
  font-weight: 700;
  display: flex;
  align-items: center;
  gap: 0.5rem;
}

.card .content .rating svg {
  height: 1.2rem;
}

.card .button-container {
  display: flex;
  gap: 0.3rem;
}

.card .button-container .button {
  border-radius: 0.7rem 0.7rem 0.7rem 0.7rem;
  border: none;
  padding: 0.5rem 0;
  background: var(--accent-color);
  color: white;
  font-weight: 900;
  cursor: pointer;
}

.card .button-container .button:hover {
  background: #d98f27;
}

.card .button-container .buy-button {
  flex: auto;
}

.card .button-container .cart-button {
  display: grid;
  place-content: center;
  width: 5rem;
}

.card .button-container .cart-button svg {
  width: 1.5rem;
  fill: white;
}

.card:hover {
  transform: scale(1.03);
}

@keyframes bouncing {
  from, to {
    transform: scale(1, 1);
  }

  25% {
    transform: scale(1.5, 2.1);
  }

  50% {
    transform: scale(2.1, 1.5);
  }

  75% {
    transform: scale(1.5, 2.05);
  }
}
  

.card-deck {
  display: flex;
  flex-wrap: wrap;
}

.cardi {
  flex: 1 0 20%; /* This will make each card take up 20% of the container's width */
  margin: 0 1rem; /* Adjust margin as needed */
}

.cardi{
  margin-bottom:4rem;
}


</style>

</head>

<body class="us">

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

<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>


<br><br>

    <div class="data">
  <div class="top">
  <p class="utext">Hello <b><?php echo $res_Uname ?></b>, Welcome.</p>
  <p class="utext">Your E-mail is <b><?php echo $res_Email ?></b>.</p>
  <p class="utext">Your Mobile Number is <b><?php echo $res_MobileNo ?></b>.</p>
  </div>
  <div class="headerr">
    <p class="la">Buy Everything On NeighborhoodFinds</p>
  </div>


<dic class="container">
  <div class="card-deck">

      <?php
      
      $select_products = mysqli_query($conn, "SELECT * FROM `products`");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>
    <div class="cardi">


      <form action="" method="post" class="card">
         <div class="image-container">
            <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>" class="price">
            <div class="price">₹<?php echo $fetch_product['price']; ?>/-</div>

         </div>
         <div class="content">
            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>" class="brand">
            <div class="brand"> <?php echo $fetch_product['name']; ?></div>
            <input type="hidden" name="product_para" value="<?php echo $fetch_product['para']; ?>" class="product-name">
            <div class="product-name"> <?php echo $fetch_product['para']; ?></div>
         </div>
         <div class="button-container">
         <input type="submit" class="buy-button button" value="Add To Cart" name="add_to_cart">
         </div>
      </form>
      </div>

      <?php
         };
      };
      ?>


</div>
<div>
  


  





  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>

  <script src="assets/js/jquery-3.2.1.min.js"></script>
  <script src="assets/js/jquery-migrate-3.0.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/jquery.backstretch.min.js"></script>
  <script src="assets/js/retina-1.1.0.min.js"></script>
  <script src="assets/js/scripts.js"></script>

  <!-- <SCript src="searchh.js"></SCript> -->
  <script src="a.js"></script>

  
</body>

</html>