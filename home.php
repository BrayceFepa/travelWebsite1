<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

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



    <!-- home section starts  -->

    <section class="home">

        <div class="swiper home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide" style="background: url(images/home-slide-1.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>travel around the world</h3>
                        <a href="package.php" class="btn">discover more </a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(images/home-slide-2.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>discover the new places</h3>
                        <a href="package.php" class="btn">discover more </a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background: url(images/home-slide-3.jpg) no-repeat">
                    <div class="content">
                        <span>explore, discover, travel</span>
                        <h3>make your tour worthwhile</h3>
                        <a href="package.php" class="btn">discover more </a>
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>

    <!-- home section ends -->



    <!-- services sections starts  -->

    <section class="services">

        <h1 class="heading-title"> our services </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/icon-1.png" alt="">
                <h3>adventure</h3>
            </div>

            <div class="box">
                <img src="images/icon-2.png" alt="">
                <h3>tour guide</h3>
            </div>

            <div class="box">
                <img src="images/icon-3.png" alt="">
                <h3>trekking</h3>
            </div>

            <div class="box">
                <img src="images/icon-4.png" alt="">
                <h3>camp fire</h3>
            </div>

            <div class="box">
                <img src="images/icon-5.png" alt="">
                <h3>off road</h3>
            </div>

            <div class="box">
                <img src="images/icon-6.png" alt="">
                <h3>camping</h3>
            </div>

        </div>

    </section>

    <!-- services sections ends -->



















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