<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print/Copy History | Library</title>

    <!-- Bootstrap Min Bundle CSS. !DO NOT TOUCH! -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"/>

    <!-- Link CSS -->
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/print.css">
    
    <!-- Link Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Poppins font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"/>



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
    
    
    <!-- Borrow Request -->

    <main id="borrow-page">
      <!-- HEADER -->
      <div class="container py-5">
        <div class="text-box">
          <h2 class="fw-bold">Library Management</h2>
        </div>
      </div>

      <div class="container border rounded-4 shadow mb-5">



        <div class="room-content p-4">

            <h3 class="fw-bold" style="color: var(--main-color);">Print/Copy History</h3>

            <div class="select-option py-4">
                <select class="form-select" aria-label="Default select example">
                  <option disabled selected>Types</option>
                  <option value="science">Prints</option>
                  <option value="math">Copies</option>
                </select>
            </div>
            
            <div class="row py-3 gy-3">

                <!-- CONTENT 1 -->
                <div class="col-md-12 shadow border rounded-4" id="borrow-book-1">
                    <div class="row p-3">
                        <!-- PICTURE -->
                        <div class="col-xl-2 col-lg-3 col-md-4 rounded-3 u-image" id="borrow-img-1">
                            <!-- INSERT PICTURE IN CSS -->
                        </div>
                        <!-- TEXTBOX -->
                        <div class="col-xl-10 col-lg-9 col-md-8 px-4 py-2">
                            <h6>J.K. Rowling</h6>
                            <h4 class="py-3">Harry Potter and the Deathly Hallows</h4>
                            <p class="text-secondary">Printed date: August 5, 2024</p>
                            <a href="#">
                              <button class="btn btn-primary animation" href="#"> View Book </button>
                            </a>
                        </div>
                    </div>
                    <!-- /Row -->
                </div>

                <!-- CONTENT 2 -->
                <div class="col-md-12 shadow border rounded-4" id="borrow-book-2">
                    <div class="row p-3">
                        <!-- PICTURE -->
                        <div class="col-xl-2 col-lg-3 col-md-4 rounded-3 u-image" id="borrow-img-2">
                            <!-- INSERT PICTURE IN CSS -->
                        </div>
                        <!-- TEXTBOX -->
                        <div class="col-xl-10 col-lg-9 col-md-8 px-4 py-2">
                            <h6>Morgan Housel</h6>
                            <h4 class="py-3">The Psychology of Money: Timeless lessons on wealth, greed, and happiness</h4>
                            <p class="text-secondary">Printed date: August 5, 2024</p>
                            <a href="#">
                              <button class="btn btn-primary animation" href="#"> View Book </button>
                            </a>
                        </div>
                    </div>
                    <!-- /Row -->
                </div>

                <!-- CONTENT 2 -->
                <div class="col-md-12 shadow border rounded-4" id="borrow-book-3">
                    <div class="row p-3">
                        <!-- PICTURE -->
                        <div class="col-xl-2 col-lg-3 col-md-4 rounded-3 u-image" id="borrow-img-3">
                            <!-- INSERT PICTURE IN CSS -->
                        </div>
                        <!-- TEXTBOX -->
                        <div class="col-xl-10 col-lg-9 col-md-8 px-4 py-2">
                            <h6>James Clear</h6>
                            <h4 class="py-3">Atomic Habits: An Easy & Proven Way to Build Good Habits & Break Bad Ones</h4>
                            <p class="text-secondary">Printed date: August 5, 2024</p>
                            <a href="#">
                              <button class="btn btn-primary animation" href="#"> View Book </button>
                            </a>
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





    <!-- Bootstrap Min Bundle JS. !DO NOT TOUCH! -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
</body>
</html>