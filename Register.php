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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
  <link rel="stylesheet" href="./Project-1.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@460&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&family=Tourney:wght@200&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css">

  <style>
    html {
      font-size: 62.5%;

    }

    @media screen and (max-width:1136px) {
      html {
        font-size: 60%;
      }
    }

    @media screen and (max-width:1094px) {
      html {
        font-size: 57%;
      }
    }

    @media screen and (max-width:1043px) {
      html {
        font-size: 55%;
      }
    }

    @media screen and (max-width:1009px) {
      html {
        font-size: 50%;
      }
    }

    @media screen and (max-width:641px) {
      html {
        font-size: 45%;

        .btn {
          border: none;
        }
        
      }
    }

    @media screen and (max-width:584) {
      html {
        font-size: 40%;

        .btn {
          border: none;
        }
      }
    }

    @media screen and (max-width:558px) {
      html {
        font-size: 35%;

        .btn {
          border: none;
        }

        .fo{
          margin-left: 2rem;
        }
      }
    }

    @media screen and (max-width:443px) {
      html {
        font-size: 45%;

        .btn {
          border: none;
        }

        .fo{
          margin-left: 2rem;
        }
        .form {
          display: flex;
          flex-direction: column;
          gap: 1rem;
          max-width: 40rem;
          background-color: #ffffff;
          padding: 2rem;
          border-radius: 2rem;
          position: relative;
        }

        .te {
          font-size: 4rem;
        }

        .title {
          font-size: 2.8rem;
          color: black;
          font-weight: 600;
          letter-spacing: -.1rem;
          position: relative;
          display: flex;
          align-items: center;
          padding-left: 3rem;
        }

        .title::before,
        .title::after {
          position: absolute;
          content: "";
          height: 1.6rem;
          width: 1.6rem;
          border-radius: 50%;
          left: 0px;
          background-color: black;
        }

        .title::before {
          width: 1.8rem;
          height: 1.8rem;
          background-color: black;
        }

        .title::after {
          width: 1.8rem;
          height: 1.8rem;
          animation: pulse 1s linear infinite;
        }

        .message,
        .signin {
          color: rgba(88, 87, 87, 0.822);
          font-size: 2rem;
        }

        .signin {
          text-align: center;
        }

        .signin a {
          color: black;
        }

        .signin a:hover {
          text-decoration: underline black;
        }

        .flex {
          display: flex;
          width: 100%;
          gap: .6rem;
        }

        .form label {
          position: relative;
        }

        .form label .input {
          width: 35rem;
          padding: 1rem 1rem 2rem 1rem;
          outline: 0;
          border: 1px solid rgba(105, 105, 105, 0.397);
          border-radius: 1rem;
        }

        .form label .input+span {
          position: absolute;
          left: 1rem;
          top: 1.5rem;
          color: grey;
          font-size: 3rem;
          cursor: text;
          transition: 0.3s ease;
        }

        .form label .input:placeholder-shown+span {
          top: 1.5rem;
          font-size: 1.1rem;
        }

        .form label .input:focus+span,
        .form label .input:valid+span {
          top: 0px;
          font-size: 1rem;
          font-weight: 600;
        }

        .form label .input:valid+span {
          color: green;
        }

        .submit {
          border: none;
          outline: none;
          background-color: rgba(3, 3, 3, 0.905);
          padding: 1rem;
          border-radius: 1rem;
          color: #fff;
          font-size: 1.6rem;
          transform: .3s ease;
        }

        .submit:hover {
          background-color: black;
          cursor: pointer;
        }

        .title {
          color: black;
        }

        .containerr {
          margin: 0;
          height: 50rem;
          width: 40rem;
        }

        .head {
          font-size: 2rem;
        }

        @keyframes pulse {
          from {
            transform: scale(0.9);
            opacity: 1;
          }

          to {
            transform: scale(1.8);
            opacity: 0;
          }
        }


      }
    }

    @media screen and (max-width:429px) {
      html{
        font-size: 40%;
      }

    }
    @media screen and (max-width:369px) {
      html {
        font-size: 39%;

        .btn {
          border: none;
        }

        .footer-dark {
          /* padding: 19rem 0; */
          color: #f0f9ff;
          background-color: #282d32;
        }
        .form{
          margin-bottom: 4rem;
        }

        .fo{
          margin-left: 2rem;
          margin-bottom: 2rem;
        }
        .head{
          font-size: 3rem;
          margin-bottom: 8rem;
        }


      }
    }

    @media screen and (max-width:337px) {
      html{
        font-size: 37%;
      }
    }
   

    @media screen and (max-width:326px) {
      html{
        font-size: 35%;
      }
    }

  






    .form {
      display: flex;
      flex-direction: column;
      gap: 1rem;
      max-width: 40rem;
      background-color: #ffffff;
      padding: 2rem;
      border-radius: 2rem;
      position: relative;
    }

    .title {
      font-size: 2.8rem;
      color: black;
      font-weight: 600;
      letter-spacing: -.1rem;
      position: relative;
      display: flex;
      align-items: center;
      padding-left: 1rem;
    }

    .title::before,
    .title::after {
      position: absolute;
      content: "";
      height: 1.6rem;
      width: 1.6rem;
      border-radius: 50%;
      left: 0px;
      background-color: black;
    }

    .title::before {
      width: 1.8rem;
      height: 1.8rem;
      background-color: black;
    }

    .title::after {
      width: 1.8rem;
      height: 1.8rem;
      animation: pulse 1s linear infinite;
    }

    .message,
    .signin {
      color: rgba(88, 87, 87, 0.822);
      font-size: 2rem;
    }

    .signin {
      text-align: center;
    }

    .signin a {
      color: black;
    }

    .signin a:hover {
      text-decoration: underline black;
    }

    .flex {
      display: flex;
      width: 100%;
      gap: .6rem;
    }

    .form label {
      position: relative;
    }

    .form label .input {
      width: 35rem;
      padding: 1rem 1rem 2rem 1rem;
      outline: 0;
      border: 1px solid rgba(105, 105, 105, 0.397);
      border-radius: 1rem;
    }

    .form label .input+span {
      position: absolute;
      left: 1rem;
      top: 1.5rem;
      color: grey;
      font-size: 3rem;
      cursor: text;
      transition: 0.3s ease;
    }

    .form label .input:placeholder-shown+span {
      top: 1.5rem;
      font-size: 1.1rem;
    }

    .form label .input:focus+span,
    .form label .input:valid+span {
      top: 0px;
      font-size: 1rem;
      font-weight: 600;
    }

    .form label .input:valid+span {
      color: green;
    }

    .submit {
      border: none;
      outline: none;
      background-color: rgba(3, 3, 3, 0.905);
      padding: 1rem;
      border-radius: 1rem;
      color: #fff;
      font-size: 1.6rem;
      transform: .3s ease;
    }

    .submit:hover {
      background-color: black;
      cursor: pointer;
    }

    .title {
      color: black;
    }

    .containerr {
      margin: 0;
      height: 50rem;
      width: 40rem;
    }

    .head {
      font-size: 2rem;
    }

    @keyframes pulse {
      from {
        transform: scale(0.9);
        opacity: 1;
      }

      to {
        transform: scale(1.8);
        opacity: 0;
      }
    }

    /* Modal start */
    .image {
      display: flex;
      margin-left: auto;
      margin-right: auto;
      margin-bottom: 8px;
      background-color: #e2feee;
      flex-shrink: 0;
      justify-content: center;
      align-items: center;
      width: 3rem;
      height: 3rem;
      border-radius: 9999px;
      animation: animate .6s linear alternate-reverse infinite;
      transition: .6s ease;
    }

    .image svg {
      color: #0afa2a;
      width: 2rem;
      height: 2rem;
    }

    .title {
      font-size: 1.8rem;
      font-weight: 500;
      text-align: center;
      justify-content: center;
      margin-bottom: .4rem;
    }

    .actions {
      margin: 0.75rem 1rem;
    }

    .history {
      display: inline-flex;
      padding: 0.5rem 1rem;
      background-color: #1aa06d;
      color: #ffffff;
      font-size: 1rem;
      line-height: 1.5rem;
      font-weight: 500;
      justify-content: center;
      width: 100%;
      border-radius: 1rem;
      border: none;
      box-shadow: 0 .1rem .2rem 0 rgba(0, 0, 0, 0.05);
    }

    .history:hover {
      background-color: #159161;
      border-radius: 1.2rem;
    }

    .modal-content {
      border-radius: 4rem;
      width: 480rem;
      height: 41rem;
      margin-left: 4rem;
    }

    .modal-backdrop {
      position: inherit;
    }

    .modal-contentt {
      position: relative;
      display: flex;
      width: 100%;
      pointer-events: auto;
      background-clip: padding-box;
      border-radius: 2rem;
      box-shadow: 0 .1rem .2rem 0 rgba(0, 0, 0, 0.05);
      background-color: #fff;
    }

    .modal-bodyy {
      position: relative;
      flex: 1 1 auto;
      padding: 1rem;
    }

    .historyy {
      display: inline-flex;
      padding: 0.5rem 1rem;
      background-color: #1aa06d;
      color: #ffffff;
      font-size: 1rem;
      line-height: 1.5rem;
      font-weight: 500;
      justify-content: center;
      width: 100%;
      border-radius: 1rem;
      border: none;
      box-shadow: 0 .1rem .2rem 0 rgba(0, 0, 0, 0.05);
    }

    .historyy:hover {
      background-color: #159161;
      border-radius: 1.2rem;
    }

    .titlee {
      font-size: 1.8rem;
      font-weight: 500;
      text-align: center;
      color: rgb(0, 0, 0);
      justify-content: center;
      margin-bottom: .4rem;
    }

    /* Modal end */
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
          <a class="nav-link" href="./index.php"><button type="button" class="btn btn-outline-dark"
              style="font-family: poppins;">Home</button>&nbsp;
            <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./Aboutus.php"><button type="button" class="btn btn-outline-dark"
              style="font-family: poppins;">About
              Us</button>&nbsp;
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./Services.php"><button type="button" class="btn btn-outline-dark"
              style="font-family: poppins;">Services</button>&nbsp;
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./offer.php"><button type="button" class="btn btn-outline-dark"
              style="font-family: poppins;">Offers</button>&nbsp;
            <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><button type="button" class="btn btn-outline-dark"
              style="font-family: poppins;">Registration</button>&nbsp;
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./signin.php"><button type="button" class="btn btn-outline-dark" style="font-family: poppins;">Sig In</button>&nbsp;
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./FAQ's.php"><button type="button" class="btn btn-outline-dark"
              style="font-family: poppins;">FAQ's</button>&nbsp;
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./Feedback.php"><button type="button" class="btn btn-outline-dark"
              style="font-family: poppins;">Feedback</button>&nbsp;
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Navbaar end -->

  <!-- Intro start -->
  <center>
    <br><br>
    <h3 class="head" style="font-family: poppins;"  data-aos="fade-in" data-aos-offset="100" data-aos-duration="900">"Unlock Business Growth: Register Your Showroom Today for Exclusive
      Benefits and Amplified Visibility!"
    </h3><br>
  </center>
  <!-- Intro end -->

  <br><br>

  <!-- Registration start -->
  <center>
    <form class="form" name="myform" id="myFormm" name="myform" method="post" onsubmit="return Validationn()">
      <p class="title">Register </p>
      <label>
        <input class="input name" id="name" name="name" type="text" placeholder="" required="">
        <span>Firstname</span>
        <span id="fname"></span>
      </label>

      <label>
        <input class="input" type="text" placeholder="" required="">
        <span>Lastname</span>
      </label>

      <label>
        <input class="input" type="text" placeholder="" required="">
        <span>Showroom's Name</span>
      </label>

      <label>
        <input class="input" type="text" placeholder="" required="">
        <span>Showroom's registration Number</span>
      </label>

      <label>
        <input class="input" type="email" placeholder="" required="">
        <span>Email</span>
      </label>

      <label>
        <input class="input" type="text" placeholder="" required="">
        <span>Phone Number</span>
      </label>

      <label>
        <input class="input" type="text" placeholder="" required="">
        <span>Business Type</span>
      </label>

      <label>
        <input class="input" type="text" placeholder="" required="">
        <span>Showroom Address</span>
      </label>

      <label>
        <input class="input" type="text" placeholder="" required="">
        <span>Showroom City</span>
      </label>

      <label>
        <input class="input" type="text" placeholder="" required="">
        <span>Pincode</span>
      </label>

      <input class="submit" type="submit" onclick="Validationn()">
    </form>
  </center>

  <!-- Modal -->
  <div class="modal fade" id="myModall" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <div class="modal-body">

          <div class="containerr">
            <div class="header">
              <div class="image">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <g stroke-width="0" id="SVGRepo_bgCarrier"></g>
                  <g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g>
                  <g id="SVGRepo_iconCarrier">
                    <path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" stroke="#000000"
                      d="M20 7L9.00004 18L3.99994 13"></path>
                  </g>
                </svg>
              </div>
              <div class="content">
                <center><span class="titlee">Your Application For Register Your Showroom In NeighbourhoodFinds is
                    Successfully Sent. <br>
                    After Verification of your Showroom is actually exist, You get a link on your registerd E-mail
                    Address within 48 Hours you will have too take Monthly or Yearly Subscription through that link
                    after Successfully Payment within 24 Hours your Showroom is Registerd on NeighborhoodFinds.</span>
                </center>
              </div>
              <div class="actions">
                <a href="./index.html"><button type="button" class="history">Done</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>

  <!-- Registration end -->


  <br><br><br>


  <!-- Footer start -->
  <div class="footer-dark footer">
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-3 item">
            <h3>Useful Links</h3>
            <ul>
              <li><a href="./index.php">Home</a></li>
              <li><a href="./Aboutus.php">About Us</a></li>
              <li><a href="./Services.php">Services</a></li>
              <li><a href="./offer.php">Offer</a></li>
            </ul>
          </div>
          <div class="col-sm-6 col-md-3 item">
            <h3>Useful Links</h3>
            <ul>
              <li><a href="./Register.php">Registration</a></li>
              <li><a href="./signin.php">Sig In</a></li>
              <li><a href="./FAQ's.php">FAQ's</a></li>
              <li><a href="./adminn.php">Admin Login</a></li><br>

            </ul>
          </div>
          <div class="col-md-6 item text">
            <h3 style="font-size: 35px; font-family: Protest Riot, sans-serif;" class="foow">NeighborhoodFinds</h3>
            <p class="foop" style="font-family: Fredoka, sans-serif;">At NeighborhoodFinds, we believe that the heart of
              any community lies in its local stores
              and showrooms. We are thrilled to welcome you to a platform that makes exploring and finding your favorite
              stores
              and items in your neighborhood easier than ever before.</p>
          </div>
          <div class="dk-footer-box-info fo">
            <div class="footer-social-link">
              <h3>Follow us</h3>
              <ul>
                <li>
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