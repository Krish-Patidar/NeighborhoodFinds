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
    
/* signup */
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
  
      @media screen and (max-width:387px) {
    html{
      font-size: 52%;
    }
  }

  @media screen and (max-width:325px) {
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
    color: rgb(159, 158, 158);
  }
  
  .formm .input::placeholder {
    color: rgb(154, 153, 153);
  }
  
  .formm .input:focus {
    outline: none;
    border-inline: .2rem solid rgb(28, 27, 27);
  }
  
  .formm .forgot-password {
    display: block;
    margin-top: 1rem;
    margin-left: 1rem;
  }
  
  .formm .forgot-password a {
    font-size: 1.1rem;
    color: rgb(17, 16, 16);
    text-decoration: none;
  }
  
  .formm .login-button {
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
  
  .formm .login-button:hover {
    transform: scale(1.03);
    box-shadow: rgba(48, 50, 51, 0.878) 0rem 2.3rem 1rem -2rem;
  }
  
  .formm .login-button:active {
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
  
  .box{
      background: #fdfdfd;
      display: flex;
      flex-direction: column;
      padding: 2.5rem 2.5rem;
      border-radius: 2rem;
      box-sizing: 0 0 12.8rem 0 rgba(0,0,0,0.1),
                  0 3.2rem 6.4rem -4.8rem rgba(0,0,0,0.5);
  }
  
  
  .form-box header {
    font-size:2.5rem;
    font-weight:600;
    padding-bottom:1rem;
  
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
          <a class="nav-link" href="./signin.php"><button type="button" class="btn btn-outline-dark" style="font-family: poppins;">Sig In</button>&nbsp;
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

  <!-- Intro start -->
  <center>
    <br><br>
    <h3 class="headd" style="font-family: poppins;"  data-aos="fade-in" data-aos-offset="100" data-aos-duration="900">Welcome Back! <br>"Sign In to Your Account or Sign Up to Explore Exclusive Features and Services."
    </h3><br>
  </center>
  <!-- Intro end -->

  <br>
  <!-- Login form start -->
<center>


  <div class="container">
    <div class="box form-box">
      <?php
    include("php/config.php");
    if(isset($_POST['submit'])){
      $username= $_POST['username'];
      $email= $_POST['email'];
      $mobileno= $_POST['mobileno'];
      $password= $_POST['password'];
    


    // <!-- verifying the unique email -->
$verify_query= mysqli_query($conn,"SELECT Email FROM users WHERE Email='$email'");

if(mysqli_num_rows($verify_query)!=0){
  echo "<div class='message'>
    <p>This email is used, try another one please!</p>
    </div> <br>";

    echo "<a href='javascript:self.history.back()'><button class='loginn-buttonn'>Go Back</button>";
}

else{
  mysqli_query($conn, "INSERT INTO users(Username,Email,Mobileno,Password) VALUES ('$username','$email','$mobileno','$password')") or die("Error Occured");
  echo "<div class='message'>
  <p>Sign Up Successfull!</p>
  </div> <br>";

  echo "<a href='signin.php'><button class='loginn-buttonn'>SignIn Now</button>";

}
    }
else{

?>



   <header><div class="heading">Sign up</div></header>
    <form action="" class="formm" name="myformm" id="myFormm" method="post">
      <input required="" class="input" type="text" name="username" id="text" placeholder="Name">
      <input required="" class="input" type="email" name="email" id="email" placeholder="E-mail">
      <input required="" class="input" type="text" id="mobileno" placeholder="Mobile Number" name="mobileno">
      <span id="fmmobileno"></span>
      <input required="" class="input" type="password" name="password" id="password" placeholder="Password">


      <input class="login-button" type="submit" value="Sign up" id="bttnn" name="submit">
      
    </form>
   
      <span class="agreement"><a href="signin.php">Already have an account?</a></span>
      </div>

      <?php } ?>
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
                        <li><a href="./signin.php">Sig in</a></li>
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