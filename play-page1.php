<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blackpanther2</title>
    <!-- Link to CSS -->
    <link rel="stylesheet" href="css/style.css ">
    <!---fav Icon-->
    <link rel="shortcut icon" href="img/popcorn.jpeg" type="image/x-icon">
    <!-- Box Icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>
    <!--Header-->
    <header>
        <!--Nav-->
        <div class=" nav container">
            <!--Logo-->
            <a href="index.php" class="logo">
                Movie<span>Tic</span>
            </a>
            <!-- Search Box -->
            <div class="search-box">
                <input type="search" name="" id="search-input" placeholder="Search Movie">
                <i class="search-logo fa-solid fa-magnifying-glass"></i>
            </div>
            <a href="#" class="user">
                <img src="img/Robot.png" alt="" class="user-img">
            </a>
            <a href="index.php" class="login">
                <input type="submit" class="login-btn" value="Logout">
            </a>

            <!-- NavBar-->
            <div class="navbar">
                <a href="user_page.php" class="nav-link nav-active">
                    <i class="fa-solid fa-house"></i>
                    <span class="nav-link-title">Home</span>
                </a>
                <a href="user_page.php#popular" class="nav-link">
                    <i class="fa-solid fa-fire"></i>
                    <span class="nav-link-title">Trending</span>
                </a>
                <a href="user_page.php#movies" class="nav-link">
                    <i class="fa-solid fa-compass"></i>
                    <span class="nav-link-title">Explore</span>
                </a>
                <a href="user_page.php#home" class="nav-link">
                    <i class="fa-solid fa-tv"></i>
                    <span class="nav-link-title">Movies</span>
                </a>
                <a href="#home" class="nav-link">
                    <i class="fa-solid fa-heart"></i>
                    <span class="nav-link-title">Favourite</span>
                </a>
            </div>
        </div>
    </header>
    <!-- Play Movie Container -->
    <div class="play-container container">
        <!-- Play Image-->
        <img src="img/blackpanther2.jpg" alt="" class="play-img" id="BP2">
        <!-- Play Text -->
        <div class="play-text">
            <h2>Black Panther:Wakanda Forever(Hindi)</h2>
            <!-- Ratings -->
            <div class="rating">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
            </div>
            <!-- Tags -->
            <div class="tags">
                <span>Action</span>
                <span>Adventure</span>
                <span>Drama</span>
                <span>FullHD</span>
            </div>
            <!--- Trailer Button -->
            <a href="#" class="watch-btn">
                <!-- Play button-->
                <i class="fa-sharp fa-solid fa-caret-right play-movie"></i>
                <span>Watch the Trailer</span>
            </a>
        </div>
        <!-- Play button-->
        <!--   <i class="fa-sharp fa-solid fa-caret-right play-movie"></i> -->
        <!-- Video Container -->
        <div class="video-container">
            <!-- Video Box -->
            <div class="video-box">
                <video id="#BP2" src="videos/Black.Panther-Wakanda.Forever.mkv" controls></video>
                <!-- Close Video Icon -->
                <i class="fa-solid fa-x close-video"></i>
            </div>
        </div>
    </div>
    <!-- About Movie -->
    <div class="about-movie container">
        <h2>Black Panther:Wakanda Forever</h2>
        <p>The people of Wakanda fight to protect their home from intervening world powers as they mourn the death of King T'Challa.</p>
        <!-- Movie cast-->
        <h2 class="cast-heading">Movie Cast</h2>
        <div class="cast">
            <!-- Cast box 1-->
            <div class="cast-box">
                <img src="RRR/S. S. Rajamouli.jpg" alt="" class="cast-img">
                <span class="cast-title">S. S. Rajamouli</span>
            </div>
            <!-- Cast box 2-->
            <div class="cast-box">
                <img src="RRR/ramcharan.jpg" alt="" class="cast-img">
                <span class="cast-title">Ram Charan</span>
            </div>
            <!-- Cast box 3-->
            <div class="cast-box">
                <img src="RRR/Jr NTR.jpg" alt="" class="cast-img">
                <span class="cast-title">Jr NTR</span>
            </div>
            <!-- Cast box 4-->
            <div class="cast-box">
                <img src="RRR/Ajay Devgan.jpg" alt="" class="cast-img">
                <span class="cast-title">Ajay Devgan</span>
            </div>
            <!-- Cast box 5-->
            <div class="cast-box">
                <img src="RRR/Alia Bhatt.jpg" alt="" class="cast-img">
                <span class="cast-title">Alia Bhatt</span>
            </div>
            <!-- Cast box 6-->
            <div class="cast-box">
                <img src="RRR/Olivia Morris.jpg" alt="" class="cast-img">
                <span class="cast-title">Olivia Morris</span>
            </div>
            <!-- Cast box 7-->
            <div class="cast-box">
                <img src="RRR/Shriya Saran.jpg" alt="" class="cast-img">
                <span class="cast-title">Shriya Saran</span>
            </div>
            <!-- Cast box 8-->
            <div class="cast-box">
                <img src="RRR/Ray Stevenson.jpg" alt="" class="cast-img">
                <span class="cast-title">Ray Stevenson</span>
            </div>
            <!-- Cast box 9-->
            <div class="cast-box">
                <img src="RRR/Alison Doody.jpg" alt="" class="cast-img">
                <span class="cast-title">Alison Doody</span>
            </div>
        </div>
    </div>

    <!-- Video Container -->
    <div class="next-page">
        <a href="videos/Black.Panther-Wakanda.Forever.mkv" class="next-btn" control>Watch the Full Movie </a>

        <div class="video-container">
            <!-- Video Box -->
            <div class="video-box">

                <video id="BF2" src="videos/Black.Panther-Wakanda.Forever.mkv" controls></video>
                <!-- Close Video Icon -->
                <i class="fa-solid fa-x close-video"></i>
            </div>
        </div>
    </div>

    <!-- Copyright -->
    <div class="copyright">
        <p>&#169; MovieTic All Right Reserved</p>
    </div>

    <!-- Link to Swiper Files -->
    <script src="js/swiper-bundle.min.js"></script>
    <!-- Link to Js -->
    <script src="js/main.js"></script>



</body>

</html>