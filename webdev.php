<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>James McCorkindale | Website Development</title>
    
    <link rel="stylesheet" href="styles/media.css">
    <link rel="stylesheet" href="styles/slideshow.css">
    <link rel="stylesheet" href="styles/flatly_bootstrap.css">
    <link rel="stylesheet" href="styles/slide_in_animation.css">
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
                <a id="title" class="navbar-brand mx-4" href="#">Site of James McCorkindale</a>

                <button id="hamburger" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                        <a class="nav-link" href=".">Home
                        </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="projects.php">Projects</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" href="webdev.php">Website Development
                            <span class="visually-hidden">(current)</span>
                        </a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="tutoring.php">Tutoring</a>
                        </li>
                    </ul>
                </div>

                <a id="get-in-touch" href="./index.php?contact=true"><button type="button" class="btn btn-outline-light mx-2">Get in Touch</button></a>
                <a id="download-cv" href="./docs/cv.pdf" download><button type="button" class="btn btn-outline-light mx-2">Download CV</button></a>
                
            </div>
        </nav>
    </header>

    <section class="py-5 container" width="100%">
        <div class="row align-items-center">

            <div class="col d-flex justify-content-center">
                <h1>Website Development</h1>
            </div>
        
        </div>
        <div class="row align-items-center">

            <div class="col d-flex justify-content-center">
                <p align="center">

                    Grow your organisation with a professional website<br>
                    I will create you a free, working prototype and you only have to buy it if you are happy with it!
                </p>
            </div>

        </div>
    </section>

    <section class="py-5 container" width="100%">
        <div class="row align-items-center">

            <div class="col d-flex justify-content-center">
                <h1>My Method</h1>
            </div>
        
        </div>
        <div class="row align-items-center my-5">

            <img src="./img/method.svg" alt="method">
        
        </div>
    </section>

    <!--section style="margin-bottom:75px;">

        <div class="row align-items-center">

            <div class="col d-flex justify-content-center">
                <h1>Client Reviews</h1>
            </div>

        </div>

        <div class="slideshow-container">

            <div class="mySlides">
                <q>I love you the more in that I believe you had liked me for my own sake and for nothing else</q>
                <p class="author">- John Keats</p>
            </div>

            <div class="mySlides">
                <q>But man is not made for defeat. A man can be destroyed but not defeated.</q>
                <p class="author">- Ernest Hemingway</p>
            </div>

            <div class="mySlides">
                <q>I have not failed. I've just found 10,000 ways that won't work.</q>
                <p class="author">- Thomas A. Edison</p>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>

        <div class="dot-container">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>

    </section -->

    <?php
        include './shared/contactform.html';
        include 'shared/footer.html';
    ?>

    <script src="scripts/slide_in_animation.js"></script>
    <script src="./scripts/hamburgerMenu.js"></script>

</body>
</html>