<?php
session_start();
include("php/config.php");
if(!isset($_SESSION['valid'])){
  header("Location: signin.php");
}
?>

<?php
@include 'php/config.php';

if(isset($_POST['update_update_btn'])){
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $update_quantity_query = mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_value' WHERE id = '$update_id'");
   if($update_quantity_query){
      header('location:cart.php');
   };
};

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'");
   header('location:cart.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM `cart`");
   header('location:cart.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>NeighborhoodFinds.com</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="a.css">


   <style>

html{
   font-size: 62.5%;
}

@media screen and (max-width:1201px) {
   html{
      font-size:60%;

      .heading{
         text-align:center;
      }
   }
}

@media screen and (max-width:1179px) {
   html{
      font-size:50%;

      .heading{
         text-align:center;
      }
   }
}

@media screen and (max-width:989px) {
   html{
      font-size:45%;

      .heading{
         text-align:center;
      }
   }
}

@media screen and (max-width:887px) {
   html{
      font-size:40%;

      .heading{
         text-align:center;
      }
   }
}

@media screen and (max-width:481px) {
   html{
      font-size:22%;

      .heading{
         text-align:center;
      }
   }
}

@media screen and (max-width:433px) {
   html{
      font-size:19%;

      .heading{
         text-align:center;
      }
   }
}

@media screen and (max-width:378px) {
   html{
      font-size:18%;

      .heading{
         text-align:center;
      }
   }
}

@media screen and (max-width:358px) {
   html{
      font-size:17%;

      .heading{
         text-align:center;
      }
   }
}


@media screen and (max-width:339px) {
   html{
      font-size:16%;

      .heading{
         text-align:center;
      }
   }
}



.heading{
   color:black;
}
.shopping-cart table thead th{
   padding:1.5rem;
   font-size: 2rem;
   color:var(--white);
   background-color: #2a2626;

}
.shopping-cart table input[type="submit"] {
   border-radius: 1rem;
   background-color: rgb(243, 179, 16);
}

.shopping-cart table input[type="submit"]:hover {
   background-color: rgb(217, 160, 16);
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

      .btn,
.option-btn,
.delete-btn{
   display: block;
   width: 100%;
   text-align: center;
   background-color: rgb(10, 71, 124);
   color: white;
   font-size: 1.7rem;
   padding:1.2rem 3rem;
   border-radius: .5rem;
   cursor: pointer;
   margin-top: 1rem;
}

.btn:hover,
.option-btn:hover,
.delete-btn:hover{
   background-color: rgb(8, 57, 101);
}


.option-btn i,
.delete-btn i{
   padding-right: .5rem;
}

.option-btn{
   background-color: rgb(243, 179, 16);
}

.option-btn:hover{
   background-color: rgb(217, 160, 16);
}

.delete-btn{
   margin-top: 0;
   background-color: rgb(235, 61, 30);
}

.delete-btn:hover{
   background-color: rgb(193, 43, 17);
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

.delete-btne{
   margin-top: 0;
   background-color: rgb(193, 43, 17);
   display: block;
   width: 100%;
   text-align: center;
   color:white;
   font-size: 1.7rem;
   padding:1.2rem 3rem;
   border-radius: .5rem;
   cursor: pointer;
   margin-top: 1rem;
}

.delete-btne:hover{
   background-color: rgb(174, 39, 15);


}

body {
        overflow-x: hidden;
      }


      
   </style>

</head>
<body>



<div class="container">

<section class="shopping-cart">

   <h1 class="heading">shopping cart</h1>

   <table>

      <thead>
         <th>image</th>
         <th>name</th>
         <th>price</th>
         <th>description</th>
         <th>quantity</th>
         <th>total price</th>
         <th>action</th>
      </thead>

      <tbody>

      <?php 
$select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
$grand_total = 0;
$sub_total = 0; // Initialize $sub_total before the loop
if(mysqli_num_rows($select_cart) > 0){
    while($fetch_cart = mysqli_fetch_assoc($select_cart)){
?>
    <tr>
        <td><img src="uploaded_img/<?php echo $fetch_cart['image']; ?>" height="100" alt=""></td>
        <td><?php echo $fetch_cart['name']; ?></td>
        <td>₹<?php echo number_format($fetch_cart['price']); ?>/-</td>
        <td><?php echo $fetch_cart['para']; ?></td>
        <td>
            <form action="" method="post">
                <input type="hidden" name="update_quantity_id"  value="<?php echo $fetch_cart['id']; ?>" >
                <input type="number" name="update_quantity" min="1"  value="<?php echo $fetch_cart['quantity']; ?>" >
                <input type="submit" value="update" name="update_update_btn">
            </form>   
        </td>
        <td>₹<?php $sub_total = $fetch_cart['price'] * $fetch_cart['quantity']; echo number_format($sub_total); ?>/-</td> <!-- Format the subtotal here -->
        <td><a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" onclick="return confirm('remove item from cart?')" class="delete-btne"> <i class="fas fa-trash"></i> remove</a></td>
    </tr>
<?php
    $grand_total += $sub_total;  
};
}
?>
<tr class="table-bottom">
    <td><a href="user.php" class="option-btn" style="margin-top: 0;">continue shopping</a></td>
    <td colspan="4">grand total</td>
    <td>₹<?php echo number_format($grand_total); ?>/-</td> <!-- Format the grand total here -->
    <td><a href="cart.php?delete_all" onclick="return confirm('are you sure you want to delete all?');" class="delete-btne"> <i class="fas fa-trash"></i> delete all </a></td>
</tr>
</tbody>
</table>


   <div class="checkout-btn">
      <a href="checkout.php" class="btnn <?= ($grand_total > 1)?'':'disabled'; ?>">procced to checkout</a>
   </div>

</section>

</div>
   
<!-- custom js file link  -->
<script src="a.js"></script>

</body>
</html>