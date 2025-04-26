<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription | Library</title>

    <!-- Bootstrap Min Bundle CSS. !DO NOT TOUCH! -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"/>
    
    <!-- Link CSS -->
    <link rel="stylesheet" href="css/master.css" type="text/css">
    <link rel="stylesheet" href="css/subscription.css" type="text/css">
    <link rel="stylesheet" href="css/header.css">

    <!-- Link Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Poppins font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"/>



</head>
<body>

    <!-- CHECK SYMBOL -->
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="check" viewBox="0 0 16 16">
        <title>Check</title>
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
    </symbol>
    </svg>

    <!-- Header -->

    <header class="navbar navbar-expand-xl navbar-dark sticky-top bg-dark p-3">
        <div class="container">
            
            <!-- INCLUDE HEADER.PHP -->

            <?php include 'header.php';?>
            
        </div>
      <!-- /Container -->
    </header>

    <!-- Subscription Page -->
    
    <div class="container-fluid">

        <div class="container py-5" id="subscription">

            <!-- SUBSCRIPTION HEADER -->
    
            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-4 fw-bold text-body-emphasis">Subscription Plans</h1>
                <p class="fs-5 text-body-secondary">We have three plans for you to choose from, depending on your reading style. The plans differ in the number of books per shipment and access to features.</p>
            </div>
            
            <main>
                <!-- SUBSCRIPTION PLANS -->
                <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                    <!-- FREE PLAN -->
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal">Free</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">$0<small class="text-body-secondary fw-light">/mo</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>1 eBook delivery</li>
                                    <li>Limited access</li>
                                    <li>No print & copy</li>
                                    <li>No borrow</li>
                                </ul>
                                <!-- /List -->
                                <a href="sign-up.php">
                                    <button type="button" class="w-100 btn btn-lg btn-outline-primary animation">Sign up for free</button>
                                </a>
                                <!-- /Button -->
                            </div>
                            <!-- /Card-body -->
                        </div>
                        <!-- /Card -->
                    </div>
                    <!-- /Col -->
    
                    <!-- PLUS PLAN -->
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal">Plus</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">$4.99<small class="text-body-secondary fw-light">/mo</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>10 eBooks delivery</li>
                                    <li>Limited access</li>
                                    <li>10 Prints & copies</li>
                                    <li>7 Day deadline for borrow</li>
                                </ul>
                                <!-- List -->
                                <a href="transaction-plus.php">
                                    <button type="button" class="w-100 btn btn-lg btn-primary animation">Subscribe</button>
                                </a>
                                <!-- /Button -->
                            </div>
                            <!-- /Card-body -->
                        </div>
                        <!-- /Card -->
                    </div>
                    <!-- /Col -->
    
                    <!-- PREMIUM PLAN -->
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm custom-border">
                            <div class="card-header py-3 custom-text-bg custom-border">
                                <h4 class="my-0 fw-normal">Premium</h4>
                            </div>
                            <div class="card-body">
                                <h1 class="card-title pricing-card-title">$9.99<small class="text-body-secondary fw-light">/mo</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>Unlimited eBooks</li>
                                    <li>Unlimited access</li>
                                    <li>Unlimited prints & copies</li>
                                    <li>No deadline for borrow</li>
                                </ul>
                                <!-- /List -->
                                <a href="transaction-premium.php">
                                    <button type="button" class="w-100 btn btn-lg btn-primary animation">Subscribe</button>
                                </a>
                                <!-- /Button -->
                            </div>
                            <!-- /Card-body -->
                        </div>
                        <!-- /Card -->
                    </div>
                    <!-- /Col -->
                </div>
                <!-- /Row -->
    
                <h2 class="display-6 text-center mb-4">Compare plans</h2>
    
                <!-- COMPARE PLANS TABLE -->
                <div class="table-responsive">
                    <table class="table text-center">
                        <thead>
                            <!-- TABLE HEADER -->
                            <tr>
                                <th style="width: 34%;"></th>
                                <th style="width: 22%;">Free</th>
                                <th style="width: 22%;">Plus</th>
                                <th style="width: 22%;">Premium</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- EBOOK CATEGORY -->
                            <tr>
                                <th scope="row" class="text-start">eBook</th>
                                <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                                <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                                <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                            </tr>
                            <!-- AUDIOBOOK CATEGORY -->
                            <tr>
                                <th scope="row" class="text-start">Audiobook</th>
                                <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                                <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                                <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                            </tr>
                        </tbody>
    
                        <tbody>
                            <!-- VIDEO CATEGORY -->
                            <tr>
                                <th scope="row" class="text-start">Video</th>
                                <td></td>
                                <td></td>
                                <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                            </tr>
                            <!-- MAGAZINE CATEGORY -->
                            <tr>
                                <th scope="row" class="text-start">Magazine</th>
                                <td></td>
                                <td></td>
                                <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                            </tr>
                            <!-- MUSIC CATEGORY -->
                            <tr>
                                <th scope="row" class="text-start">Music</th>
                                <td></td>
                                <td></td>
                                <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                            </tr>
                            <!-- PRINT/COPY CATEGORY -->
                            <tr>
                                <th scope="row" class="text-start">Print/Copy</th>
                                <td></td>
                                <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                                <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                            </tr>
                            <!-- BORROW CATEGORY -->
                            <tr>
                                <th scope="row" class="text-start">Borrow</th>
                                <td></td>
                                <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                                <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                            </tr>
                        </tbody>
                        <!-- /Tbody -->
                    </table>
                    <!-- /Table -->
                </div>
                <!-- /Table-responsive -->
            </main>
            <!-- /Main -->
    
        </div>
        <!-- /Container -->
    </div>
    <!-- /Container-fluid -->

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