<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIDWAY</title>
    <link href= "resources.css.style.css" rel="stylesheet" type="text/css ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
        .background{
            background-image: url(images/background-2.jpg);
        }
        .choice-buy{
            background-image: url(images/background-1.jpg);
        }
        
        .choice-rent{
            background-image: url(images/background-3.jpg);

        }
         .bg-overlay{
            background-color: #171819;
            width: 100%;
            height: 100%;
            opacity: 0.6;
            
        } 
        #over{
            background: #171819;
            width: 100%;
            height: 100%;
            opacity: 0.6;
        }
    </style>
    <body>
    
    <div class="nav">
         <img src="images/logo.png" alt="Logo" width="120" />

         <ul id="item">
            <li> <a href="#">HOME</a></li>
            <li> <a href="#about">ABOUT</a></li>
            <li> <a href="#contact">CONTACT</a></li>
            <li> <a href="#part-1">PROPERTIES</a></li>

            <div class="icon">
                <i class="fa-brands fa-facebook" ></i>
                <i class="fa-brands fa-instagram"></i>
            </div>
         </ul> 
    </div>

    <div class="background">
        <div class="bg-overlay" id="over"></div>
    </div>

    <div class="mid">
        <p>WHERE HOUSES BECOME HOMES</p>
        <h1>FIND YOUR DREAM HOME AT MIDWAY</h1>

        <div class="btn">
            <!-- <a class="simple" href="#">Get Started</a> -->
            <a class="border" href="#">Explore</a>
        </div>
    </div>

    <div class="part-1" id="part-1" >
        <p>WHAT ARE YOU LOOKING FOR?</p>
        <!-- <img class="bg-1" src="assets/part-1 background.png" alt="Image Here"/> -->
        
        <div class="choice">
            <div class="choice-buy" data-aos="fade-left">
                <!-- <img class="buy-image" src="assets/background-1.jpg" alt="Image"> -->
                <div class="buy-overlay"></div>
                <div class="buy-btn">
                    <a href="#">BUY</a>
                </div>
            </div>

            <div class="choice-rent" data-aos="fade-right">
                <!-- <img class="buy-image" src="assets/background-1.jpg" alt="Image"> -->
                <div class="rent-overlay"></div>
                <div class="rent-btn">
                    <a href="#">RENT</a>
                </div>
            </div>
        </div>

    </div>

    <div data-aos="fade-up">
        <h2 class="sale-heading">Here are the top-selling properties for sale</h2>

        <div class="cardsContainer-buy"></div>

        <button class="buy-view-more">
            <span class="hover-underline-animation"> View more </span>
            <svg viewBox="0 0 46 16" height="10" width="30" xmlns="http://www.w3.org/2000/svg" id="arrow-horizontal">
                <path transform="translate(30)" d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z" data-name="Path 10" id="Path_10"></path>
            </svg>
        </button>

        <h2 class="rent-heading">Here are the top-selling properties for rent</h2>

        <div class="cardsContainer-rent"></div>

        <button class="rent-view-more">
            <span class="hover-underline-animation"> View more </span>
            <svg viewBox="0 0 46 16" height="10" width="30" xmlns="http://www.w3.org/2000/svg" id="arrow-horizontal">
                <path transform="translate(30)" d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z" data-name="Path 10" id="Path_10"></path>
            </svg>
        </button>
    </div>


<div id="about" class="responsive-container-block bigContainer" data-aos="fade-up">
  <div class="responsive-container-block Container bottomContainer">
    <div class="ultimateImg">
      <img class="mainImg" src="images/about-us.jpg" alt="image">
      <div class="purpleBox">
        <p class="purpleText">
         Our Rating
        </p>
        <img class="stars" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/mp5.svg">
      </div>
    </div>
    <div class="allText bottomText">
      <p class="text-blk headingText">
        About Us
      </p>
      <p class="text-blk subHeadingText">
         With years of experience in the industry, we are dedicated to helping you <span>find your dream property.
      </p>
      <p class="text-blk description">
      Explore our wide range of properties, connect with our <span>knowledgeable team,</span> and let us help you unlock the doors to your next chapter. We look forward to being a part of your journey towards finding your perfect place to call home.
      </p>
      <a class="explore">
        View Services
      </a>
    </div>
  </div>
</div>


    <!-- <div class="about-us">
        <h1>About Us</h1>

            <div class="about-top">
                <h2 id="hover-heading">MIDWAY</h2>
                <p id="hover-para">Where your dream home finds an address</p>
            </div>
            <div class="about-bottom">
                <p>With years of experience in the industry, we are dedicated to helping you <span>find your dream property.</span> Whether you're looking for a cozy home, a luxurious villa, or a prime commercial space, we have a <span>diverse portfolio</span> that caters to every need.</p>
                <p>Explore our wide range of properties, connect with our <span>knowledgeable team,</span> and let us help you unlock the doors to your next chapter. We look forward to being a part of your journey towards finding your perfect place to call home.</p>
                <button class="about-more-button" onclick="goToAbout()">
                    Click me
                </button>
            </div>
    </div> -->

    <div class="contact" id="contact">   
        <div class="address"  data-aos="fade-left">
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3915.6968699175804!2d76.9373991765746!3d11.061338275808106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba8f621e9e8d825%3A0x99b7b05f44ba728c!2sSreevatsa%20Enclave%2C%20Gounder%20Mills%2C%20Coimbatore%2C%20Tamil%20Nadu%20641029!5e0!3m2!1sen!2sin!4v1692021973906!5m2!1sen!2sin" width="700" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="contact-container"  data-aos="fade-right">
            <form class="dark-form">
                <div class="form-row">
                    <div class="form-group half-width">
                        <label for="first-name">First Name</label>
                        <input type="text" id="first-name" name="first_name" required>
                    </div>
                    &nbsp;
                    &nbsp;
                    &nbsp;
                    <div class="form-group half-width">
                        <label for="last-name">Last Name</label>
                        <input type="text" id="last-name" name="last_name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label>Service</label>
                    <div class="radio-group">
                        <input type="radio" id="buy" name="service" value="buy">
                        <label for="buy">Buy</label>
                        <input type="radio" id="rent" name="service" value="rent">
                        <label for="rent">Rent</label>
                        <input type="radio" id="other" name="service" value="other">
                        <label for="other">Other</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                </div>
                <button type="submit" class="submit-button">Submit</button>
            </form>
         </div>
    </div>
    <!-- <div class="card">
        <span class="title">Get in Touch</span>
        <form class="form" id="myForm">
            <div class="group">
                <label for="name">Name</label>
                <input placeholder="Name" type="text" required="">
            </div>
            <div class="group">
                <label for="email">Email</label>
                <input placeholder="Email" type="email" id="email" name="email" required="">
            </div>
            <div class="group">
                <label for="phone">Phone Number</label>
                <input placeholder="Phone Number" type="tel" id="phone" name="phone" pattern="[0-9]{10}" required="">
            </div>
            <div class="group">
                <label for="comment">Comment</label>
                <textarea placeholder="Type your feedback or query" id="comment" name="comment" rows="5"></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>

    <div class="overlay" id="successOverlay">
        <div class="popup">
            <img src="assets/success.gif" alt="success">
            <p>Form submitted successfully!</p>
        </div>
    </div> -->

    <footer >
        <div class="footer" data-aos="fade-up">
            <div class="row" data-aos="fade-up" >
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.instagram.com/midwaymall/"><i class="fa-brands fa-instagram aria-hidden="true"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                <a href="#"><i class="fa-brands fa-linked"></i></a>
            </div>
        
            <div class="row" >
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#part-1">Properties</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                </ul>
            </div>
        
            <div class="row"  >
                MIDWAY Copyright © 2021 Midway - All rights reserved
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
        offset: 120, // offset (in px) from the original trigger point
 
    duration: 1000,
    });
  </script>
</body>
</html>