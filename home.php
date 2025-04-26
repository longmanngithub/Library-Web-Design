<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home | Library</title>

  <!-- Bootstrap Min Bundle CSS. !DO NOT TOUCH! -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"/>
    
  <!-- Link CSS -->
  <link rel="stylesheet" href="css/master.css" type="text/css">
  <link rel="stylesheet" href="css/home.css" type="text/css">
  <link rel="stylesheet" href="css/header.css">

  <!-- Link Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Poppins font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"/>



</head>
<body>

  <!-- Header !COPY THIS! -->

  <header class="navbar navbar-expand-xl navbar-dark sticky-top bg-dark p-3">
        <div class="container">

          <!-- INCLUDE HEADER.PHP -->

          <?php include 'header.php'; ?>
            
        </div>
      <!-- /Container -->
    </header>

    <!-- Home Page -->

      <section id="hero-intro">
        <div class="container-fluid u-image">
          <div class="container">
            <div class="row">
  
              <div class="col-md-6" id="welcome-text">
                <div class="library">
                  <h2 class="white-font fw-bold">Welcome to <span>OUR </span>Library.</h2><br>
                  <p class="white-font">
                    Browse from the largest collection of ebooks. <br>
                    Read stories from anywhere, at anytime.
                  </p><br>
  
                  <!-- SEARCH -->
                   
                  <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                    <input type="search" class="form-control" placeholder="Search by book title, author name">
                    <button type="submit" class="btn btn-primary btn-warning">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                      </svg>
                    </button>
                  </form>
  
                </div>
              </div>
              <!-- /Welcome Text -->
            </div>
            <!-- /Row -->
          </div>
          <!-- /Container -->
        </div>
        <!-- /Container-fluid -->
      </section>
      <!-- /Introduction -->

      <section id="popular-this-week">
        <div class="container-fluid py-5">
          <div class="container">

            <!-- HEADER -->

            <div class="text-box pt-5 pb-4">
              <h2>Popular Books This Week</h2>
            </div>
  
            <div class="row">
  
              <!-- Popular Books -->
  
              <div class="col-4 col-md-4 p-4 book-items" id="popular-book-1">
                <a href="#">
                  <img src="images/popularWeek/atomic_habits.jpg" alt="Atomic Habits" class="img-fluid animation">
                </a>
              </div>
  
              <div class="col-4 col-md-4 p-4 book-items" id="popular-book-2">
                <a href="#">
                  <img src="images/popularWeek/who_moved_my_cheese.jpg" alt="Who Moved My Cheese?" class="img-fluid animation">
                </a>
              </div>
  
              <div class="col-4 col-md-4 p-4 book-items" id="popular-book-3">
                <a href="#">
                  <img src="images/popularWeek/ikigai.jpg" alt="Ikigai" class="img-fluid animation">
                </a>
              </div>
  
            </div>
            <!-- /Row -->
          </div>
          <!-- /Container -->
        </div>
        <!-- /Container-fluid -->
      </section>
      <!-- /Popular This Week -->

      <section id="stream-download">
        <div class="container-fluid py-5">
          <div class="container">
            <div class="row justify-content-between align-items-center py-5">
  
              <!-- LEFT BOX ITEMS -->
  
              <div class="col-lg-3 box-group" id="box-group-left">
  
                <!-- eBooks -->
  
                <div class="box-items text-center text-wrap text-break animation">
                  <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-book" viewBox="0 0 16 16">
                    <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
                  </svg>
                  <h5>ebooks</h5>
                </div>
  
                <!-- Videos -->
  
                <div class="box-items text-center text-wrap text-break animation">
                  <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-camera-reels" viewBox="0 0 16 16">
                    <path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0M1 3a2 2 0 1 0 4 0 2 2 0 0 0-4 0"/>
                    <path d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2zm6 8.73V7.27l-3.5 1.555v4.35zM1 8v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1"/>
                    <path d="M9 6a3 3 0 1 0 0-6 3 3 0 0 0 0 6M7 3a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                  </svg>         
                  <h5>Videos</h5>      
                </div>
  
                <!-- Magazines -->
  
                <div class="box-items text-center text-wrap text-break animation">
                  <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-journal" viewBox="0 0 16 16">
                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2"/>
                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z"/>
                  </svg>           
                  <h5>Magazines</h5>     
                </div>
  
              </div>
  
              <!-- RIGHT BOX ITEMS -->
  
              <div class="col-lg-3 box-group" id="box-group-right">
  
                <!-- Audiobooks -->
  
                <div class="box-items text-center text-wrap text-break animation">
                  <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-headphones" viewBox="0 0 16 16">
                    <path d="M8 3a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V8a6 6 0 1 1 12 0v5a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h1V8a5 5 0 0 0-5-5"/>
                  </svg>
                  <h5>Audiobooks</h5>
                </div>
  
                <!-- Music -->
  
                <div class="box-items text-center text-wrap text-break animation">
                  <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-music-note" viewBox="0 0 16 16">
                    <path d="M9 13c0 1.105-1.12 2-2.5 2S4 14.105 4 13s1.12-2 2.5-2 2.5.895 2.5 2"/>
                    <path fill-rule="evenodd" d="M9 3v10H8V3z"/>
                    <path d="M8 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 13 2.22V4L8 5z"/>
                  </svg>
                  <h5>Music</h5>
                </div>                
                
              </div>
  
  
              <!-- TEXTBOX RIGHT -->
  
              <div class="col-lg-6 px-5" id="box-text">
                <h2>Stream and Download</h2><br>
                <p class="secondary-grey-font">
                  Stream and download audiobooks from anywhere in the world. 
                  Search our database for a huge collection of popular ebooks. 
                  Watch book trailers, author interviews, and much more.
                </p><br><br>
                <div class="buttons-stream-download d-flex align-items-center">
                  <a href="library.php">
                    <button type="button" class="btn btn-primary btn-warning me-2 animation">STREAM VIDEOS</button>
                  </a>
                  <a href="library.php">
                    <button type="button" class="btn btn-secondary animation">DOWNLOAD BOOKS</button>
                  </a>
                </div>
                <!-- /Stream and Download Buttons -->
              </div>
  
            </div>
            <!-- /Row -->
          </div>
          <!-- /Container -->
        </div>
        <!-- /Container-fluid -->
      </section>
      <!-- /Stream and Download -->

      <section id="best-selling">
        <div class="container-fluid py-5">
          <div class="container">

            <!-- HEADER -->

            <div class="text-box pt-5 pb-4">
              <h2>Best Selling Books Collections</h2>
            </div>
  
            <div class="row">
  
              <!-- ROW 1 -->
  
              <div class="col-6 col-md-4 p-4 book-items" id="best-book-1">
                <a href="#">
                  <img src="images/bestSelling/harry_potter.jpg" alt="Harry Potter" class="img-fluid animation">
                </a>
              </div>
              <div class="col-6 col-md-4 p-4 book-items" id="best-book-2">
                <a href="#">
                  <img src="images/bestSelling/it_ends_with_us.jpg" alt="It Ends With Us" class="img-fluid animation">
                </a>
              </div>
              <div class="col-6 col-md-4 p-4 book-items" id="best-book-3">
                <a href="#">
                  <img src="images/bestSelling/life_of_pi.jpg" alt="Life of PI" class="img-fluid animation">
                </a>
              </div>
  
              <!-- ROW 2 -->
  
              <div class="col-6 col-md-4 p-4 book-items" id="best-book-4">
                <a href="#">
                  <img src="images/bestSelling/rich_dad_poor_dad.jpg" alt="Rich Dad Poor Dad" class="img-fluid animation">
                </a>
              </div>
              <div class="col-6 col-md-4 p-4 book-items" id="best-book-5">
                <a href="#">
                  <img src="images/bestSelling/the_hobbit.jpg" alt="The Hobbit" class="img-fluid animation">
                </a>
              </div>
              <div class="col-6 col-md-4 p-4 book-items" id="best-book-6">
                <a href="#">
                  <img src="images/bestSelling/the_psychology_of_money.jpg" alt="The Psychology of Money" class="img-fluid animation">
                </a>
              </div>
  
            </div>
            <!-- /Row -->
            <div class="view-all-btn text-center py-5">
              <a href="library.php">
                <button type="button" class="btn btn-primary btn-warning me-2 animation">VIEW ALL BOOKS</button>
              </a>
            </div>
            <!-- /View all Button -->
          </div>
          <!-- /Container -->
        </div>
        <!-- /Container-fluid -->
      </section>
      <!-- Best Selling Books -->

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
        <div class="container p-5">
          
          <!-- INCLUDE HOME-SUBSCRIBE.PHP -->

          <?php include 'home-subscribe.php';?>

        </div>
        <!-- /Container -->
      </section>
      <!-- /Subscribe Now -->

      <section id="popular-authors">
        <div class="container-fluid py-5">
          <div class="container">

            <!-- HEADER -->

            <div class="text-box pt-5 pb-4">
              <h2>Most Popular Authors</h2>
            </div>
            <div class="row gy-5 py-5">
  
              <!-- AUTHOR 1 -->
  
              <div class="col-6 col-md-3 text-center animation d-flex align-items-stretch justify-content-center">
                  <div class="card shadow">
                    <img src="images/famousAuthors/JK_Rowling.jpg" alt="J.K. Rowling" class="card-img-top">
                    <div class="card-body author-text">
                      <h4 class="card-title">J.K. Rowling</h4>
                      <h6 class="card-text">17K PUBLISHED BOOKS</h6>
                      <div class="social-media">
                        <!-- FACEBOOK -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                        </svg>
                        <!-- INSTAGRAM -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                        </svg>
                        <!-- TWITTER -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                          <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                        </svg>
                      </div>
                    </div>
                    <a href="author-jk-rowling.php" class="stretched-link"></a>
                  </div>
              </div>
  
              <!-- AUTHOR 2 -->
  
              <div class="col-6 col-md-3 text-center animation d-flex align-items-stretch justify-content-center">
                  <div class="card shadow">
                    <img src="images/famousAuthors/George_Saunders.jpg" alt="George Saunders" class="card-img-top">
                    <div class="author-text card-body">
                      <h4 class="card-title">George Saunders</h4>
                      <h6 class="card-text">10K PUBLISHED BOOKS</h6>
                      <div class="social-media">
                        <!-- FACEBOOK -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                        </svg>
                        <!-- INSTAGRAM -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                        </svg>
                        <!-- TWITTER -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                          <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                        </svg>
                      </div>
                    </div>
                    <a href="#" class="stretched-link"></a>
                  </div>
              </div>
  
              <!-- AUTHOR 3 -->
  
              <div class="col-6 col-md-3 text-center animation d-flex align-items-stretch justify-content-center">
                  <div class="card shadow">
                    <img src="images/famousAuthors/Elif_Shafak.jpg" alt="Elif Shafak" class="card-img-top">
                    <div class="author-text card-body">
                      <h4 class="card-title">Elif Shafak</h4>
                      <h6 class="card-text">15K PUBLISHED BOOKS</h6>
                      <div class="social-media">
                        <!-- FACEBOOK -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                        </svg>
                        <!-- INSTAGRAM -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                        </svg>
                        <!-- TWITTER -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                          <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                        </svg>
                      </div>
                    </div>
                    <a href="#" class="stretched-link"></a>
                  </div>
              </div>
  
              <!-- AUTHOR 4 -->
  
              <div class="col-6 col-md-3 text-center animation d-flex align-items-stretch justify-content-center">
                  <div class="card shadow">
                    <img src="images/famousAuthors/Alice_Walker.jpg" alt="Alice Walker" class="card-img-top">
                    <div class="author-text card-body">
                      <h4 class="card-title">Alice Walker</h4>
                      <h6 class="card-text">9K PUBLISHED BOOKS</h6>
                      <div class="social-media">
                        <!-- FACEBOOK -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                        </svg>
                        <!-- INSTAGRAM -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                        </svg>
                        <!-- TWITTER -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
                          <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                        </svg>
                      </div>
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
      <!-- /Popular Authors -->

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

    <!-- Footer !COPY THIS! -->

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






    <!-- Bootstrap Min Bundle JS. !DO NOT TOUCH! -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

  </body>
</html>
