<?php
session_start();
include("php/config.php");
if(!isset($_SESSION['valid'])){
  header("Location: signin.php");
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
    


  <style>

  
/* edit */


html {
    font-size: 62.5%;

  }
  
  .btn{
  height: 3.5rem;
  background: rgba(76, 68, 182, 0.808);
  border: 0;
  border-radius: .5rem;
  color: #fff;
  font-size: 1.5rem;
  cursor: pointer;
  transition: all .3s;
  margin-top: 1rem;
  padding: 0rem 1rem;
}

.btn:hover{
  opacity: 0.82;
}

/* .nav{
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

.container {
max-width: 35rem;
background: #F8F9FD;
background: linear-gradient(0deg, rgb(255, 255, 255) 0%, rgb(244, 247, 251) 100%);
border-radius: 4rem;
padding: 2.5rem 3.5rem;
border: .5rem solid rgb(255, 255, 255);
box-shadow: rgba(133, 189, 215, 0.8784313725) 0rem 3rem 3rem -2rem;
margin: 2rem;
}

.heading {
text-align: center;
font-weight: 900;
font-size: 3rem;
color: rgb(16, 137, 211);
}

.formm {
margin-top: 2rem;
}

.formm .input {
width: 100%;
background: white;
border: none;
padding: 1.5rem 2rem;
border-radius: 20px;
margin-top: 1.5rem;
box-shadow: #cff0ff 0rem 1rem 1rem -.5rem;
border-inline: .2rem solid transparent;
}

.formm .input::-moz-placeholder {
color: rgb(170, 170, 170);
}

.formm .input::placeholder {
color: rgb(170, 170, 170);
}

.formm .input:focus {
outline: none;
border-inline: .2rem solid #12B1D1;
}

.formm .forgot-password {
display: block;
margin-top: 1rem;
margin-left: 1rem;
}

.formm .forgot-password a {
font-size: 1.1rem;
color: #0099ff;
text-decoration: none;
}

.formm .login-button {
display: block;
width: 100%;
font-weight: bold;
background: linear-gradient(45deg, rgb(16, 137, 211) 0%, rgb(18, 177, 209) 100%);
color: white;
padding-block: 1.5rem;
margin: 2rem auto;
border-radius: 20px;
box-shadow: rgba(133, 189, 215, 0.8784313725) 0rem 2rem 1rem -1.5rem;
border: none;
transition: all 0.2s ease-in-out;
}

.formm .login-button:hover {
transform: scale(1.03);
box-shadow: rgba(133, 189, 215, 0.8784313725) 0rem 2.3rem 1rem -2rem;
}

.formm .login-button:active {
transform: scale(0.95);
box-shadow: rgba(133, 189, 215, 0.8784313725) 0rem 1.5rem 1rem -1rem;
}

.loginn-buttonn {
    display: block;
    width: 100%;
    font-weight: bold;
    background: linear-gradient(45deg, rgb(16, 137, 211) 0%, rgb(18, 177, 209) 100%);
    color: white;
    padding-block: 1.5rem;
    /* margin: 2rem auto; */
    margin-top:2rem;
    border-radius: 2rem;
    box-shadow: rgba(133, 189, 215, 0.8784313725) 0rem 2rem 1rem -1.5rem;
    border: none;
    transition: all 0.2s ease-in-out;
  }
  
  .loginn-buttonn:hover {
    transform: scale(1.03);
    box-shadow: rgba(133, 189, 215, 0.8784313725) 0rem 2.3rem 1rem -2rem;
  }
  
  .loginn-buttonn:active {
    transform: scale(0.95);
    box-shadow: rgba(133, 189, 215, 0.8784313725) 0rem 1.5rem 1rem -1rem;
  }

  .message{
    text-align:center;
    background:#f9eded;
    padding:1.5rem 0;
    border:.1rem solid #699053;
    border-radius:0.5rem;
    margin-bottom:1rem;
    color:red;
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
      
      /* To hide Horizontal scrollbar start*/
      body {
        overflow-x: hidden;
      }
      
      /* To hide Horizontal scrollbar end*/
      
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
        border-color: #7cc
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
        border-color: #7cc
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
        border-color: #7cc
      }
      
      .btn-outline-dark:hover {
        color: #222;
        background-color: #8ad3d3;
        border-color: #7cc
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
        margin-top: 2.2rem
        /* font-family: 'Roboto Slab', serif; */
        ;
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
.logo{
  font-size: 2.5rem;
  font-weight: 900;

}

.logo a{
text-decoration: none;
  color: black;
}
.ua{
    background-color: #edecec;
  }

</style>
</head>
<body class="ua">
<nav class="navbar sticky-top bg-light">
    <div class="logo">
    <a class="navbar-brand" href="#">
      <img src="./Front-end Images/Neighbourhood 1.png" width="65" height="35" class="d-inline-block align-top" alt="">
      &nbsp;&nbsp;<span class="te">NeighborhoodFinds</span>
    </a>
        <!-- <p><a href="user.php">NeighborhoodFinds</a></p> -->
    </div>
<div class="right-links">

<a class="cp" href="#">Update Profile</a>
    <a href="php/logout.php"><button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Log Out</button>
</a>
</div>
</nav>

<center>
    <div class="container">
      <div class="box form-box">
        <?php
          if(isset($_POST['submit'])){
            $username= $_POST['username'];
            $email= $_POST['email'];
            $mobileno= $_POST['mobileno'];

            $id=$_SESSION['id'];
            $edit_query= mysqli_query($conn, "UPDATE users SET Username='$username', Email='$email', Mobileno='$mobileno' WHERE Id=$id") or die("Error Occured");

            if($edit_query){
              echo "<div class='message'>
              <p>Profile Updated!!</p>
              </div> <br>";
            
              echo "<a href='user.php'><button class='loginn-buttonn'>Done</button>";
            
            }

          }else{
            $id= $_SESSION['id'];
            $query= mysqli_query($conn, "SELECT*FROM users WHERE Id=$id");

            while($result= mysqli_fetch_assoc($query)){
              $res_Uname= $result['Username'];
              $res_Email= $result['Email'];
              $res_MobileNo= $result['Mobileno'];
            }
        ?>
        <div class="heading">Update Profile</div>
        <form action="" class="formm" name="myformm" id="myFormm" method="post">
          <input required="" class="input" type="text" name="username" id="text" placeholder="Name" value="<?php echo $res_Uname; ?>">
          <input required="" class="input" type="email" name="email" id="email" placeholder="E-mail" value="<?php echo $res_Email; ?>">
          <input required="" class="input" type="text" name="mobileno" id="text" placeholder="Mobile Number" value="<?php echo $res_MobileNo; ?>">
          <span id="fmmobileno"></span>
      <input class="login-button" type="submit" value="Update" id="bttnn" name="submit" required>
          
        </form>
    </div>
    <?php } ?>
    </div>
</center>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>


</body>
</html>