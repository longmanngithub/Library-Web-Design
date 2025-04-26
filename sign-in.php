<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in | Library</title>

    <!-- Bootstrap Min Bundle CSS. !DO NOT TOUCH! -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"/>

    <!-- Link CSS -->
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/sign-in.css">
    
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

    <!-- Login Form -->

    <main class="form-signin w-100 m-auto mt-5 mb-5">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="row border rounded-5 p-3 bg-white shadow box-area">

                <!-- LEFT BOX -->
                <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column u-image left-box">
                    <!-- INSERT BACKGROUND IMG IN CSS -->
                </div>

                <!-- RIGHT BOX -->
                <div class="col-md-6 right-box">
                    <div class="row align-items-center">
                        <!-- HEADER -->
                        <div class="header-text mb-4">
                            <h2>Hello, again</h2>
                            <p>Welcome back to <span style="color: var(--main-color);">OUR </span>library.</p>
                        </div>
                        <form action="library.php" method="post" class="needs-validation" novalidate id="login-form">
                            <!-- EMAIL -->
                            <div class="form-email">
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control bg-light fs-6" id="floatingInput" placeholder="name@example.com" required>
                                    <label for="floatingInput">Email address</label>
                                    <div class="invalid-feedback">
                                        Please enter a valid email address
                                    </div>
                                </div>
                            </div>
                            <!-- PASSWORD -->
                            <div class="form-password">
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control bg-light fs-6" id="floatingPassword" placeholder="Password" required>
                                    <label for="floatingPassword">Password</label>
                                    <div class="invalid-feedback">
                                      Password is required
                                    </div>
                                </div>
                            </div>
                            <!-- REMEMBER ME & FORGOT PASSWORD -->
                            <div class="input-group mt-2 mb-3 d-flex justify-content-between">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="formCheck">
                                    <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
                                </div>
                                <div class="forgot">
                                    <small><a href="forgot.php">Forgot Password?</a></small>
                                </div>
                            </div>
                            <!-- LOGIN -->
                            <div class="input-group">
                                <button type="submit" class="btn btn-lg btn-primary w-100 fs-6 animation" id="submit-btn">Login</button>
                            </div>
                        </form>
                        <!-- /Form -->
                        
                        <!-- HORIZONTAL LINE -->
                        <div class="row-md">
                            <hr class="my-4"/>
                        </div>
                        <!-- THIRD PARTY LOGINS -->
                        <h2 class="fs-5 fw-bold mb-3">Or use a third-party</h2>
                        <!-- GOOGLE -->
                        <div class="input-group mb-2">
                            <button class="btn btn-lg btn-light w-100 fs-6 animation">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 0 24 24" width="20"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/><path d="M1 1h22v22H1z" fill="none"/></svg>
                                <small class="ms-2">Sign in with Google</small>
                            </button>
                        </div>
                        <!-- FACEBOOK -->
                        <div class="input-group mb-2">
                            <button class="btn btn-lg w-100 fs-6 animation" style="background-color: #3367d1;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                                </svg>
                                <small class="ms-2 white-font">Sign in with Facebook</small>
                            </button>
                        </div>
                        <!-- APPLE -->
                        <div class="input-group mb-3">
                            <button class="btn btn-lg btn-light w-100 fs-6 animation" style="background-color: #111;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-apple" viewBox="0 0 16 16">
                                    <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516s1.52.087 2.475-1.258.762-2.391.728-2.43m3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422s1.675-2.789 1.698-2.854-.597-.79-1.254-1.157a3.7 3.7 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56s.625 1.924 1.273 2.796c.576.984 1.34 1.667 1.659 1.899s1.219.386 1.843.067c.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758q.52-1.185.473-1.282"/>
                                    <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516s1.52.087 2.475-1.258.762-2.391.728-2.43m3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422s1.675-2.789 1.698-2.854-.597-.79-1.254-1.157a3.7 3.7 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56s.625 1.924 1.273 2.796c.576.984 1.34 1.667 1.659 1.899s1.219.386 1.843.067c.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758q.52-1.185.473-1.282"/>
                                </svg>
                                <small class="ms-2 white-font">Sign in with Apple</small>
                            </button>
                        </div>
                        <!-- SIGN UP -->
                        <div class="row">
                            <small>Don't have an account? <a href="sign-up.php">Sign Up</a></small>
                        </div>

                    </div>
                    <!-- /Row -->
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
    <script src="js/sign-in.js"></script>
    
</body>
</html>