<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password | Library</title>

    <!-- Bootstrap Min Bundle CSS. !DO NOT TOUCH! -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"/>
        
    <!-- Link CSS -->
    <link rel="stylesheet" href="css/master.css" type="text/css">
    <link rel="stylesheet" href="css/forgot-success.css" type="text/css">
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

            <?php include 'header.php';?>

        </div>
      <!-- /Container -->
    </header>

    <!-- Forgot Password Page -->

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
                            <h2>Reset password</h2>
                            <p>Enter your new password.</p>
                        </div>
                        <form action="sign-in.php" method="post" class="needs-validation" novalidate id="forgot-form">
                            <!-- PASSWORD -->
                            <div class="form-password">
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control bg-light fs-6" id="floatingPassword" placeholder="Password" required>
                                    <label for="floatingPassword">New password</label>
                                    <div class="invalid-feedback">
                                      Password is required
                                    </div>
                                </div>
                            </div>
                            <!-- CONFIRM PASSWORD -->
                            <div class="form-confirm-password">
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control bg-light fs-6" id="floatingConfirmPassword" placeholder="Password" required>
                                    <label for="floatingConfirmPassword">Confirm new password</label>
                                    <div class="invalid-feedback">
                                      Password does not match
                                    </div>
                                </div>
                            </div>
                            <!-- CONTINUE BUTTON -->
                            <div class="input-group">
                                <button type="submit" class="btn btn-lg btn-primary w-100 fs-6 animation" id="submit-btn">Confirm</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <!-- /Row -->
        </div>
        <!-- /Container -->
    </main>

    <!-- MODAL -->
    
    <div class="modal modal-sheet fade bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="modal-success">
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header border-bottom-0">
                    <h1 class="modal-title fs-5"></h1>
                    <a href="sign-in.php">
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
                        <h4>Password reset successfully</h4>
                        <p>Please login with your <strong>new</strong> password.</p>
                    </div>
                </div>
                <a class="modal-footer flex-column align-items-stretch w-100 gap-2 pb-3 border-top-0" href="sign-in.php" style="text-decoration: none;">
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

                <?php include 'footer.php';?>

            </div>
            <!-- /Container -->
        </div>
        <!-- /Container-fluid -->
    </footer>






    <!-- Bootstrap Min Bundle JS. !DO NOT TOUCH! -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- Link JS -->
    <script src="js/forgot-success.js"></script>
    
</body>
</html>