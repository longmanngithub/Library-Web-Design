<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>

    
    <!-- Bootstrap Min Bundle CSS. !DO NOT TOUCH! -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"/>
    
    <!-- Link CSS -->
    <link rel="stylesheet" href="css/master.css" type="text/css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/library.css">

    <!-- Link Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- Poppins font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"/>

    <!-- For social media logo -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


</head>
<body>


<!-- Header -->

<header class="navbar navbar-expand-lg navbar-dark sticky-top bg-dark p-3">

    <div class="container">

        <!-- INCLUDE LIBRARY-HEADER.PHP -->

        <?php include 'library-header.php' ?>

    </div>
    <!-- /Container -->
    
</header>

<!-- Library -->

<main id="library-page">

    <!-- LIBRARY HEADER -->
    
    <div class="container py-5 mb-5">
        <h1 class="fw-bold mt-5"><span style="color: var(--main-color);">OUR </span>Library</h1>
    </div>

    <!-- New books -->
    <section class="pb-5" id="newCarousel">
        <div class="container">
            <div class="row">
                <!-- BUTTONS -->
                <div class="container d-flex justify-content-between">
                    <div class="col-6">
                        <h2 class="mb-3">New Books</h2>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end align-items-center">
                        <a class="btn btn-primary mb-3 me-1" href="#new" role="button" data-slide="prev">
                            <i class="fa fa-arrow-left"></i>
                        </a>
                        <a class="btn btn-primary mb-3" href="#new" role="button" data-slide="next">
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <!-- /Container -->

                <!-- PICTURES -->
                <div class="col-12 p-4">
                    <div id="new"  class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <!-- CAROUSEL 1 -->
                            <div class="carousel-item active">
                                <div class="row">
                                    <!-- BOOK 1 -->
                                    <div class="col-4 mb-3">
                                        <div class="card shadow">
                                            <img class="img-fluid" alt="100%x280" src="images/new-books/book-one.jpg">
                                            <a href="geneWolfeBook.php" class="stretched-link"></a>
                                        </div>
                                    </div>
                                    <!-- BOOK 2 -->
                                    <div class="col-4 mb-3">
                                        <div class="card shadow">
                                            <img class="img-fluid" alt="100%x280" src="images/new-books/book-two.jpg">
                                        </div>
                                    </div>
                                    <!-- BOOK 3 -->
                                    <div class="col-4 mb-3">
                                        <div class="card shadow">
                                            <img class="img-fluid" alt="100%x280" src="images/new-books/book-three.jpg">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- CAROUSEL 2 -->
                            <div class="carousel-item">
                                <div class="row">
                                    <!-- BOOK 4 -->
                                    <div class="col-4 mb-3">
                                        <div class="card shadow">
                                            <img class="img-fluid" alt="100%x280" src="images/new-books/book-four.jpg">
                                        </div>
                                    </div>
                                    <!-- BOOK 5 -->
                                    <div class="col-4 mb-3">
                                        <div class="card shadow">
                                            <img class="img-fluid" alt="100%x280" src="images/new-books/book-five.jpg">
                                        </div>
                                    </div>
                                    <!-- BOOK 6 -->
                                    <div class="col-4 mb-3">
                                        <div class="card shadow">
                                            <img class="img-fluid" alt="100%x280" src="images/new-books/book-six.jpg">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- CAROUSEL 3 -->
                            <div class="carousel-item">
                                <div class="row">
                                    <!-- BOOK 7 -->
                                    <div class="col-4 mb-3">
                                        <div class="card shadow">
                                            <img class="img-fluid" alt="100%x280" src="images/new-books/book-seven.jpg">
                                        </div>
                                    </div>
                                    <!-- BOOK 8 -->
                                    <div class="col-4 mb-3">
                                        <div class="card shadow">
                                            <img class="img-fluid" alt="100%x280" src="images/new-books/book-eight.jpg">
                                        </div>
                                    </div>
                                    <!-- BOOK 9 -->
                                    <div class="col-4 mb-3">
                                        <div class="card shadow">
                                            <img class="img-fluid" alt="100%x280" src="images/new-books/book-nine.jpg">
                                        </div>
                                    </div>

                                </div>
                                <!-- /Row -->
                            </div>
                            <!-- /Carousel -->
                        </div>
                        <!-- /Carousel-inner -->
                    </div>
                    <!-- /Carousel -->
                </div>
                <!-- /Col-md-12 -->
            </div>
            <!-- /Row -->
            <div class="view-all-btn text-center py-2">
              <a href="#">
                <button type="button" class="btn btn-primary btn-warning me-2 animation">VIEW ALL BOOKS</button>
              </a>
            </div>
            <!-- /View all Button -->
        </div>
        <!-- /Container -->
    </section>

    <!-- Popular books -->
    <section class="pb-5" id="popularCarousel">
        <div class="container-fluid" id="popularObj">
            <!-- New books -->
            <div class="container">
                <div class="row">
                    <!-- BUTTONS -->
                    <div class="container d-flex justify-content-between">
                        <div class="col-6">
                            <h2 class="mb-3">Popular Books</h2>
                        </div>
                        <div class="col-md-6 d-flex justify-content-end align-items-center">
                            <a class="btn btn-primary mb-3 me-1" href="#popular" role="button" data-slide="prev">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                            <a class="btn btn-primary mb-3" href="#popular" role="button" data-slide="next">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- /Container -->
    
                    <!-- PICTURES -->
                    <div class="col-12 p-4">
                        <div id="popular" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <!-- CAROUSEL 1 -->
                                <div class="carousel-item active">
                                    <div class="row">
                                        <!-- BOOK 1 -->
                                        <div class="col-4 mb-3">
                                            <div class="card shadow">
                                                <img class="img-fluid" alt="100%x280" src="images/popular-books/book-one.jpg">
                                            </div>
                                        </div>
                                        <!-- BOOK 2 -->
                                        <div class="col-4 mb-3">
                                            <div class="card shadow">
                                                <img class="img-fluid" alt="100%x280" src="images/popular-books/book-two.jpg">
                                            </div>
                                        </div>
                                        <!-- BOOK 3 -->
                                        <div class="col-4 mb-3">
                                            <div class="card shadow">
                                                <img class="img-fluid" alt="100%x280" src="images/popular-books/book-three.jpg">
                                            </div>
                                        </div>
    
                                    </div>
                                </div>
                                <!-- CAROUSEL 2 -->
                                <div class="carousel-item">
                                    <div class="row">
                                        <!-- BOOK 4 -->
                                        <div class="col-4 mb-3">
                                            <div class="card shadow">
                                                <img class="img-fluid" alt="100%x280" src="images/popular-books/book-four.jpg">
    
                                            </div>
                                        </div>
                                        <!-- BOOK 5 -->
                                        <div class="col-4 mb-3">
                                            <div class="card shadow">
                                                <img class="img-fluid" alt="100%x280" src="images/popular-books/book-five.jpg">
                                            </div>
                                        </div>
                                        <!-- BOOK 6 -->
                                        <div class="col-4 mb-3">
                                            <div class="card shadow">
                                                <img class="img-fluid" alt="100%x280" src="images/popular-books/book-six.jpg">
                                            </div>
                                        </div>
    
                                    </div>
                                </div>
                                <!-- CAROUSEL 3 -->
                                <div class="carousel-item">
                                    <div class="row">
                                        <!-- BOOK 7 -->
                                        <div class="col-4 mb-3">
                                            <div class="card shadow">
                                                <img class="img-fluid" alt="100%x280" src="images/popular-books/book-seven.jpg">
                                            </div>
                                        </div>
                                        <!-- BOOK 8 -->
                                        <div class="col-4 mb-3">
                                            <div class="card shadow">
                                                <img class="img-fluid" alt="100%x280" src="images/popular-books/book-eight.jpg">
                                            </div>
                                        </div>
                                        <!-- BOOK 9 -->
                                        <div class="col-4 mb-3">
                                            <div class="card shadow">
                                                <img class="img-fluid" alt="100%x280" src="images/popular-books/book-nine.jpg">
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                            </div>
                            <!-- /Carousel-inner -->
                        </div>
                        <!-- Carousel -->
                    </div>
                    <!-- /Col-12 -->
                </div>
                <!-- /Row -->
                <div class="view-all-btn text-center py-2">
                  <a href="#">
                    <button type="button" class="btn btn-primary btn-warning me-2 animation">VIEW ALL BOOKS</button>
                  </a>
                </div>
                <!-- /View all Button -->
            </div>
            <!-- /Container -->
        </div>
        <!-- /Container-fluid -->
    </section>

    <!-- Audiobooks -->

    <section class="pb-3" id="audioCarousel">
        <div class="container-fluid" id="audioObj">
            <div class="container">
                <div class="row">
                    <!-- BUTTONS -->
                    <div class="container d-flex justify-content-between">
                        <div class="col-6">
                            <h2 class="mb-3">Audiobooks</h2>
                        </div>
                        <div class="col-md-6 d-flex justify-content-end align-items-center">
                            <a class="btn btn-primary mb-3 me-1" href="#audio" role="button" data-slide="prev">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                            <a class="btn btn-primary mb-3" href="#audio" role="button" data-slide="next">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- /Container -->
    
                    <!-- PICTURES -->
                    <div class="col-12 p-4">
                        <div id="audio" class="carousel slide" data-ride="carousel">
    
                            <div class="carousel-inner">
                                <!-- CAROUSEL 1 -->
                                <div class="carousel-item active">
                                    <div class="row">
                                        <!-- PODCAST 1 -->
                                        <div class="col-4 mb-3">
                                            <div class="card shadow">
                                                <img class="img-fluid" alt="100%x280" src="images/podcast/podcast1.png">
                                            </div>
                                        </div>
                                        <!-- PODCAST 2 -->
                                        <div class="col-4 mb-3">
                                            <div class="card shadow">
                                                <img class="img-fluid" alt="100%x280" src="images/podcast/podcast2.jpg">
                                            </div>
                                        </div>
                                        <!-- PODCAST 3 -->
                                        <div class="col-4 mb-3">
                                            <div class="card shadow">
                                                <img class="img-fluid" alt="100%x280" src="images/podcast/podcast3.jpg">
                                            </div>
                                        </div>
    
                                    </div>
                                </div>
    
                                <!-- CAROUSEL 2 -->
                                <div class="carousel-item">
                                    <div class="row">
                                        <!-- PODCAST 4 -->
                                        <div class="col-4 mb-3">
                                            <div class="card shadow">
                                                <img class="img-fluid" alt="100%x280" src="images/podcast/podcast4.jpg">
                                            </div>
                                        </div>
                                        <!-- PODCAST 5 -->
                                        <div class="col-4 mb-3">
                                            <div class="card shadow">
                                                <img class="img-fluid" alt="100%x280" src="images/podcast/podcast5.avif">
                                            </div>
                                        </div>
                                        <!-- PODCAST 6 -->
                                        <div class="col-4 mb-3">
                                            <div class="card shadow">
                                                <img class="img-fluid" alt="100%x280" src="images/podcast/podcast6.jpg">
                                            </div>
                                        </div>
    
                                    </div>
                                </div>
    
                                <!-- CAROUSEL 3 -->
                                <div class="carousel-item">
                                    <div class="row">
                                        <!-- PODCAST 7 -->
                                        <div class="col-4 mb-3">
                                            <div class="card shadow">
                                                <img class="img-fluid" alt="100%x280" src="images/podcast/podcast7.jpg">
                                            </div>
                                        </div>
                                        <!-- PODCAST 8 -->
                                        <div class="col-4 mb-3">
                                            <div class="card shadow">
                                                <img class="img-fluid" alt="100%x280" src="images/podcast/podcast8.webp">
                                            </div>
                                        </div>
                                        <!-- PODCAST 9 -->
                                        <div class="col-4 mb-3">
                                            <div class="card shadow">
                                                <img class="img-fluid" alt="100%x280" src="images/podcast/podcast9.jpg">
                                            </div>
                                        </div>
    
                                    </div>
                                    <!-- /Row -->
                                </div>
                                <!-- /Carousel -->
                            </div>
                            <!-- /Carousel-inner -->
                        </div>
                        <!-- /Carousel -->
                    </div>
                    <!-- /Col-12 -->
                </div>
                <!-- /Row -->
                <div class="view-all-btn text-center py-2">
                  <a href="#">
                    <button type="button" class="btn btn-primary btn-warning me-2 animation">VIEW ALL AUDIOBOOKS</button>
                  </a>
                </div>
                <!-- /View all Button -->
            </div>
            <!-- /Container -->
        </div>
        <!-- /Container-fluid -->
    </section>

    <!-- Videos -->

    <section class="pb-3" id="videoCarousel">

        <div class="container">
            <div class="row">
                <!-- BUTTONS -->
                <div class="container d-flex justify-content-between">
                    <div class="col-6">
                        <h2 class="mb-3">Videos</h2>
                    </div>
                    <div class="col-md-6 d-flex justify-content-end align-items-center">
                        <a class="btn btn-primary mb-3 me-1" href="#video" role="button" data-slide="prev">
                            <i class="fa fa-arrow-left"></i>
                        </a>
                        <a class="btn btn-primary mb-3" href="#video" role="button" data-slide="next">
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <!-- /Container -->

                <!-- PICTURES -->
                <div class="col-12 p-4">
                    <div id="video" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            <!-- CAROUSEL 1 -->
                            <div class="carousel-item active">
                                <div class="row">
                                    <!-- VIDEO 1 -->
                                    <div class="col-4 mb-3">
                                        <div class="card shadow">
                                            <img class="img-fluid" alt="100%x280" src="images/video/video1.webp">
                                        </div>
                                    </div>
                                    <!-- VIDEO 2 -->
                                    <div class="col-4 mb-3">
                                        <div class="card shadow">
                                            <img class="img-fluid" alt="100%x280" src="images/video/video2.webp">
                                        </div>
                                    </div>
                                    <!-- VIDEO 3 -->
                                    <div class="col-4 mb-3">
                                        <div class="card shadow">
                                            <img class="img-fluid" alt="100%x280" src="images/video/video3.webp">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- CAROUSEL 2 -->
                            <div class="carousel-item">
                                <div class="row">
                                    <!-- VIDEO 4 -->
                                    <div class="col-4 mb-3">
                                        <div class="card shadow">
                                            <img class="img-fluid" alt="100%x280" src="images/video/video4.webp">
                                        </div>
                                    </div>
                                    <!-- VIDEO 5 -->
                                    <div class="col-4 mb-3">
                                        <div class="card shadow">
                                            <img class="img-fluid" alt="100%x280" src="images/video/video5.webp">
                                        </div>
                                    </div>
                                    <!-- VIDEO 6 -->
                                    <div class="col-4 mb-3">
                                        <div class="card shadow">
                                            <img class="img-fluid" alt="100%x280" src="images/video/video6.webp">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- CAROUSEL 3 -->
                            <div class="carousel-item">
                                <div class="row">
                                    <!-- VIDEO 7 -->
                                    <div class="col-4 mb-3">
                                        <div class="card shadow">
                                            <img class="img-fluid" alt="100%x280" src="images/video/video7.webp">
                                        </div>
                                    </div>
                                    <!-- VIDEO 8 -->
                                    <div class="col-4 mb-3">
                                        <div class="card shadow">
                                            <img class="img-fluid" alt="100%x280" src="images/video/video8.webp">
                                        </div>
                                    </div>
                                    <!-- VIDEO 9 -->
                                    <div class="col-4 mb-3">
                                        <div class="card shadow">
                                            <img class="img-fluid" alt="100%x280" src="images/video/video9.webp">
                                        </div>
                                    </div>

                                </div>
                                <!-- /Row -->
                            </div>
                            <!-- /Carousel -->
                        </div>
                        <!-- /Carousel-inner -->
                    </div>
                    <!-- /Carousel -->
                </div>
                <!-- /Col-12 -->
            </div>
            <!-- /Row -->
            <div class="view-all-btn text-center py-2">
              <a href="#">
                <button type="button" class="btn btn-primary btn-warning me-2 animation">VIEW ALL VIDEOS</button>
              </a>
            </div>
            <!-- /View all Button -->
        </div>
        <!-- /Container -->
    </section>

    <!-- Magazine -->

    <section class="pb-3" id="magazineCarousel">
        <div class="container-fluid" id="magazineObj">
            <div class="container">
                <div class="row">
                    <!-- BUTTONS -->
                    <div class="container d-flex justify-content-between">
                        <div class="col-6">
                            <h2 class="mb-3">Magazine</h2>
                        </div>
                        <div class="col-md-6 d-flex justify-content-end align-items-center">
                            <a class="btn btn-primary mb-3 me-1" href="#magazine" role="button" data-slide="prev">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                            <a class="btn btn-primary mb-3" href="#magazine" role="button" data-slide="next">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- /Container -->
    
                    <!-- PICTURES -->
                    <div class="col-12 p-4">
                        <div id="magazine" class="carousel slide" data-ride="carousel">
    
                            <div class="carousel-inner">
                                <!-- CAROUSEL 1 -->
                                <div class="carousel-item active">
                                    <div class="row">
                                        <!-- BOOK 1 -->
                                        <div class="col-4 mb-3">
                                            <div class="card shadow">
                                                <img class="img-fluid" alt="100%x280" src="images/magazine/Magazine1.jpg">
                                            </div>
                                        </div>
                                        <!-- BOOK 2 -->
                                        <div class="col-4 mb-3">
                                            <div class="card shadow">
                                                <img class="img-fluid" alt="100%x280" src="images/magazine/Magazine2.jpg">
                                            </div>
                                        </div>
                                        <!-- BOOK 3 -->
                                        <div class="col-4 mb-3">
                                            <div class="card shadow">
                                                <img class="img-fluid" alt="100%x280" src="images/magazine/Magazine3.jpg">
                                            </div>
                                        </div>
    
                                    </div>
                                </div>
    
                                <!-- CAROUSEL 2 -->
                                <div class="carousel-item">
                                    <div class="row">
                                        <!-- BOOK 4 -->
                                        <div class="col-4 mb-3">
                                            <div class="card shadow">
                                                <img class="img-fluid" alt="100%x280" src="images/magazine/Magazine4.jpg">
                                            </div>
                                        </div>
                                        <!-- BOOK 5 -->
                                        <div class="col-4 mb-3">
                                            <div class="card shadow">
                                                <img class="img-fluid" alt="100%x280" src="images/magazine/Magazine5.jpg">
                                            </div>
                                        </div>
                                        <!-- BOOK 6 -->
                                        <div class="col-4 mb-3">
                                            <div class="card shadow">
                                                <img class="img-fluid" alt="100%x280" src="images/magazine/Magazine6.jpg">
                                            </div>
                                        </div>
    
                                    </div>
                                </div>
    
                                <!-- CAROUSEL 3 -->
                                <div class="carousel-item">
                                    <div class="row">
                                        <!-- BOOK 7 -->
                                        <div class="col-4 mb-3">
                                            <div class="card shadow">
                                                <img class="img-fluid" alt="100%x280" src="images/magazine/Magazine7.jpg">
                                            </div>
                                        </div>
                                        <!-- BOOK 8 -->
                                        <div class="col-4 mb-3">
                                            <div class="card shadow">
                                                <img class="img-fluid" alt="100%x280" src="images/magazine/Magazine8.jpg">
                                            </div>
                                        </div>
                                        <!-- BOOK 9 -->
                                        <div class="col-4 mb-3">
                                            <div class="card shadow">
                                                <img class="img-fluid" alt="100%x280" src="images/magazine/Magazine9.jpg">
                                            </div>
                                        </div>
    
                                    </div>
                                    <!-- /Row -->
                                </div>
                                <!-- /Carousel -->
                            </div>
                            <!-- /Carousel-inner -->
                        </div>
                        <!-- /Carousel -->
                    </div>
                    <!-- /Col-12 -->
                </div>
                <!-- /Row -->
                <div class="view-all-btn text-center py-2">
                  <a href="#">
                    <button type="button" class="btn btn-primary btn-warning me-2 animation">VIEW ALL MAGAZINE</button>
                  </a>
                </div>
                <!-- /View all Button -->
            </div>
            <!-- /Container -->
        </div>
        <!-- /Container-fluid -->
    </section>

    <!-- Music -->

    <section class="pb-3" id="musicCarousel">
        <div class="container-fluid" id="musicObj">
            <div class="container">
                <div class="row">
                    <!-- BUTTONS -->
                    <div class="container d-flex justify-content-between">
                        <div class="col-6">
                            <h2 class="mb-3">Music</h2>
                        </div>
                        <div class="col-md-6 d-flex justify-content-end align-items-center">
                            <a class="btn btn-primary mb-3 me-1" href="#music" role="button" data-slide="prev">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                            <a class="btn btn-primary mb-3" href="#music" role="button" data-slide="next">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    <!-- /Container -->
    
                    <!-- PICTURES -->
                    <div class="col-12 p-4">
                        <div id="music" class="carousel slide" data-ride="carousel">
    
                            <div class="carousel-inner">
                                <!-- CAROUSEL 1 -->
                                <div class="carousel-item active">
                                    <div class="row">
                                        <!-- BOOK 1 -->
                                        <div class="col-4 mb-3">
                                            <div class="card shadow">
                                                <img class="img-fluid" alt="100%x280" src="images/music/Music1.jpg">
                                            </div>
                                        </div>
                                        <!-- BOOK 2 -->
                                        <div class="col-4 mb-3">
                                            <div class="card shadow">
                                                <img class="img-fluid" alt="100%x280" src="images/music/Music2.jpg">
                                            </div>
                                        </div>
                                        <!-- BOOK 3 -->
                                        <div class="col-4 mb-3">
                                            <div class="card shadow">
                                                <img class="img-fluid" alt="100%x280" src="images/music/Music3.jpg">
                                            </div>
                                        </div>
    
                                    </div>
                                </div>
    
                                <!-- CAROUSEL 2 -->
                                <div class="carousel-item">
                                    <div class="row">
                                        <!-- BOOK 4 -->
                                        <div class="col-4 mb-3">
                                            <div class="card shadow">
                                                <img class="img-fluid" alt="100%x280" src="images/music/Music4.jpg">
                                            </div>
                                        </div>
                                        <!-- BOOK 5 -->
                                        <div class="col-4 mb-3">
                                            <div class="card shadow">
                                                <img class="img-fluid" alt="100%x280" src="images/music/Music5.jpg">
                                            </div>
                                        </div>
                                        <!-- BOOK 6 -->
                                        <div class="col-4 mb-3">
                                            <div class="card shadow">
                                                <img class="img-fluid" alt="100%x280" src="images/music/Music6.jpg">
                                            </div>
                                        </div>
    
                                    </div>
                                </div>
    
                                <!-- CAROUSEL 3 -->
                                <div class="carousel-item">
                                    <div class="row">
                                        <!-- BOOK 7 -->
                                        <div class="col-4 mb-3">
                                            <div class="card shadow">
                                                <img class="img-fluid" alt="100%x280" src="images/music/Music7.jpg">
                                            </div>
                                        </div>
                                        <!-- BOOK 8 -->
                                        <div class="col-4 mb-3">
                                            <div class="card shadow">
                                                <img class="img-fluid" alt="100%x280" src="images/music/Music8.webp">
                                            </div>
                                        </div>
                                        <!-- BOOK 9 -->
                                        <div class="col-4 mb-3">
                                            <div class="card shadow">
                                                <img class="img-fluid" alt="100%x280" src="images/music/Music9.jpg">
                                            </div>
                                        </div>
    
                                    </div>
                                    <!-- /Row -->
                                </div>
                                <!-- /Carousel -->
                            </div>
                            <!-- /Carousel-inner -->
                        </div>
                        <!-- /Carousel -->
                    </div>
                    <!-- /Col-12 -->
                </div>
                <!-- /Row -->
                <div class="view-all-btn text-center py-2">
                  <a href="#">
                    <button type="button" class="btn btn-primary btn-warning me-2 animation">VIEW ALL MUSIC</button>
                  </a>
                </div>
                <!-- /View all Button -->
            </div>
            <!-- /Container -->
        </div>
        <!-- /Container-fluid -->
    </section>

    <section id="external-sources">
        <div class="container-fluid pb-5">
          <div class="container">

            <!-- HEADER -->

            <div class="text-box pt-5 pb-4">
              <h2>External Sources</h2>
            </div>

            <div class="row gy-5 py-5">
  
              <!-- EXTERNAL SOURCE 1 -->
  
              <div class="col-6 col-md-3 text-center animation d-flex align-items-stretch justify-content-center">
                <div class="card shadow">
                  <img src="images/externalSources/internet_archive.png" alt="Internet Archive" class="card-img-top">
                  <div class="card-body">
                    <h4 class="card-title">Internet Archive</h4>
                  </div>
                  <a href="#" class="stretched-link"></a>
                </div>
              </div>
  
              <!-- EXTERNAL SOURCE 2 -->
  
              <div class="col-6 col-md-3 text-center animation d-flex align-items-stretch justify-content-center">
                <div class="card shadow">
                  <img src="images/externalSources/jomeino.png" alt="JOMEINO" class="card-img-top">
                  <div class="card-body">
                    <h4 class="card-title">JOMEINO</h4>
                  </div>
                  <a href="#" class="stretched-link"></a>
                </div>
              </div>
  
              <!-- EXTERNAL SOURCE 3 -->
  
              <div class="col-6 col-md-3 text-center animation d-flex align-items-stretch justify-content-center">
                <div class="card shadow">
                  <img src="images/externalSources/jstor.png" alt="JSTOR" class="card-img-top">
                  <div class="card-body">
                    <h4 class="card-title">JSTOR</h4>
                  </div>
                  <a href="#" class="stretched-link"></a>
                </div>
              </div>
  
              <!-- EXTERNAL SOURCE 4 -->
  
              <div class="col-6 col-md-3 text-center animation d-flex align-items-stretch justify-content-center">
                <div class="card shadow">
                  <img src="images/externalSources/openstax.jpg" alt="Openstax" class="card-img-top">
                  <div class="card-body">
                    <h4 class="card-title">Openstax</h4>
                  </div>
                  <a href="#" class="stretched-link"></a>
                </div>
              </div>
  
            </div>
            <!-- /Row -->
          </div>
          <!-- /Container -->
        </div>
        <!-- /Container-fluid -->
      </section>
      <!-- /External Sources -->

</main>


      <!-- Footer -->

    <footer class="bg-dark">
        <div class="container-fluid">
            <div class="container d-flex flex-wrap justify-content-between align-items-center py-4">

                <!-- INCLUDE FOOTER.PHP -->

                <?php include 'footer.php' ?>

            </div>
            <!-- /Container -->
        </div>
        <!-- /Container-fluid -->
    </footer>




    <!-- Bootstrap Min Bundle JS. !DO NOT TOUCH! -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


    <!-- JavaScript dependencies -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>



</body>
</html>