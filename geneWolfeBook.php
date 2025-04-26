<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gene Wolfe's Book</title>

    <!-- Bootstrap Min Bundle CSS. !DO NOT TOUCH! -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    
    <!-- Link CSS -->
    <link rel="stylesheet" href="css/master.css" type="text/css" />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/geneWolfeBook.css" />


    <!-- Link Bootstrap Icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />

    <!-- Poppins font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />

    <!-- For social media logo -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
  </head>
  <body>
    <!-- Header -->

    <header class="navbar navbar-expand-lg navbar-dark sticky-top bg-dark p-3">
      <div class="container">
        
        <!-- INCLUDE LIBRARY-HEADER.PHP -->

        <?php include 'library-header.php'; ?>

      </div>
      <!-- /Container -->
    </header>

    <main>
      <div class="container-fluid">
        <div class="container d-flex align-items-center justify-content-center">
          <div class="content border shadow rounded-4 py-3 px-5 mb-5">
            <h2 class="pt-4 pb-5 fw-bold">Gene Wolfe: The Shadow of The Torturer</h2>
            <div class="row gy-4 d-flex align-items-center justify-content-center">
              <div class="col-xl-3 col-md-4">
                <img
                  src="images/new-books/book-one.jpg"
                  alt=""
                  class="img-fluid shadow border rounded-3"
                />
                <!--/Img-fluid-->  
                <div class="view-all-btn text-center mt-2 py-2">
                  <a href="#">
                    <button type="button" class="btn btn-primary animation">READ NOW</button>
                  </a>
                </div>
                <!-- /Read now button -->
              </div>
              <!-- col-xl-3 -->
              <div class="col-xl-9 col-md-8">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td>Authors</td>
                        <td>Gene Wolfe</td>
                      </tr>
                      <!-- table-secondary -->
                      <tr class="table-custom">
                        <td>Year</td>
                        <td>1980</td>
                      </tr>
                      <tr>
                        <td>Publishers</td>
                        <td>Simon & Schuster</td>
                      </tr>
                      <!-- table-secondary -->
                      <tr class="table-custom">
                        <td>Categories</td>
                        <td>Fantasy</td>
                      </tr>
                      <tr>
                        <td>Publication</td>
                        <td>United States</td>
                      </tr>
                      <!-- table-secondary -->
                      <tr class="table-custom">
                        <td>IBSN</td>
                        <td>0-671-25325-5</td>
                      </tr>
                      <tr>
                        <td>OCLC</td>
                        <td>5563965</td>
                      </tr>
                      <tr class="table-custom">
                        <td>Book Status</td>
                        <td>
                          <div class="book-status">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <td>ID</td>
                                  <td>Status</td>
                                </tr>
                                <tr>
                                  <td>7177</td>
                                  <td>Available</td>
                                </tr>
                                <tr>
                                  <td>7178</td>
                                  <td>Available</td>
                                </tr>
                                <tr>
                                  <td>7179</td>
                                  <td>Available</td>
                                </tr>
                                <tr>
                                  <td>7180</td>
                                  <td>Available</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </td>
                      </tr>
                      <!-- table-secondary -->
                    </tbody>
                  </table>
                  <!-- table -->
              </div>
               <!-- col-xl-9 -->
            </div>
            <!-- /Row -->
          </div>
          <!-- /Content -->
        </div>
        <!-- container -->
      </div>
      <!-- /Container-fluid -->
    </main>

    <!-- Footer -->

    <footer class="bg-dark">
      <div class="container-fluid">
        <div
          class="container d-flex flex-wrap justify-content-between align-items-center py-4"
        >
          
          <!-- INCLUDE FOOTER.PHP -->

          <?php include 'footer.php';?>
          
        </div>
        <!-- /Container -->
      </div>
      <!-- /Container-fluid -->
    </footer>

    <!-- Bootstrap Min Bundle JS. !DO NOT TOUCH! -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
