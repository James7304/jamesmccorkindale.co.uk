<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>James McCorkindale | Success</title>
    
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
                    <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="projects.php">Projects</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="webdev.php">Website Development</a>
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

<section class="py-5 container" style="margin-bottom:75px;" width="100%">
    <div class="row align-items-center">

        <div class="col d-flex justify-content-center">
            <h1>Contact Form Successfully Sent!</h1>
        </div>
    
    </div>
    <div class="row align-items-center">

        <div class="col d-flex justify-content-center success">
            <button type="button" class="btn btn-outline-success" onclick="history.go(-1);">Return to the previous page...</button>
        </div>

    </div>
</section>

<script src="./scripts/hamburgerMenu.js"></script>

</body>
</html>