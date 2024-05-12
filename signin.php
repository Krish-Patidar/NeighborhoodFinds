<?php
session_start();

  include 'php/config.php';

  if(isset($_POST['submit'])){
    $email= mysqli_real_escape_string($conn,$_POST['email']);
    $password= mysqli_real_escape_string($conn,$_POST['password']);

    $select= mysqli_query($conn, "SELECT * FROM users WHERE Email='$email' AND Password='$password'") or die("Select Error");

    if(mysqli_num_rows($select)>0){
      $row= mysqli_fetch_assoc($select);
      $_SESSION['valid']=$row['Email'];
      $_SESSION['username']=$row['Username'];
      $_SESSION['mobileno']=$row['Mobileno'];
      $_SESSION['id']=$row['Id'];
           header('location:user.php');
    }else{
      $message[] = "Wrong Username or Password";
    }
  }
  ?>

   

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NeighborhoodFinds.com</title>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="icon" href="./Front-end Images/Neighboorhood 2.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@460&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&family=Tourney:wght@200&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
  <link href="https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css">



  <style>
      /* sigin */


  
  html {
    font-size: 62.5%;

  }

  @media screen and (max-width:1136px) {
    html{
      font-size: 60%;
    }
  }

  @media screen and (max-width:1094px) {
    html{
      font-size: 56%;

      .headd{
        font-size: 2.6rem;
      }
    }
  }

  @media screen and (max-width:1026px) {
    html{
      font-size: 52%;

      .headd{
        font-size: 2.6rem;
      }
    }
  }

  @media screen and (max-width:992px) {
    html{

      .btn{
        border: none;
      }

    }
  }

  @media screen and (max-width:842px) {
    html{
      font-size: 60%;

      .headd{
        font-size: 2rem;
      }
      .btn{
        border: none;
      }
    }
  }


  @media screen and (max-width:768px) {
    html{
      font-size: 60%;

      .headd{
        font-size: 1.8rem;
      }
      .btn{
        border: none;
      }

      .foot{
        margin-left: 4rem;
      }
    }
  }

  @media screen and (max-width:674px) {
    html{
      font-size: 56%;

      .headd{
        font-size: 1.8rem;
      }
      .btn{
        border: none;
      }

      .foot{
        margin-left: 4rem;
      }
    }
  }


  @media screen and (max-width:576px) {
    html{
      font-size: 54%;

      .headd{
        font-size: 1.4rem;
      }
      .btn{
        border: none;
      }

      .foot{
        margin-left: 4rem;
      }

      .foor{
        margin-left: 6rem;
        margin-top: 2rem;
      }
    }
  }

  @media screen and (max-width:370px) {
    html{
      font-size: 52%;
    }
  }

  @media screen and (max-width:330px) {
    html{
      font-size: 50%;
    }
  }


  .headd{
  font-size: 3rem;
   color: white;
  font-weight: bold;
  text-align: center;
  margin-top: 2.2rem
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
color: rgb(17, 16, 16);
}

.form {
margin-top: 2rem;
}

.form .input {
width: 100%;
background: white;
border: none;
padding: 1.5rem 2rem;
border-radius: 20px;
margin-top: 1.5rem;
box-shadow: #cff0ff 0rem 1rem 1rem -.5rem;
border-inline: .2rem solid transparent;
}

.form .input::-moz-placeholder {
  color: rgb(159, 158, 158);
}

.form .input::placeholder {
  color: rgb(154, 153, 153);
}

.form .input:focus {
outline: none;
border-inline: .2rem solid rgb(28, 27, 27);
}

.form .forgot-password {
display: block;
margin-top: 1rem;
margin-left: 1rem;
}

.form .forgot-password a {
font-size: 1.1rem;
color: rgb(17, 16, 16);
text-decoration: none;
}

.form .login-button {
display: block;
width: 100%;
font-weight: bold;
background: linear-gradient(45deg, rgb(17, 16, 16) 0%, rgb(19, 17, 17) 100%);
color: white;
padding-block: 1.5rem;
margin: 2rem auto;
border-radius: 20px;
box-shadow: rgba(133, 189, 215, 0.8784313725) 0rem 2rem 1rem -1.5rem;
border: none;
transition: all 0.2s ease-in-out;
}

.form .login-button:hover {
transform: scale(1.03);
box-shadow: rgba(48, 50, 51, 0.878) 0rem 2.3rem 1rem -2rem;
}

.form .login-button:active {
transform: scale(0.95);
box-shadow: rgba(61, 63, 64, 0.878) 0rem 1.5rem 1rem -1rem;
}


.social-account-container {
margin-top: 2.5rem;
}

.social-account-container .title {
display: block;
text-align: center;
font-size: 1rem;
color: rgb(170, 170, 170);
}

.social-account-container .social-accounts {
width: 100%;
display: flex;
justify-content: center;
gap: 1.5rem;
margin-top: .5rem;
}

.social-account-container .social-accounts .social-button {
background: linear-gradient(45deg, rgb(0, 0, 0) 0%, rgb(112, 112, 112) 100%);
border: .5rem solid white;
padding: .5rem;
border-radius: 50%;
width: 4rem;
aspect-ratio: 1;
display: grid;
place-content: center;
box-shadow: rgba(133, 189, 215, 0.8784313725) 0rem 1.2rem 1rem -.8rem;
transition: all 0.2s ease-in-out;
}

.social-account-container .social-accounts .social-button .svg {
fill: white;
margin: auto;
}

.social-account-container .social-accounts .social-button:hover {
transform: scale(1.2);
}

.social-account-container .social-accounts .social-button:active {
transform: scale(0.9);
}

.agreement {
display: block;
text-align: center;
margin-top: 1.5rem;
}

.agreement a {
text-decoration: none;
color: rgb(17, 16, 16);
font-size: 1.2rem;
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
      

/* Footer start */
.footer-dark {
    padding:5rem 0;
    color:#f0f9ff;
    background-color:#282d32;
  }
  
  .footer-dark h3 {
    margin-top:0;
    margin-bottom:1.2rem;
    font-weight:bold;
    font-size:1.6rem;
  }
  
  .footer-dark ul {
    padding:0;
    list-style:none;
    line-height:1.6;
    font-size:1.4rem;
    margin-bottom:0;
  }
  
  .footer-dark ul a {
    color:inherit;
    text-decoration:none;
    opacity:0.7;
  }
  
  .footer-dark ul a:hover {
    opacity:0.9;
  }
  .footer-dark .item.text {
    margin-bottom:2rem;
  }
  .footer-dark .item.text p {
    opacity:0.7;
    margin-bottom:0;
  }
  
  .footer-dark .copyright {
    text-align:center;
    padding-top:2.4rem;
    opacity:1;
    font-size:1.3rem;
    margin-bottom:0;
  }
  
  
  .dk-footer-box-info .footer-social-link h3 {
      color: #fff;
      font-size: 2.4rem;
      margin-bottom: 2.5rem; 
    }
    .dk-footer-box-info .footer-social-link ul {
      list-style-type: none;
      padding: 0;
      margin: 0; }
    .dk-footer-box-info .footer-social-link li {
      display: inline-block; }
    .dk-footer-box-info .footer-social-link a i {
      display: block;
      width: 4rem;
      height: 4rem;
      border-radius: 50%;
      text-align: center;
      line-height: 4rem;
      background: #000;
      margin-right: .5rem;
      color: #fff; }
      .dk-footer-box-info .footer-social-link a i.fa-facebook {
        background-color: #3B5998; }
      .dk-footer-box-info .footer-social-link a i.fa-twitter {
        background-color: #55ACEE; }
      .dk-footer-box-info .footer-social-link a i.fa-google-plus {
        background-color: #DD4B39; }
      .dk-footer-box-info .footer-social-link a i.fa-linkedin {
        background-color: #0976B4; }
      .dk-footer-box-info .footer-social-link a i.fa-instagram {
        background-color: #B7242A; }
  
  .footer{
    left: 0;
    bottom: 0;
    width: 100%;
  }
  
  .foop{
    font-size: 1.5rem;
  }
  /* Footer end */

  
  .message{
    text-align:center;
    background:#f9eded;
    font-size:1.5rem;
    font-weight:500;
    padding:1.5rem 0;
    border:.1rem solid #699053;
    border-radius:0.5rem;
    margin-bottom:1rem;
    color:red;
    cursor: pointer;
  }

  
  </style>

</head>

<body class="bg">
  <!-- Navbaar start -->
  <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="./Front-end Images/Neighbourhood 1.png" width="65" height="35" class="d-inline-block align-top" alt="">
      &nbsp;&nbsp;<span class="te">NeighborhoodFinds</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="./index.php"><button type="button" class="btn btn-outline-dark" style="font-family: poppins;">Home</button>&nbsp;
            <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./Aboutus.php"><button type="button" class="btn btn-outline-dark" style="font-family: poppins;">About
              Us</button>&nbsp;
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./Services.php"><button type="button"
              class="btn btn-outline-dark" style="font-family: poppins;">Services</button>&nbsp;
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./offer.php"><button type="button" class="btn btn-outline-dark" style="font-family: poppins;">Offers</button>&nbsp;
            <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./Register.php"><button type="button"
              class="btn btn-outline-dark" style="font-family: poppins;">Registration</button>&nbsp;
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><button type="button" class="btn btn-outline-dark" style="font-family: poppins;">Sig In</button>&nbsp;
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./FAQ's.php"><button type="button" class="btn btn-outline-dark" style="font-family: poppins;">FAQ's</button>&nbsp;
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./Feedback.php"><button type="button" class="btn btn-outline-dark" style="font-family: poppins;">Feedback</button>&nbsp;
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Navbaar end -->

 
  <?php
    if(isset($message)){
      foreach($message as $message){
        echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
      }
    }
  ?>

  <!-- Intro start -->
  <center>
    <br><br>
    <h3 class="headd" style="font-family: poppins;"  data-aos="fade-in" data-aos-offset="100" data-aos-duration="900">Welcome Back! <br>"Sig In to Your Account or Sign Up to Explore Exclusive Features and Services."
    </h3><br>
  </center>
  <!-- Intro end -->

  <br>
  <!-- Login form start -->
<center>

    
    <div class="container">
    
      <header><div class="heading">Sig in</div></header>
        <form name="myform" action="" class="form" id="myForm" method="post">
          <input required="" class="input" type="email" name="email" id="email" placeholder="E-mail">
          <input required="" class="input" type="password" name="password" id="password" placeholder="Password">
          <span class="forgot-password"><a href="#">Forgot Password ?</a></span>
          <input class="login-button" id="bttn" type="submit" value="Sig in" name="submit" required>
          
        </form>
        <div class="social-account-container">
            <span class="title">Or Sig in with</span>
            <div class="social-accounts">
              <button class="social-button google">
                <svg class="svg" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 488 512">
                  <path d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path>
                </svg></button>
              <button class="social-button apple">
                <svg class="svg" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                  <path d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z"></path>
                </svg>
              </button>
              <button class="social-button twitter">
                <svg class="svg" xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                  <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"></path>
                </svg>
              </button>
            </div>
          </div>
          <span class="agreement"><a href="signup.php">Don't have an account?</a></span>
      </div>
  </div>
</center>

  
  
  <!-- Login form end -->


<br><br><br><br><br>


  <!-- Footer start -->
  <div class="footer-dark footer">
    <footer>
        <div class="containerr">
            <div class="row">
                <div class="col-sm-6 col-md-3 item fooh">
                  <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Useful Links</h3>
                    <ul>
                        <li><a href="./index.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home</a></li>
                        <li><a href="./About Us.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About Us</a></li>
                        <li><a href="./Services.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Services</a></li>
                        <li><a href="./offer.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Offer</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 item foor">
                    <h3>Useful Links</h3>
                    <ul>
                        <li><a href="./Register.php">Registration</a></li>
                        <li><a href="#">Sig in</a></li>
                        <li><a href="./FAQ's.php">FAQ's</a></li>
                        <li><a href="./adminn.php">Admin Login</a></li><br>

                    </ul>
                </div>
                <div class="col-md-6 item text foot">
                    <h3 style="font-size: 35px; font-family: Protest Riot, sans-serif;" class="footname">NeighborhoodFinds</h3>
                    <p class="foop" style="font-family: Fredoka, sans-serif;">At NeighborhoodFinds, we believe that the heart of any community lies in its local stores
                      and showrooms. We are thrilled to welcome you to a platform that makes exploring and finding your favorite stores
                      and items in your neighborhood easier than ever before.</p>
                </div>
                <div class="dk-footer-box-info">
                <div class="footer-social-link">
                  <h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Follow us</h3>
                  <ul>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <li>
                          <a href="#">
                              <i class="fa fa-facebook"></i>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <i class="fa fa-twitter"></i>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <i class="fa fa-google-plus"></i>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <i class="fa fa-linkedin"></i>
                          </a>
                      </li>
                      <li>
                          <a href="#">
                              <i class="fa fa-instagram"></i>
                          </a>
                      </li>
                  </ul>
              </div>
            </div>
          </div>
            <p class="copyright"> © 2024 Krish Patidar,NeighborhoodFinds Inc. All rights reserved. </p>
        </div>
    </footer>
</div>
  <!-- Footer end -->







  
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>
    <script src="./Project-1.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>



</body>


</html>