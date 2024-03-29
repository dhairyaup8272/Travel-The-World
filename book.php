<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>

    <!-- css swipper link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- custome css link -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- header section starts -->

<section class="header">
<a href="home.php" class="logo">Travel The World</a>

<nav class="navbar">
     <a href="home.php">Home</a>
     <a href="about.php">About</a>
     <a href="package.php">Package</a>
     <a href="book.php">Book</a>
</nav>

<div id="menu-btn" class="fas fa-bars"></div>

</section>
<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
    <h1>book now</h1>
</div>

<!-- Booking Section Starts -->

<section class="booking">
    <h1 class="heading-title">book your trip!</h1>
    <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            
            <div class="inputBox">
                <span>name :</span>
                <input type="text" placeholder="Enter your name" name="name">
            </div>

            <div class="inputBox">
                <span>email :</span>
                <input type="email" placeholder="Enter your email" name="email">
            </div>

            <div class="inputBox">
                <span>phone :</span>
                <input type="number" placeholder="Enter your number" name="phone">
            </div>

            <div class="inputBox">
                <span>address :</span>
                <input type="text" placeholder="Enter your address" name="address">
            </div>

            <div class="inputBox">
                <span>where to :</span>
                <input type="text" placeholder="Place you want to visit" name="location">
            </div>

            <div class="inputBox">
                <span>how many :</span>
                <input type="number" placeholder="Number of guests" name="guests">
            </div>

            <div class="inputBox">
                <span>arrivals :</span>
                <input type="date" name="arrivals">
            </div>

            <div class="inputBox">
                <span>leaving :</span>
                <input type="date" name="leaving">
            </div>

            <div class="inputBox">
                <span>reviews :</span>
                <input type="text" name="reviews" placeholder="Please add your reviews">
            </div>
        </div>
            <input type="submit" value="submit" class="btn" name="send">

        
    </form>
</section>

<!-- Booking Section ends -->

<!-- Footer Section Starts -->

<!-- <section class="footer">

    <div class="box-container">
        <div class="box">
            <h3>Quick Links</h3>
                <a href="about.php"> <i class="fas fa-angle-right"></i> About </a>
                <a href="package.php"> <i class="fas fa-angle-right"></i> Package </a>
                <a href="book.php"> <i class="fas fa-angle-right"></i> Book </a>
                <a href="home.php"> <i class="fas fa-angle-right"></i> Home </a>
        </div>
        
        <div class="box">
            <h3>extra links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i> ask question </a>
                <a href="#"> <i class="fas fa-angle-right"></i> about us </a>
                <a href="#"> <i class="fas fa-angle-right"></i> privacy policy </a>
                <a href="#"> <i class="fas fa-angle-right"></i> terms of use </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
                <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
                <a href="#"> <i class="fas fa-envelope"></i> travelagency@gmail.com </a>
                <a href="#"> <i class="fas fa-map"></i> mumbai, india - 400104 </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
        </div>
    </div>
    <div class="credit"> created by <span> Dhairya Jain</span> | all rights reserved!</div>
</section> -->
<!-- Footer Section Ends -->


<!-- swipper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<!--custom js file link-->
<script src="script.js"></script>
    
</body>
</html>


