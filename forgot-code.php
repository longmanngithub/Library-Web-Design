<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification Code | Library</title>

    <!-- Bootstrap Min Bundle CSS. !DO NOT TOUCH! -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"/>

    <!-- Link CSS -->
    <link rel="stylesheet" href="css/master.css" type="text/css">
    <link rel="stylesheet" href="css/forgot-code.css" type="text/css">
    <link rel="stylesheet" href="css/header.css">

    <!-- Link Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Poppins font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"/>



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

    <!-- Verification Code -->

    <main class="w-100 m-auto" id="forgot-page">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="row row border rounded-5 p-3 bg-white shadow box-area">
                
                <!-- LEFT BOX -->
                <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column u-image left-box">
                    <!-- INSERT IMAGE IN CSS -->
                </div>

                <!-- RIGHT BOX -->
                <div class="col-md-6 right-box">
                    <div class="row align-items-center">
                        <!-- HEADER -->
                        <div class="header-text mb-4">
                            <h2>Forgot password</h2>
                            <p>Enter your verification code to reset the password.</p>
                        </div>
                        <form action="forgot-success.php" method="post" class="needs-validation" novalidate id="forgot-form">
                            <!-- VERIFICATION CODE -->
                            <div class="form-floating mb-3">
                                <div class="row">
                                    <div class="col-12 d-flex align-items-center justify-content-center">
                                        <input type="number" class="form-control bg-light fs-6 me-2 text-center" pattern="[0-9]" maxlength="1" id="floatingInput-1">
                                        <input type="number" class="form-control bg-light fs-6 me-2 text-center" pattern="[0-9]" maxlength="1" id="floatingInput-2" disabled> 
                                        <input type="number" class="form-control bg-light fs-6 text-center me-3" pattern="[0-9]" maxlength="1" id="floatingInput-3" disabled>
                                        <input type="number" class="form-control bg-light fs-6 me-2 text-center" pattern="[0-9]" maxlength="1" id="floatingInput-4" disabled>
                                        <input type="number" class="form-control bg-light fs-6 me-2 text-center" pattern="[0-9]" maxlength="1" id="floatingInput-5" disabled>
                                        <input type="number" class="form-control bg-light fs-6 text-center" pattern="[0-9]" maxlength="1" id="floatingInput-6" disabled>
                                    </div>
                                </div>
                            </div>
                            <!-- CONTINUE BUTTON -->
                            <div class="input-group">
                                <button class="btn btn-lg btn-primary w-100 fs-6 animation" id="submit-btn">Verify code</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <!-- /Row -->
        </div>
        <!-- /Container -->
    </main>

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

    <!-- Link JS -->
    <script src="js/forgot-code.js"></script>
    
</body>
</html>