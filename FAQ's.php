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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="./faq.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@460&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">


<style>
        html {
      font-size: 62.5%;

    }

    @media screen and (max-width:1188px) {
      html{
        font-size: 62%;

        .head{
          font-size: 6rem;
        }
      }

    }

    @media screen and (max-width:1127px) {
      html{
        font-size: 58%;

        .head{
          font-size: 6rem;
        }
      }
    }

    @media screen and (max-width:1061px) {
      html{
        font-size: 54%;

        
        .head{
          font-size: 6rem;
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

    @media screen and (max-width:880px) {
      html{
        font-size: 52%;

        .head{
          font-size: 4rem;
        }
        .btn{
          border: none;
        }
      }
    }

    @media screen and (max-width:576px) {
      html{
        font-size: 52%;

        .head{
          font-size: 4rem;
        }
        .btn{
          border: none;
        }
        .foo{
          margin-left: 2rem;
        }
      }
    }

    @media screen and (max-width:565px) {
      html{
        font-size: 52%;

        .head{
          font-size: 3rem;
        }
        .btn{
          border: none;
        }
        .foo{
          margin-left: 2rem;
        }
      }
    }

    @media screen and (max-width:423px) {
      html{
        font-size: 52%;

        .head{
          font-size: 2.5rem;
        }
        .btn{
          border: none;
        }
        .foo{
          margin-left: 2rem;
        }
      }
    }

    @media screen and (max-width:353px) {
      html{
        font-size: 48%;

        .head{
          font-size: 2rem;
        }
        .btn{
          border: none;
        }

        .foo{
          margin-left: 2rem;
        }
      }
    }

    .btn-block{
      font-family: "Fredoka", sans-serif;
    }

    .card-body{
      font-family: "Fredoka", sans-serif;

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
                    <a class="nav-link" href="./index.php"><button type="button"
                            class="btn btn-outline-dark" style="font-family: poppins;">Home</button>&nbsp;
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
                    <a class="nav-link" href="./offer.php"><button type="button"
                            class="btn btn-outline-dark" style="font-family: poppins;">Offers</button>&nbsp;
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
                    <a class="nav-link" href="#"><button type="button" class="btn btn-outline-dark" style="font-family: poppins;">FAQ's</button>&nbsp;
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./Feedback.php"><button type="button"
                            class="btn btn-outline-dark" style="font-family: poppins;">Feedback</button>&nbsp;
                    </a>
                </li>
            </ul>
        </div>
    </nav>





    <!-- Navbaar end -->

    <!-- Intro start -->
    <center>
        <br><br>
        <h3 class="head" style="font-family: poppins;"  data-aos="fade-in" data-aos-offset="100" data-aos-duration="900">"FREQUENTLY ASKED QUESTION'S !"
        </h3><br>
    </center>
    <!-- Intro end -->

    <br><br>


    <!-- FAQ's start -->

    <div class="accordion container" id="accordionExample">
        <div class="card"  data-aos="fade-up" data-aos-offset="50" data-aos-duration="900">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Is the showroom inventory updated in real-time?
                </button>
            </h2>
          </div>
      
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              Yes, absolutely! Showroom inventory being updated in real-time is a fantastic feature. It means customers can trust that the information they see online or in-store is accurate and up-to-date, which helps them make informed purchasing decisions. Real-time updates also benefit the showroom itself by providing valuable insights into stock levels and trends, enabling better inventory management and customer service. 
            </div>
          </div>
        </div>

        <br>
        
        <div class="card"  data-aos="fade-up" data-aos-offset="50" data-aos-duration="900">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Can I request gift wrapping or special packaging for showroom pickup order?   
              </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              Unfortunately, at this time, we do not offer gift wrapping or special packaging for showroom pickup orders. Our priority is to streamline the pickup process and ensure that orders are ready for collection efficiently. While we appreciate your interest in personalized packaging, we currently focus on providing a seamless and quick service for all customers. We're continuously evaluating our offerings, so please check back in the future for any updates to our services.
            </div>
          </div>
        </div>

        <br>

       <div class="card"  data-aos="fade-up" data-aos-offset="50" data-aos-duration="900">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                Can I check the availability of a product in multiple showrooms simultaneously?

              </button>
            </h2>
          </div>
      
          <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              Absolutely! We've designed our system to make it convenient for you to check the availability of a product across multiple showrooms simultaneously. Our goal is to provide you with the best possible shopping experience, and part of that involves ensuring you have access to our products wherever they may be stocked.        
                 </div>
          </div>
        </div>

        <br>
        
        <div class="card"  data-aos="fade-up" data-aos-offset="50" data-aos-duration="900">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Are all products displayed on the website available in showrooms? 
              </button>
            </h2>
          </div>
          <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              Yes, absolutely! We strive to ensure that all products displayed on our website are available in our showrooms. Our goal is to provide a seamless shopping experience whether you prefer to browse online or visit us in person. We regularly update our inventory to reflect the availability of products across all our channels.
                        </div>
          </div>
        </div>

        <br>
        <div class="card"  data-aos="fade-up" data-aos-offset="50" data-aos-duration="900">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                    Can I check if a specific product is available in a showroom near me? 
  
                </button>
              </h2>
            </div>
        
            <div id="collapseFive" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                Absolutely! We've made it easy for you to check the availability of a specific product in a showroom near you. Our website features a convenient tool that allows you to search for products and see which showrooms currently have them in stock. 
                            </div>
            </div>
          </div>
  
          <br>
          
          <div class="card"  data-aos="fade-up" data-aos-offset="50" data-aos-duration="900">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    Can I reserve a product is available for immediate pickup in a showroom? 
                </button>
              </h2>
            </div>
            <div id="collapseSix" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                Unfortunately, we do not offer the option to reserve products for immediate pickup in our showrooms. Our inventory system is designed to reflect real-time availability, allowing customers to check if a product is in stock before visiting a showroom. 
                            </div>
            </div>
          </div>
  
          <br>
          <div class="card"  data-aos="fade-up" data-aos-offset="50" data-aos-duration="900">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                    Is there a way to receive notifications when a product becomes available in a
                    showroom?
  
                </button>
              </h2>
            </div>
        
            <div id="collapseSeven" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                Unfortunately, we currently do not offer a notification system for when a product becomes available in a showroom. We understand the convenience this feature would provide, but at this time, our system is not equipped to send out notifications for individual product availability. 
                            </div>
            </div>
          </div>
  
          <br>
          
          <div class="card"  data-aos="fade-up" data-aos-offset="50" data-aos-duration="900">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                    How accurate is the showroom inventory information?   
                </button>
              </h2>
            </div>
            <div id="collapseEight" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                The accuracy of our showroom inventory information is one of our top priorities. We strive to maintain real-time updates to ensure that the information you see on our website accurately reflects the availability of products in our showrooms. 
                            </div>
            </div>
          </div>
  
          <br>
          <div class="card"  data-aos="fade-up" data-aos-offset="50" data-aos-duration="900">
            <div class="card-header" id="headingOne">
              <h2 class="mb-0">
                <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                    Can I shedule a showroom visit to view a specific product?
  
                </button>
              </h2>
            </div>
        
            <div id="collapseNine" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                Unfortunately, we do not offer the option to schedule showroom visits to view specific products at this time. Our showrooms operate on a walk-in basis, and customers are welcome to visit during our regular business hours to browse our selection of products.
                            </div>
            </div>
          </div>
  
          <br>
          
          <div class="card"  data-aos="fade-up" data-aos-offset="50" data-aos-duration="900">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                    Is there a limit to the number of products I can order for showroom pickup? 
                </button>
              </h2>
            </div>
            <div id="collapseTen" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                No, there is no limit to the number of products you can order for showroom pickup. We want to ensure that you have access to our full range of products and can conveniently select everything you need for your home or project. Whether you're looking to purchase a single item or multiple items, our showroom pickup service is designed to accommodate your needs. 
                            </div>
            </div>
          </div>
  
          <br>

          <div class="card"  data-aos="fade-up" data-aos-offset="50" data-aos-duration="900">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                  Can I return or exchange a product at offline showroom that I purchased online form a showroom? 
                </button>
              </h2>
            </div>
            <div id="collapseEleven" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                When you purchase a product online from our showroom, we kindly ask that you initiate any returns or exchanges through our online platform. This ensures a streamlined process and allows us to efficiently manage your request.
                            </div>
            </div>
          </div>
  
          <br>

          <div class="card"  data-aos="fade-up" data-aos-offset="50" data-aos-duration="900">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                    Are showroom prices the same as online prices? 
                </button>
              </h2>
            </div>
            <div id="collapseTwelve" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                Yes, our showroom prices are almost always the same as our online prices. We aim to maintain consistency across all our sales channels to ensure fairness and transparency for our customers.  The only potential difference may be the inclusion of delivery charges for online orders, which may not apply to purchases made in our showrooms. This difference accounts for the additional service of delivering the product directly to your doorstep when you shop online.
                            </div>
            </div>
          </div>
  
          <br>
      
          <div class="card"  data-aos="fade-up" data-aos-offset="50" data-aos-duration="900">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                    Are there any additional fees or delivery charges for showroom pickup orders?  
                </button>
              </h2>
            </div>
            <div id="collapseThirteen" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                Yes, there are additional delivery charges for showroom pickup orders. While picking up your order from our showroom eliminates the need for shipping, we do incur costs associated with preparing your items for pickup and managing the logistics of having them ready for you. 
                            </div>
            </div>
          </div>
  
          <br>
      
          <div class="card"  data-aos="fade-up" data-aos-offset="50" data-aos-duration="900">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                    Can I trace the status of my showroom pickup order?  
                </button>
              </h2>
            </div>
            <div id="collapseFourteen" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                Unfortunately, we do not offer the option to trace the status of showroom pickup orders at this time. Our showroom pickup process is designed to be efficient and straightforward, and while we strive to have your order ready for pickup as quickly as possible, we do not currently provide tracking information for showroom pickups.
                            </div>
            </div>
          </div>
  
          <br>
      
          <div class="card"  data-aos="fade-up" data-aos-offset="50" data-aos-duration="900">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                    Can I cancel or modify my showroom pickup order?
                </button>
              </h2>
            </div>
            <div id="collapseFifteen" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                Currently, we do not offer the option to cancel or modify showroom pickup orders once they have been placed.  While we do not currently support cancellations or modifications, we are actively working on implementing this feature to enhance the flexibility of our ordering process. 
                            </div>
            </div>
          </div>
  
          <br>
      
          <div class="card"  data-aos="fade-up" data-aos-offset="50" data-aos-duration="900">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSixteen" aria-expanded="false" aria-controls="collapseSixteen">
                    Are there any special promotions or discounts available for showroom pickup?
                </button>
              </h2>
            </div>
            <div id="collapseSixteen" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                Yes, there are often special promotions or discounts available for showroom pickup orders. We value the convenience and efficiency of showroom pickup and want to encourage our customers to take advantage of this option.
                            </div>
            </div>
          </div>
  
          <br>

          <div class="card"  data-aos="fade-up" data-aos-offset="50" data-aos-duration="900">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
                    Is there a customer support option specially for showroom inquiries? 
                </button>
              </h2>
            </div>
            <div id="collapseSeventeen" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                At the moment, we do not have a dedicated customer support option specifically for showroom inquiries. However, we are actively working on implementing this feature to better assist our customers who have questions or need assistance related to our showrooms.
                            </div>
            </div>
          </div>
  
          <br>

          <div class="card"  data-aos="fade-up" data-aos-offset="50" data-aos-duration="900">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEighteen" aria-expanded="false" aria-controls="collapseEighteen">
                    Can I request a specific pickup time for my showroom order?  
                </button>
              </h2>
            </div>
            <div id="collapseEighteen" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">
                Unfortunately, we do not offer the option to request a specific pickup time for showroom orders at this time. Our showroom pickup process is designed to be efficient and flexible, and orders are typically ready for pickup during our regular showroom hours.
                            </div>
            </div>
          </div>
    </div>
      
<!-- FAQ's end -->



    <br><br><br><br>

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
                        <p class="foop" style="font-family: Fredoka, sans-serif;">At NeighborhoodFinds, we believe that the heart of any community lies in its local stores
                            and showrooms. We are thrilled to welcome you to a platform that makes exploring and finding
                            your favorite stores
                            and items in your neighborhood easier than ever before.</p>
                    </div>
                    <div class="dk-footer-box-info foo">
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

        <script src="Project-1.js"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
          AOS.init();
        </script>
    
</body>

</html>