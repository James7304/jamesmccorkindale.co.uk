<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>James McCorkindale | Tutoring</title>
    
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
                        <a class="nav-link" href="webdev.php">Website Development</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" href="tutoring.php">Tutoring
                            <span class="visually-hidden">(current)</span>
                        </a>
                        </li>
                    </ul>
                </div>

                <a id="get-in-touch" href="./index.php?contact=true"><button type="button" class="btn btn-outline-light mx-2">Get in Touch</button></a>
                <a id="download-cv" href="./docs/cv.pdf" download><button type="button" class="btn btn-outline-light mx-2">Download CV</button></a>
                
            </div>
        </nav>
    </header>

    <section class="py-5 container" style="margin-bottom:75px;" width="100%">
        <div class="row align-items-center">

            <div class="col d-flex justify-content-center">
                <h1>Tuition</h1>
            </div>
        
        </div>
        <div class="row align-items-center">

            <div class="col d-flex justify-content-center">
                <p align="center">
                    I'm a maths tutor, working in the East Dunbartonshire area.<br> I'm available for tutoring in your home or online.<br><br>
                    I currently teach Higher, National 5, National 4 and lower levels<br> and my standard rate is £20 per hour.<br><br>
                    I have a very clear and methodical way of teaching,<br> but always adapting it for each individual pupil.
                </p>
            </div>

        </div>
    </section>

    <section style="margin-bottom:75px;">

        <div class="row" style="width:100%;">

            <div class="col d-flex justify-content-center">
                <h1>Testimonials</h1>
            </div>

        </div>

        <!-- Slideshow container -->
        <div id="testimonials" class="slideshow-container">

            <!-- Full-width slides/quotes -->
            <div class="mySlides">
                <q>Excellent tutor, always came well prepared and stayed on focus the whole way through</q>
                <p class="author">- Higher Pupil</p>
            </div>

            <div class="mySlides">
                <q>James has a calm and patient manner. This along with a wide knowledge, has enabled our son to progress quickly to an advanced level.</q>
                <p class="author">- The Michie Family</p>
            </div>

            <!-- Next/prev buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>

        <!-- Dots/bullets/indicators -->
        <div id="slideshow-dots" class="dot-container">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
        </div>

    </section>

    <?php
        include './shared/contactform.html';
        include 'shared/footer.html';
    ?>

    <script src="scripts/slide_in_animation.js"></script>
    <script src="scripts/slideshow.js"></script>
    <script src="./scripts/hamburgerMenu.js"></script>

</body>
</html>