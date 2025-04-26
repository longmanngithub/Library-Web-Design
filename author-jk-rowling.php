<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>J.K. Rowling - Author | Library</title>

    <!-- Bootstrap Min Bundle CSS. !DO NOT TOUCH! -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"/>

    <!-- Link CSS -->
    <link rel="stylesheet" href="css/master.css" type="text/css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/author-jk-rowling.css">

    <!-- Poppins font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"/>

    <!-- For social media logo -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


</head>
<body>

    <!-- Header --> 

    <header class="navbar navbar-expand-xl navbar-dark sticky-top bg-dark p-3">
        <div class="container">

          <!-- INCLUDE HEADER.PHP -->

          <?php include 'header.php'; ?>
            
        </div>
      <!-- /Container -->
    </header>

  
  <!-- Main Content-->
  <main id="author-details">
    <!-- HEADER -->
    <div class="container py-5">
      <div class="text-box pt-5 pb-4">
        <h2>Author <strong>Details</strong></h2>
      </div>
    </div>

    <div class="container">

      <!-- About J.K. Rowling-->
      <div class="row align-items-center justify-content-center">
        <!-- Image of J.K. Rowling -->
        <div class="col-lg-4 col-md-6">
          <img src="images/famousAuthors/JK_Rowling.jpg" alt="J.K. Rowling" width="100%" class="shadow border rounded-3">
        </div>
        <!-- Description of J.K. Rowling -->
        <div class="col-lg-8 col-md-6">
          <div class="info">
            <h2 class="fw-bold">J.K. Rowling</h2>
            <h4 class="fw-bold" style="color: var(--main-color);">British Author</h4>
            <p>J.K. Rowling (born July 31, 1965, Yate, near Bristol, England) is a British author, creator of the popular and critically acclaimed Harry Potter series, about a young sorcerer in training.</p>
            <p><i>"The most important thing is to read as much as you can, like I did. It will give you an understanding of what makes good writing and it will enlarge your vocabulary."</i></p>
            <div class="social-media">
              <a href="https://www.facebook.com" target="_blank">
                  <i class="fab fa-facebook fa-2x"></i>
              </a>
              <a href="https://www.twitter.com" target="_blank">
                  <i class="fab fa-twitter fa-2x"></i>
              </a>
              <a href="https://www.linkedin.com" target="_blank">
                  <i class="fab fa-linkedin fa-2x"></i>
              </a>
              <a href="https://www.instagram.com" target="_blank">
                  <i class="fab fa-instagram fa-2x"></i>
              </a>
            </div>
          </div>
        </div>

      </div>
      <!-- /Row -->
    </div>
    <!-- /Container -->

      <!-- J.K. Rowling Books -->

      <section id="rowling-books">
        <div class="container-fluid py-5">
          <div class="container">

            <!-- HEADER -->

            <div class="pt-5 pb-4">
              <h2 class="fw-bold">Books of J.K. Rowling</h2>
            </div>
  
            <div class="row">
  
              <!-- Books of J.K. Rowling -->
  
              <div class="col-6 col-md-4 p-4 book-items" id="popular-book-1">
                <a href="#">
                  <img src="images/rowling-books/book-one.jpg" alt="Harry Potter" class="img-fluid animation">
                </a>
              </div>
  
              <div class="col-6 col-md-4 p-4 book-items" id="popular-book-2">
                <a href="#">
                  <img src="images/rowling-books/book-two.jpg" alt="Fantastic Beast" class="img-fluid animation">
                </a>
              </div>
  
              <div class="col-6 col-md-4 p-4 book-items" id="popular-book-3">
                <a href="#">
                  <img src="images/rowling-books/book-three.jpg" alt="Harry Potter" class="img-fluid animation">
                </a>
              </div>

              <div class="col-6 col-md-4 p-4 book-items" id="popular-book-3">
                <a href="#">
                  <img src="images/rowling-books/book-four.jpg" alt="Harry Potter" class="img-fluid animation">
                </a>
              </div>

              <div class="col-6 col-md-4 p-4 book-items" id="popular-book-3">
                <a href="#">
                  <img src="images/rowling-books/book-five.jpg" alt="Harry Potter" class="img-fluid animation">
                </a>
              </div>

              <div class="col-6 col-md-4 p-4 book-items" id="popular-book-3">
                <a href="#">
                  <img src="images/rowling-books/book-six.jpg" alt="The Tales of Beedle The Bard" class="img-fluid animation">
                </a>
              </div>

              <div class="view-all-btn text-center py-5">
                <a href="library.php">
                  <button type="button" class="btn btn-primary btn-warning me-2 animation">VIEW ALL BOOKS</button>
                </a>
              </div>
              <!-- /View all Button -->
  
            </div>
            <!-- /Row -->
          </div>
          <!-- /Container -->
        </div>
        <!-- /Container-fluid -->
      </section>

    </main>

    <section id="library-counter">
        <div class="container-fluid">
          <div class="container p-5">
            
            <!-- INCLUDE HOME-COUNTER.PHP -->

            <?php include 'home-counter.php';?>

          </div>
          <!-- /Container -->
        </div>
        <!-- /Container-fluid -->
      </section>
      <!-- /Counter Stats -->

    <section id="room-booking">
        <div class="container-fluid">
          <div class="container text-center room-booking-text">

            <!-- INCLUDE HOME-BOOKING.PHP -->

            <?php include 'home-booking.php';?>

          </div>
          <!-- /Container -->
        </div>
        <!-- /Container-fluid -->
    </section>
    <!-- /Room Booking -->

    <section id="subscribe-now">
      <div class="container-fluid">
        <div class="container p-5">
          
            <!-- INCLUDE HOME-SUBSCRIBE.PHP -->

            <?php include 'home-subscribe.php';?>

        <!-- /Container -->
      </div>
      <!-- /Container-fluid -->
    </section>
    <!-- /Subscribe Now -->

      <!-- Footer -->
    <footer class="bg-dark">
      <div class="container-fluid">
        <div class="container d-flex flex-wrap justify-content-between align-items-center py-4">

            <!-- INCLUDE FOOTER.PHP -->
             
            <?php include 'footer.php';?>

        </div>
        <!-- /Container -->
      </div>
      <!-- /Container-fluid -->
    </footer>

    <!-- Link Bootstrap Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>