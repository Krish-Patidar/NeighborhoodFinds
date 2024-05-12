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
  <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@460&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css">

  <style>
    /* Feedback display start */

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
        font-size: 57%;
      }
    }
    @media screen and (max-width:1043px) {
      html{
        font-size: 55%;
      }
    }
    @media screen and (max-width:1009px) {
      html{
        font-size: 52%;
      }
    }
    @media screen and (max-width:994px) {
      html{
        font-size: 52%;

        .btn{
          border: none;
        }
      }
    }

    @media screen and (max-width:576px) {
      html{
        font-size: 50%;

        .btn{
          border: none;
        }

        .fo{
          margin-left: 2rem;
        }
      }
    }







    * {
      margin: 0px;
      padding: 0px;
      box-sizing: border-box;
    }

    a {
      text-decoration: none;
    }

    #testimonials {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      width: 100%;
    }

    .testimonial-heading {
      letter-spacing: .1rem;
      margin: 3rem 0px;
      padding: 1rem 2rem;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .testimonial-heading h1 {
      font-size: 2.9rem;
      font-weight: 500;
      background-color: #202020;
      color: #ffffff;
      padding: 1rem 2rem;
    }

    .testimonial-heading span {
      font-size: 2.3rem;
      color: #ffffff;
      margin-bottom: 1rem;
      letter-spacing: 2rem;
      text-transform: uppercase;
    }

    .testimonial-box-container {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      width: 100%;
    }

    .testimonial-box {
      width: 50rem;
      box-shadow: .2rem .2rem 3rem #0976B4;
      background-color: #ffffff;
      padding: 2rem;
      margin: 1.5rem;
      cursor: pointer;
    }

    .profile-img {
      width: 6rem;
      height: 6rem;
      border-radius: 50%;
      overflow: hidden;
      margin-right: 1.4rem;
    }

    .profile-img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: center;
    }

    .profile {
      display: flex;
      align-items: center;
    }

    .name-user {
      display: flex;
      flex-direction: column;
    }

    .name-user strong {
      color: #3d3d3d;
      font-size: 1.4rem;
      letter-spacing: 0.5px;
    }

    .name-user span {
      color: #979797;
      font-size: 1.2rem;
    }

    .reviews {
      color: #f9d71c;
    }

    .box-top {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 2rem;
    }

    .client-comment p {
      font-size: 1rem;
      color: #4b4b4b;
    }

    .client-comment {
      font-family: "Fredoka", sans-serif;
      font-size: 1.4rem;
    }

    .testimonial-box:hover {
      transform: translateY(-10px);
      transition: all ease 0.3s;
    }

    /* @media (max-width:1060px) {
      .testimonial-box {
        width: 35%;
        padding: 1rem;
      }
    }

    @media (max-width:790px) {
      .testimonial-box {
        width: 100%;
      }

      .testimonial-heading h1 {
        font-size: 1.4rem;
      }
    }

    @media (max-width:340px) {
      .box-top {
        flex-wrap: wrap;
        margin-bottom: 1rem;
      }

      .reviews {
        margin-top: 1rem;
      }
    } */

    /* Feedback display end */

    /* User feedback start */
    .boddy{
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .wrapperr{
      background: var(--white);
      padding: 2rem;
      max-width: 57.6rem;
      width: 100%;
      border-radius: .75rem;
      box-shadow: var(--shadow);
      text-align: center;
    }

    .wrapperr h3{
      font-size: 2rem;
      font-weight: 600;
      margin-bottom: 1rem;
    }

    .rating{
      display: flex;
      justify-content: center;
      align-items: center;
      grid-gap: .5rem;
      font-size: 3rem;
      color: var(--yellow);
      margin-bottom: 2rem;
    }

    .rating .star{
      cursor: pointer;
    }

    .rating .star:active{
      opacity: 0;
      animation: animate .5s ease-in-out forwards;
    }

    @keyframes animate {
      0%{
        opacity: 0;
        transform: scale(1);
      }
      50%{
        opacity: 1;
        transform: scale(1.2);
      }
      100%{
        opacity: 1;
        transform: scale(1);
      }
    }

    .rating .star:hover{
      transform: scale(1.1);
    }

    textarea{
      width: 100%;
      background: #e2e0e092;
      padding: 1rem;
      border-radius: .5rem;
      border: none;
      outline: none;
      resize: none;
      margin-bottom: .5rem;
    }

    .btn-group{
      display: flex;
      grid-gap: .5rem;
      align-items: center;
    }

    .btn-group .btn{
      padding: .75rem 1rem;
      border-radius: .5rem;
      border: none;
      outline: none;
      cursor: pointer;
    }

    .btn-group .btn.submit{
      background: rgb(56, 94, 198);
      color: var(--white);
    }

    .btn-group .btn.submit:hover{
      background: rgb(42, 78, 176);
    }

    .btn-group .btn.cancel{
      background: var(--white);
      color: var(--blue);
    }

    .btn-group .btn.cancel:hover{
      background: var(--light);
    }

    .btn-primary{
      background-color:rgb(56, 94, 198);
      border-radius: 10px;
    }
    .btn-primary:hover{
      background-color:rgb(42, 78, 176);
    }

    /* User feedback end */

   /* Modal start */
.image {
      display: flex;
      margin-left: auto;
      margin-right: auto;
      margin-bottom: .8rem;
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
      box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
    }

    .history:hover {
      background-color: #159161;
      border-radius: 1.2rem;
    }
    
    .modal-content{
      border-radius: 4rem;
      width: 480rem;
      height: 22rem;
      margin-left: 4rem;
    }
   .modal-backdrop{
    position: inherit;
    }
    .modal-contentt{
      position: relative;
      display: flex;
      width: 100%;
      pointer-events: auto;
      background-clip: padding-box;
      border-radius: 2rem;
      box-shadow: 0  .1rem .2rem 0 rgba(0, 0, 0, 0.05);
      background-color: #fff;
    }
    .modal-bodyy{
      position: relative;
      flex: 1 1 auto;
      padding: 1rem;
      margin-bottom: 0rem;
    }
    .historyy{
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
    .titlee{
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
          <a class="nav-link" href="./Register.php"><button type="button" class="btn btn-outline-dark"
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
          <a class="nav-link" href="#"><button type="button" class="btn btn-outline-dark"
              style="font-family: poppins;">Feedback</button>&nbsp;
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Navbaar end -->


  <!-- Feedback display start -->

  <section id="testimonials">
    <div class="testimonial-heading">
      <span style="font-family: poppins;"  data-aos="fade-in" data-aos-offset="100" data-aos-duration="900">Comments</span>
      <h1 style="font-family: poppins;"  data-aos="fade-in" data-aos-offset="100" data-aos-duration="900">Clients Says</h1>
    </div>
    <div class="testimonial-box-container">
      <!-- Box 1 start -->
      <div class="testimonial-box" data-aos="fade-up" data-aos-offset="50" data-aos-duration="900">
        <div class="box-top">
          <div class="profile">
            <div class="profile-img">
              <img src="./Front-end Images/bike card.jpg">
            </div>
            <div class="name-user">
              <strong>Aarav Patidar</strong>
              <span>@aravpa265</span>
            </div>
          </div>
          <div class="reviews">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        </div>
        <div class="client-comment">
          "I love how easy it is to check showroom availability on this website. It's saved so much time to find out if
          a product is in stock. The ordering process is seamless too, making it convenient to get what I need quickly.
          Highly recommended!"
        </div>
      </div>
      <!-- Box 1 end -->
      <!-- Box 2 start -->
      <div class="testimonial-box" data-aos="fade-up" data-aos-offset="50" data-aos-duration="900">
        <div class="box-top">
          <div class="profile">
            <div class="profile-img">
              <img src="./Front-end Images/jewellery showroom.webp"">
                      </div>
                      <div class=" name-user">
              <strong>Aditi Sharma</strong>
              <span>@sharmaaditi56</span>
            </div>
          </div>
          <div class="reviews">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
        <div class="client-comment">
          "This website has been a a game-changer for me. Being able to see if a product is available in a showroom
          nearby saves me so much time. Plus, the option to order online if it's not in stock is fantastic. It's
          user-friendly and reliable. Two thumbs up!"
        </div>
      </div>
      <!-- Box 2 end -->

      <!-- Box 3 start -->
      <div class="testimonial-box" data-aos="fade-up" data-aos-offset="50" data-aos-duration="900">
        <div class="box-top">
          <div class="profile">
            <div class="profile-img">
              <img src="./Front-end Images/bmw offer card.jpg">
            </div>
            <div class="name-user">
              <strong>Ankit Kumar</strong>
              <span>@ankit01</span>
            </div>
          </div>
          <div class="reviews">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        </div>
        <div class="client-comment">
          "I can't express enough how helpful this website is. Knowing whether a product is available in a showroom
          before I go is incedibly convenient. And if it's not there, ordering online is breeze. The interface is
          intuitive making the whole experience enjoyable."
        </div>
      </div>

      <!-- Box 3 end -->
      <!-- Box 4 start -->
      <div class="testimonial-box" data-aos="fade-up" data-aos-offset="50" data-aos-duration="900">
        <div class="box-top">
          <div class="profile">
            <div class="profile-img">
              <img src="./Front-end Images/clothing showroom.jpg">
            </div>
            <div class="name-user">
              <strong>Priya Gupta</strong>
              <span>@priyaaa83</span>
            </div>
          </div>
          <div class="reviews">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
        <div class="client-comment">
          "I rely on this website whenever I need to purchase something. The showroom availability feature is a
          lifesaver, and being able to order online if necessary is fantastic but there is one drawback here that the
          website contain only Indore city showrooms data. But overall it is fantastic."
        </div>
      </div>

      <!-- Box 4 end -->

      <!-- Box 5 start -->
      <div class="testimonial-box" data-aos="fade-up" data-aos-offset="50" data-aos-duration="900">
        <div class="box-top">
          <div class="profile">
            <div class="profile-img">
              <img src="./Front-end Images/bike slide.jpg">
            </div>
            <div class="name-user">
              <strong>Vikram Yadav</strong>
              <span>@yadavviki09</span>
            </div>
          </div>
          <div class="reviews">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
        <div class="client-comment">
          "This website has simplified my shopping experience immensely. I no longer have to guess whether a product is
          in stock at a showroom. The option to order online is brilliant. The website is user-friendly, and the
          information is always almost accurate. Highly recommend it!"
        </div>
      </div>
      <!-- Box 5 end -->
      <!-- Box 6 start -->
      <div class="testimonial-box" data-aos="fade-up" data-aos-offset="50" data-aos-duration="900">
        <div class="box-top">
          <div class="profile">
            <div class="profile-img">
              <img src="./Front-end Images/apple offer.jpg">
            </div>
            <div class="name-user">
              <strong>Rohan Kohli</strong>
              <span>@rohanko548</span>
            </div>
          </div>
          <div class="reviews">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
        <div class="client-comment">
          "I can't imagine shopping without this website now. The ability to check showroom availability saves me so
          much time and effort. Ordering onilne is seamless too but when you order something it cuts a convenient fess
          for delivery charges. Overall, a fantastic experience every time."
        </div>
      </div>
      <!-- Box 6 end -->

      <!-- Box 7 start -->
      <div class="testimonial-box" data-aos="fade-up" data-aos-offset="50" data-aos-duration="900">
        <div class="box-top">
          <div class="profile">
            <div class="profile-img">
              <img src="./Front-end Images/jewellery offer.webp">
            </div>
            <div class="name-user">
              <strong>Neha Malhotra</strong>
              <span>@itsneha83</span>
            </div>
          </div>
          <div class="reviews">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        </div>
        <div class="client-comment">
          "I'm so impressed with this website. It's incredibly convenient to check showroom availability before heading
          out. The option to order online is the cherry on top. The website is well-designed, making it easy to find
          what I need quickly. I wouldn't shop anywhere else!"
        </div>
      </div>

      <!-- Box 7 end -->
      <!-- Box 8 start -->
      <div class="testimonial-box" data-aos="fade-up" data-aos-offset="50" data-aos-duration="900">
        <div class="box-top">
          <div class="profile">
            <div class="profile-img">
              <img src="./Front-end Images/neclace card.jpg">
            </div>
            <div class="name-user">
              <strong>Ananya Kapoor</strong>
              <span>@ananyaa380</span>
            </div>
          </div>
          <div class="reviews">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
        </div>
        <div class="client-comment">
          "I've been using this website for all my purchases lately, and it's been fantastic. The showroom availability
          feature is incredibly helpful, and ordering onilne is a breeze. The website is well-designed and reliable. I
          highly recommend it to anyone looking for a hassle-free shopping experience."
        </div>
      </div>

      <!-- Box 8 end -->

    </div>
  </section>

  <!-- Feedback display end -->


  <br><br>

  <!-- User feedback start -->
<center>
  <button type="button" class="btn btn-primary btn-lg feedback_btn" onclick="toggleFeedbackForm()">Send Feedback</button>
</center>
<br><br>
<center>
  <div id="feedbackForm" class="boddy" style="display: none;">
    <div class="wrapperr">
      <h3>Feedback Form</h3>
      <form class="form" id="myFormm" name="rform" method="post" onsubmit="return Validationn()">
        <div class="rating">
          <input type="number" name="rating" hidden>
          <i class='bx bx-star star'></i>
          <i class='bx bx-star star'></i>
          <i class='bx bx-star star'></i>
          <i class='bx bx-star star'></i>
          <i class='bx bx-star star'></i>
        </div>
       <center> <textarea name="opinion" cols="50" rows="5" placeholder="Your Opinion..."></textarea></center>
        <div class="btn-group">
          <button type="submit" class="btn submit"  onclick="Validationn()">Submit</button>
          <a class="btn cancel" href="./Feedback.html">Cancel</a>
        </div>
      </form>
    </div>
  </div>
</center>

    <!-- User feedback end -->

  
                <!-- Modal start-->
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
                            <div class="content"><br>
                              <center><span class="titlee">Your Feedback Has Successfully Recorded!</span></center>
                            </div>
                            <div class="actions"><br>
                              <a href="./index.html"><button type="button" class="history">Done</button></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

<!-- Modal end -->




  <br><br>


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
            <h3 style="font-size: 35px; font-family: Protest Riot, sans-serif;">NeighborhoodFinds</h3>
            <p class="foop" style="font-family: Fredoka, sans-serif;">At NeighborhoodFinds, we believe that the heart of any
              community lies in its local stores
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


    

<script>
  // Star click start
  const allStar=document.querySelectorAll('.rating .star')

allStar.forEach((item,idx)=>{
    item.addEventListener('click',function(){
      let click=0
      allStar.forEach(i=>{
        i.classList.replace('bxs-star','bx-star')
        i.classList.remove('active')
      })
        for(let i=0; i<allStar.length; i++){
            if(i<=idx){
                allStar[i].classList.replace('bx-star','bxs-star')
                allStar[i].classList.add('active')
            }else{
              allStar[i].style.setProperty('--i', click)
              click++
            }
        }
    })
})
// Star click end

// Send feedback btn start
function toggleFeedbackForm() {
    var feedbackForm = document.getElementById("feedbackForm");
    feedbackForm.style.display = (feedbackForm.style.display === "none") ? "block" : "none";
  }
// Send feedback btn end
</script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>


</body>

</html>