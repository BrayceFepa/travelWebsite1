<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!-- swiper css link  -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>


    <!-- header section starts  -->


    <section class="header">
        <a href="home.php" class="logo">travel</a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <!-- header section ends -->


    <div class="heading" style="background: url(images/header-bg-3.png) no-repeat ;">
        <h1>book now</h1>
    </div>


    <!-- booking section starts  -->

    <section class="booking">

        <h1 class="heading-title">book your trip!</h1>

        <form action="book_form.php" method="POST" class="book-form">

            <div class="flex">

                <div class="input-box">
                    <span>name :</span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>

                <div class="input-box">
                    <span>email :</span>
                    <input type="email" placeholder="enter your email" name="email">
                </div>

                <div class="input-box">
                    <span>phone :</span>
                    <input type="tel" placeholder="enter your number" name="phone">
                </div>

                <div class="input-box">
                    <span>address :</span>
                    <input type="text" placeholder="enter your address" name="address">
                </div>

                <div class="input-box">
                    <span>where to :</span>
                    <input type="text" placeholder="place you want to visit" name="location">
                </div>

                <div class="input-box">
                    <span>how many :</span>
                    <input type="text" placeholder="number of guests" name="guests">
                </div>

                <div class="input-box">
                    <span>arrivals :</span>
                    <input type="date" name="arrivals">
                </div>

                <div class="input-box">
                    <span>leaving :</span>
                    <input type="date" name="leaving">
                </div>



            </div>
            <input type="submit" value="submit" class="btn" name="send">

        </form>

    </section>

    <!-- booking section ends  -->
















    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>quick links </h3>
                <a href="home.php"> <i class="fa fa-angle-right"></i> home</a>
                <a href="about.php"> <i class="fa fa-angle-right"></i> about</a>
                <a href="package.php"> <i class="fa fa-angle-right"></i> package</a>
                <a href="book_form.php"> <i class="fa fa-angle-right"></i> book</a>
            </div>

            <div class="box">
                <h3>extra links </h3>
                <a href="#"> <i class="fa fa-angle-right"></i>ask questions</a>
                <a href="#"> <i class="fa fa-angle-right"></i>about us</a>
                <a href="#"> <i class="fa fa-angle-right"></i>privacy policy</a>
                <a href="#"> <i class="fa fa-angle-right"></i>terms of use</a>
            </div>

            <div class="box">
                <h3>contact info </h3>
                <a href="#"> <i class="fa fa-phone"></i>+237 693267462</a>
                <a href="#"> <i class="fa fa-phone"></i>+237 676994001</a>
                <a href="#"> <i class="fa fa-envelope"></i>braycefepa@gmail.com</a>
                <a href="#"> <i class="fa fa-map"></i>yaoundé, ngoaekele</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            </div>


        </div>

        <div class="credit">
            created by <span>brayce</span> | all rights reserved!
        </div>

    </section>

    <!-- footer section ends -->




    <!-- swiper js link -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>