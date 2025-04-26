<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms | Library</title>

    <!-- Bootstrap Min Bundle CSS. !DO NOT TOUCH! -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"/>
    
    <!-- Link CSS -->
    <link rel="stylesheet" href="css/master.css" type="text/css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/booking.css" type="text/css">

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

  <header class="navbar navbar-expand-xl navbar-dark sticky-top bg-dark p-3">
      <div class="container">

        <!-- INCLUDE HEADER.PHP -->

        <?php include 'header.php' ?>

      </div>
      <!-- /Container -->
  </header>

    
    <main id="room-page">
      <!-- HEADER -->
      <div class="container py-5 mb-5">
        <div class="text-box py-5">
          <br><br><br><h2>Our Spaces & <strong>Rooms</strong></h2>
        </div>
      </div>

        <div class="container-fluid py-5">
          <div class="container">



            <div class="room-content">
                <h2 class="fw-bold">Explore Our Facilities</h2>
                <div class="row py-5 gy-5">

                    <!-- CONTENT 1 -->
                    <div class="col-md-12 shadow border rounded-5" id="room-1">
                        <div class="row p-3">
                            <!-- PICTURE -->
                            <div class="col-md-6 rounded-4 u-image" id="room-img-1">
                                <!-- INSERT PICTURE IN CSS -->
                            </div>
                            <!-- TEXTBOX -->
                            <div class="col-md-6 p-5">
                                <h6>Reading Room</h6>
                                <h4 class="py-3">Silent Study Space</h4>
                                <p class="text-secondary">Our quiet reading rooms are perfect for those who enjoy a peaceful, solitary environment. With their large windows and plush, soft furniture, these rooms offer a comfortable and relaxed atmosphere for your reading pleasure.</p>
                                <div class="box-icons d-flex align-items-center pt-1 pb-4">
                                    <i class="fa-solid fa-volume-xmark fa-2x me-2"></i>
                                    <img src="images/rooms/no-phone.svg" class="me-2" alt="" width="32" height="32">
                                    <img src="images/rooms/no-food.png" class="me-2" alt="" width="36" height="36">
                                    <i class="fa-solid fa-laptop fa-2x"></i>
                                </div>
                                <a href="library-booking.php">
                                  <button class="btn btn-primary animation" href="#"> Book Now </button>
                                </a>
                            </div>
                        </div>
                        <!-- /Row -->
                    </div>

                    <!-- CONTENT 2 -->
                    <div class="col-md-12 shadow border rounded-5" id="room-2">
                        <div class="row p-3">
                            <!-- TEXTBOX -->
                            <div class="col-md-6 p-5">
                                <h6>Group Study Rooms</h6>
                                <h4 class="py-3">Collaborative Study Spaces</h4>
                                <p class="text-secondary">Our group study rooms are perfect for those who enjoy a collaborative and supportive environment. With their large windows and plush, soft furniture, these rooms offer a comfortable and relaxed atmosphere for your studying pleasure.</p>
                                <div class="box-icons d-flex align-items-center pt-1 pb-4">
                                    <i class="fa-solid fa-volume-xmark fa-2x me-2"></i>
                                    <img src="images/rooms/no-phone.svg" class="me-2" alt="" width="32" height="32">
                                    <img src="images/rooms/no-food.png" class="me-2" alt="" width="36" height="36">
                                    <i class="fa-solid fa-laptop fa-2x"></i>
                                </div>
                                <a href="library-booking.php">
                                  <button class="btn btn-primary animation" href="#"> Book Now </button>
                                </a>
                              </div>
                            <!-- PICTURE -->
                            <div class="col-md-6 rounded-4 u-image" id="room-img-2">
                                <!-- INSERT PICTURE IN CSS -->
                            </div>
                        
                        </div>
                    </div>

                    <!-- CONTENT 3 -->
                    <div class="col-md-12 shadow border rounded-5" id="room-3">
                        <div class="row p-3">
                            <!-- PICTURE -->
                            <div class="col-md-6 rounded-4 u-image" id="room-img-3">
                                <!-- INSERT PICTURE IN CSS -->
                            </div>
                            <!-- TEXTBOX -->
                            <div class="col-md-6 p-5">
                                <h6>Silent Study Zone</h6>
                                <h4 class="py-3">Zero-Noise Study Spaces</h4>
                                <p class="text-secondary">Our silent study zones are perfect for those who enjoy a quiet, solitary environment. With their large windows and plush, soft furniture, these rooms offer a comfortable and relaxed atmosphere for your studying pleasure.</p>
                                <div class="box-icons d-flex align-items-center pt-1 pb-4">
                                    <i class="fa-solid fa-volume-xmark fa-2x me-2"></i>
                                    <img src="images/rooms/no-phone.svg" class="me-2" alt="" width="32" height="32">
                                    <img src="images/rooms/no-food.png" class="me-2" alt="" width="36" height="36">
                                    <i class="fa-solid fa-laptop fa-2x"></i>
                                </div>
                                <a href="library-booking.php">
                                  <button class="btn btn-primary animation" href="#"> Book Now </button>
                                </a>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /Row -->
            </div>
            <!-- /Container -->
        </div>
        <!-- /Container-fluid -->
    </main>
    <!-- /Popular Authors -->

    <section id="library-counter">
      <div class="container-fluid pt-5">
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

          <?php include 'home-booking.php'; ?>

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

        </div>
        <!-- /Container -->
      </div>
      <!-- /Container-fluid -->
    </section>
    <!-- /Subscribe Now -->

    </div>

      <!-- INCLUDE FOOTER.PHP -->
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


</body>
</html>