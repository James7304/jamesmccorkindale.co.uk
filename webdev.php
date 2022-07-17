<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>James McCorkindale | Website Development</title>
    <link rel="icon" href="./img/icon.png">
    
    <link rel="stylesheet" href="styles/media.css">
    <link rel="stylesheet" href="styles/slideshow.css">
    <link rel="stylesheet" href="styles/webdev.css">
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

    <section class="websites py-5" width="100%">

        <h1 align="center">Websites I've Developed</h1>

        <div class="py-5 my-5 strip-grey">

            <div class="prev-site mx-4">

                <a href="http://barkker.xyz" target="_blank"><img class="my-2" src="./img/Websites/barkker.png" width="232" height="132" alt="barkker"></a><br>
                <a href="http://barkker.xyz" target="_blank">barkker.xyz</a><br>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" height="30" width="22.5" class="my-2 mx-1"><path fill="rgb(228,77,38)" d="M0 32l34.9 395.8L191.5 480l157.6-52.2L384 32H0zm308.2 127.9H124.4l4.1 49.4h175.6l-13.6 148.4-97.9 27v.3h-1.1l-98.7-27.3-6-75.8h47.7L138 320l53.5 14.5 53.7-14.5 6-62.2H84.3L71.5 112.2h241.1l-4.4 47.7z"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" height="30" width="22.5" class="mx-1"><path fill="rgb(0,76,232)" d="M0 32l34.9 395.8L192 480l157.1-52.2L384 32H0zm313.1 80l-4.8 47.3L193 208.6l-.3.1h111.5l-12.8 146.6-98.2 28.7-98.8-29.2-6.4-73.9h48.9l3.2 38.3 52.6 13.3 54.7-15.4 3.7-61.6-166.3-.5v-.1l-.2.1-3.6-46.3L193.1 162l6.5-2.7H76.7L70.9 112h242.2z"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="30" width="30" class="mx-1"><path fill="rgb(212,184,48)" d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM243.8 381.4c0 43.6-25.6 63.5-62.9 63.5-33.7 0-53.2-17.4-63.2-38.5l34.3-20.7c6.6 11.7 12.6 21.6 27.1 21.6 13.8 0 22.6-5.4 22.6-26.5V237.7h42.1v143.7zm99.6 63.5c-39.1 0-64.4-18.6-76.7-43l34.3-19.8c9 14.7 20.8 25.6 41.5 25.6 17.4 0 28.6-8.7 28.6-20.8 0-14.4-11.4-19.5-30.7-28l-10.5-4.5c-30.4-12.9-50.5-29.2-50.5-63.5 0-31.6 24.1-55.6 61.6-55.6 26.8 0 46 9.3 59.8 33.7L368 290c-7.2-12.9-15-18-27.1-18-12.3 0-20.1 7.8-20.1 18 0 12.6 7.8 17.7 25.9 25.6l10.5 4.5c35.8 15.3 55.9 31 55.9 66.2 0 37.8-29.8 58.6-69.7 58.6z"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" height="30" width="37.5" class="mx-1"><path fill="rgb(0,122,255)" d="M320 104.5c171.4 0 303.2 72.2 303.2 151.5S491.3 407.5 320 407.5c-171.4 0-303.2-72.2-303.2-151.5S148.7 104.5 320 104.5m0-16.8C143.3 87.7 0 163 0 256s143.3 168.3 320 168.3S640 349 640 256 496.7 87.7 320 87.7zM218.2 242.5c-7.9 40.5-35.8 36.3-70.1 36.3l13.7-70.6c38 0 63.8-4.1 56.4 34.3zM97.4 350.3h36.7l8.7-44.8c41.1 0 66.6 3 90.2-19.1 26.1-24 32.9-66.7 14.3-88.1-9.7-11.2-25.3-16.7-46.5-16.7h-70.7L97.4 350.3zm185.7-213.6h36.5l-8.7 44.8c31.5 0 60.7-2.3 74.8 10.7 14.8 13.6 7.7 31-8.3 113.1h-37c15.4-79.4 18.3-86 12.7-92-5.4-5.8-17.7-4.6-47.4-4.6l-18.8 96.6h-36.5l32.7-168.6zM505 242.5c-8 41.1-36.7 36.3-70.1 36.3l13.7-70.6c38.2 0 63.8-4.1 56.4 34.3zM384.2 350.3H421l8.7-44.8c43.2 0 67.1 2.5 90.2-19.1 26.1-24 32.9-66.7 14.3-88.1-9.7-11.2-25.3-16.7-46.5-16.7H417l-32.8 168.7z"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" height="30" width="33.75" class="mx-1"><path fill="rgb(94,59,127)" d="M333.5,201.4c0-22.1-15.6-34.3-43-34.3h-50.4v71.2h42.5C315.4,238.2,333.5,225,333.5,201.4z M517,188.6 c-9.5-30.9-10.9-68.8-9.8-98.1c1.1-30.5-22.7-58.5-54.7-58.5H123.7c-32.1,0-55.8,28.1-54.7,58.5c1,29.3-0.3,67.2-9.8,98.1 c-9.6,31-25.7,50.6-52.2,53.1v28.5c26.4,2.5,42.6,22.1,52.2,53.1c9.5,30.9,10.9,68.8,9.8,98.1c-1.1,30.5,22.7,58.5,54.7,58.5h328.7 c32.1,0,55.8-28.1,54.7-58.5c-1-29.3,0.3-67.2,9.8-98.1c9.6-31,25.7-50.6,52.1-53.1v-28.5C542.7,239.2,526.5,219.6,517,188.6z M300.2,375.1h-97.9V136.8h97.4c43.3,0,71.7,23.4,71.7,59.4c0,25.3-19.1,47.9-43.5,51.8v1.3c33.2,3.6,55.5,26.6,55.5,58.3 C383.4,349.7,352.1,375.1,300.2,375.1z M290.2,266.4h-50.1v78.4h52.3c34.2,0,52.3-13.7,52.3-39.5 C344.7,279.6,326.1,266.4,290.2,266.4z"/></svg>
            </div>
            <div class="prev-site mx-4">

                <a href="https://vectorex.net" target="_blank"><img class="my-2" src="./img/Websites/vectorex.png" width="232" height="132" alt="vectorex"></a><br>
                <a href="https://vectorex.net" target="_blank">vectorex.net</a><br>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" height="30" width="22.5" class="my-2 mx-1"><path fill="rgb(228,77,38)" d="M0 32l34.9 395.8L191.5 480l157.6-52.2L384 32H0zm308.2 127.9H124.4l4.1 49.4h175.6l-13.6 148.4-97.9 27v.3h-1.1l-98.7-27.3-6-75.8h47.7L138 320l53.5 14.5 53.7-14.5 6-62.2H84.3L71.5 112.2h241.1l-4.4 47.7z"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" height="30" width="22.5" class="mx-1"><path fill="rgb(0,76,232)" d="M0 32l34.9 395.8L192 480l157.1-52.2L384 32H0zm313.1 80l-4.8 47.3L193 208.6l-.3.1h111.5l-12.8 146.6-98.2 28.7-98.8-29.2-6.4-73.9h48.9l3.2 38.3 52.6 13.3 54.7-15.4 3.7-61.6-166.3-.5v-.1l-.2.1-3.6-46.3L193.1 162l6.5-2.7H76.7L70.9 112h242.2z"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" height="30" width="30" class="mx-1"><path fill="rgb(212,184,48)" d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zM243.8 381.4c0 43.6-25.6 63.5-62.9 63.5-33.7 0-53.2-17.4-63.2-38.5l34.3-20.7c6.6 11.7 12.6 21.6 27.1 21.6 13.8 0 22.6-5.4 22.6-26.5V237.7h42.1v143.7zm99.6 63.5c-39.1 0-64.4-18.6-76.7-43l34.3-19.8c9 14.7 20.8 25.6 41.5 25.6 17.4 0 28.6-8.7 28.6-20.8 0-14.4-11.4-19.5-30.7-28l-10.5-4.5c-30.4-12.9-50.5-29.2-50.5-63.5 0-31.6 24.1-55.6 61.6-55.6 26.8 0 46 9.3 59.8 33.7L368 290c-7.2-12.9-15-18-27.1-18-12.3 0-20.1 7.8-20.1 18 0 12.6 7.8 17.7 25.9 25.6l10.5 4.5c35.8 15.3 55.9 31 55.9 66.2 0 37.8-29.8 58.6-69.7 58.6z"/></svg>
            </div>

        </div>


    </section>

    <?php
        include './shared/contactform.html';
        include './shared/footer.html';
    ?>

    <script src="./scripts/slide_in_animation.js"></script>
    <script src="./scripts/hamburgerMenu.js"></script>

</body>
</html>