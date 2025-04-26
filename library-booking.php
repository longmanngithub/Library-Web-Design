<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Booking | Library</title>

    <!-- Bootstrap Min Bundle CSS. !DO NOT TOUCH! -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"/>

    <!-- Link CSS -->
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/library-booking.css">
    
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

            <?php include 'library-header.php';?>

        </div>
        <!-- /Container -->
        
    </header>
    
    
    <!-- Library Room Booking -->

    <main id="library-booking">
      <!-- HEADER -->
      <div class="container py-5">
        <div class="text-box">
          <h2 class="fw-bold">Library Management</h2>
        </div>
      </div>

      <div class="container border rounded-4 shadow mb-5">



        <div class="room-content p-4">

            <h3 class="fw-bold" style="color: var(--main-color);">Room Booking</h3>

            <div class="select-option py-4">
                <select class="form-select" aria-label="Default select example">
                  <option disabled selected>Type</option>
                  <option value="science">Individual room</option>
                  <option value="math">Group study room</option>
                </select>
            </div>
            
            <div class="row py-3 d-flex align-items-center justify-content-center gap-3">

                <!-- CONTENT 1 -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 shadow border rounded-4 animation">
                    <div class="row p-3">
                        <!-- PICTURE -->
                        <div class="col-12 rounded-3 u-image" id="room-img-1">
                            <!-- INSERT PICTURE IN CSS -->
                        </div>
                        <!-- TEXTBOX -->
                        <div class="col-12 px-4 py-2">
                            <h4 class="py-3">Individual Room 1</h4>
                            <p class="text-secondary">For individuals who need a quiet and comfy room.</p>
                            <div class="box-icons d-flex align-items-center pt-1 pb-4">
                                <i class="fa-solid fa-volume-xmark fa-lg me-2"></i>
                                <img src="images/rooms/no-phone.svg" class="me-2" alt="" width="24" height="24">
                                <img src="images/rooms/no-food.png" class="me-2" alt="" width="26" height="26">
                                <i class="fa-solid fa-laptop fa-xl"></i>
                            </div>
                            <button type="button" class="btn btn-success" style="pointer-events: none;">Available</button>
                            <button class="btn btn-primary animation" data-bs-toggle="modal" data-bs-target="#modal-success"> Book </button>
                        </div>
                    </div>
                    <!-- /Row -->
                </div>

                <!-- CONTENT 2 -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 shadow border rounded-4 animation">
                    <div class="row p-3">
                        <!-- PICTURE -->
                        <div class="col-12 rounded-3 u-image" id="room-img-2">
                            <!-- INSERT PICTURE IN CSS -->
                        </div>
                        <!-- TEXTBOX -->
                        <div class="col-12 px-4 py-2">
                            <h4 class="py-3">Individual Room 2</h4>
                            <p class="text-secondary">For individuals who need a quiet and comfy room.</p>
                            <div class="box-icons d-flex align-items-center pt-1 pb-4">
                                <i class="fa-solid fa-volume-xmark fa-lg me-2"></i>
                                <img src="images/rooms/no-phone.svg" class="me-2" alt="" width="24" height="24">
                                <img src="images/rooms/no-food.png" class="me-2" alt="" width="26" height="26">
                                <i class="fa-solid fa-laptop fa-xl"></i>
                            </div>
                            <button type="button" class="btn btn-success" style="pointer-events: none;">Available</button>
                            <button class="btn btn-primary animation" data-bs-toggle="modal" data-bs-target="#modal-success"> Book </button>
                        </div>
                    </div>
                    <!-- /Row -->
                </div>

                <!-- CONTENT 3 -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 shadow border rounded-4 animation">
                    <div class="row p-3">
                        <!-- PICTURE -->
                        <div class="col-12 rounded-3 u-image" id="room-img-3">
                            <!-- INSERT PICTURE IN CSS -->
                        </div>
                        <!-- TEXTBOX -->
                        <div class="col-12 px-4 py-2">
                            <h4 class="py-3">Group Room 1</h4>
                            <p class="text-secondary">For groups that need a spacious and silent room.</p>
                            <div class="box-icons d-flex align-items-center pt-1 pb-4">
                                <i class="fa-solid fa-volume-xmark fa-lg me-2"></i>
                                <img src="images/rooms/no-phone.svg" class="me-2" alt="" width="24" height="24">
                                <img src="images/rooms/no-food.png" class="me-2" alt="" width="26" height="26">
                                <i class="fa-solid fa-laptop fa-xl"></i>
                            </div>
                            <button type="button" class="btn btn-danger" style="pointer-events: none;">Not Available</button>
                            <button class="btn btn-secondary animation" data-bs-toggle="modal" data-bs-target="#modal-success" disabled> Book </button>
                        </div>
                    </div>
                    <!-- /Row -->
                </div>

                <!-- CONTENT 4 -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 shadow border rounded-4 animation">
                    <div class="row p-3">
                        <!-- PICTURE -->
                        <div class="col-12 rounded-3 u-image" id="room-img-4">
                            <!-- INSERT PICTURE IN CSS -->
                        </div>
                        <!-- TEXTBOX -->
                        <div class="col-12 px-4 py-2">
                            <h4 class="py-3">Individual Room 3</h4>
                            <p class="text-secondary">For individuals who need a quiet and comfy room.</p>
                            <div class="box-icons d-flex align-items-center pt-1 pb-4">
                                <i class="fa-solid fa-volume-xmark fa-lg me-2"></i>
                                <img src="images/rooms/no-phone.svg" class="me-2" alt="" width="24" height="24">
                                <img src="images/rooms/no-food.png" class="me-2" alt="" width="26" height="26">
                                <i class="fa-solid fa-laptop fa-xl"></i>
                            </div>
                            <button type="button" class="btn btn-danger" style="pointer-events: none;">Not Available</button>
                            <button class="btn btn-secondary animation" data-bs-toggle="modal" data-bs-target="#modal-success" disabled> Book </button>
                        </div>
                    </div>
                    <!-- /Row -->
                </div>

                <!-- CONTENT 5 -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 shadow border rounded-4 animation">
                    <div class="row p-3">
                        <!-- PICTURE -->
                        <div class="col-12 rounded-3 u-image" id="room-img-5">
                            <!-- INSERT PICTURE IN CSS -->
                        </div>
                        <!-- TEXTBOX -->
                        <div class="col-12 px-4 py-2">
                            <h4 class="py-3">Group Room 2</h4>
                            <p class="text-secondary">For groups that need a spacious and silent room.</p>
                            <div class="box-icons d-flex align-items-center pt-1 pb-4">
                                <i class="fa-solid fa-volume-xmark fa-lg me-2"></i>
                                <img src="images/rooms/no-phone.svg" class="me-2" alt="" width="24" height="24">
                                <img src="images/rooms/no-food.png" class="me-2" alt="" width="26" height="26">
                                <i class="fa-solid fa-laptop fa-xl"></i>
                            </div>
                            <button type="button" class="btn btn-success" style="pointer-events: none;">Available</button>
                            <button class="btn btn-primary animation" href="#"> Book </button>
                        </div>
                    </div>
                    <!-- /Row -->
                </div>

                <!-- CONTENT 6 -->
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 shadow border rounded-4 animation">
                    <div class="row p-3">
                        <!-- PICTURE -->
                        <div class="col-12 rounded-3 u-image" id="room-img-6">
                            <!-- INSERT PICTURE IN CSS -->
                        </div>
                        <!-- TEXTBOX -->
                        <div class="col-12 px-4 py-2">
                            <h4 class="py-3">Group Room 3</h4>
                            <p class="text-secondary">For groups that need a spacious and silent room.</p>
                            <div class="box-icons d-flex align-items-center pt-1 pb-4">
                                <i class="fa-solid fa-volume-xmark fa-lg me-2"></i>
                                <img src="images/rooms/no-phone.svg" class="me-2" alt="" width="24" height="24">
                                <img src="images/rooms/no-food.png" class="me-2" alt="" width="26" height="26">
                                <i class="fa-solid fa-laptop fa-xl"></i>
                            </div>
                            <button type="button" class="btn btn-success" style="pointer-events: none;">Available</button>
                            <button class="btn btn-primary animation" data-bs-toggle="modal" data-bs-target="#modal-success"> Book </button>
                        </div>
                    </div>
                    <!-- /Row -->
                </div>

            </div>
            <!-- /Row -->
        </div>
        <!-- /Container -->
    </main>
    <!-- /Popular Authors -->


    <!-- MODAL -->
    
    <div class="modal modal-sheet fade bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="modal-success">
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header border-bottom-0">
                    <h1 class="modal-title fs-5">Room Booking</h1>
                    <a href="library-booking.php">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </a>
                </div>
                <div class="modal-body py-0">
                    <div class="success-logo align-items-center justify-content-center d-flex py-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                        </svg>
                    </div>
                    <div class="success-message text-center">
                        <h4>Room booked successfully</h4>
                        <p>Please use the room accordingly.</p>
                    </div>
                </div>
                <a class="modal-footer flex-column align-items-stretch w-100 gap-2 pb-3 border-top-0" href="library-booking.php" style="text-decoration: none;">
                    <button type="button" class="btn btn-lg btn-primary" data-bs-dismiss="modal">Confirm</button>
                </a>
            </div>
        </div>
    </div>
    

    
    
    <!-- Footer -->

    <footer class="bg-dark">
        <div class="container-fluid">
            <div class="container d-flex flex-wrap justify-content-between align-items-center py-4">
                
                <!-- INCLUDE FOOTER.PHP -->

                <?php include 'footer.php'; ?>

            </div>
            <!-- /Container -->
        </div>
        <!-- /Container-fluid -->
    </footer>





    <!-- Bootstrap Min Bundle JS. !DO NOT TOUCH! -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
</body>
</html>