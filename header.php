<!-- LOGO -->
<a href="/" class="navbar-brand">
    <img src="images/library-logo.svg" class="bi me-2" width="40" height="32">
</a>
<!-- HAMBURGER MENU -->
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<!-- MENU -->
<div class="collapse navbar-collapse" id="navbarMenu">
    <!-- NAVIGATION BAR -->
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a href="home.php" class="nav-link px-2 text-white">Home</a></li>
        <li class="nav-item"><a href="booking.php" class="nav-link px-2 text-white">Booking</a></li>
        <!-- DROPDOWN -->
        <li class="nav-item"><a href="authors.php" class="nav-link px-2 text-white">Authors</a>
        </li>
        <li class="nav-item"><a href="subscription.php" class="nav-link px-2 text-white">Subscription</a></li>
        <li class="nav-item dropdown"><a href="library.php" class="nav-link dropdown-toggle px-2 text-white" data-bs-toggle="dropdown" aria-expanded="false">Library</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="library.php">Library</a></li>
                <li><a class="dropdown-item" href="borrow.php">Borrow request</a></li>
                <li><a class="dropdown-item" href="print.php">Print/Copy history</a></li>
                <li><a class="dropdown-item" href="library-booking.php">Room booking</a></li>
            </ul>
        </li>
    </ul>
    <!-- SEARCH BOX -->
    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search" method="post">
        <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
    </form>
    <!-- LOGIN/SIGNUP BUTTONS -->
    <div class="text-end d-flex align-items-center justify-content-center">
        <a href="sign-in.php">
            <button type="button" class="btn btn-outline-light me-2">Login</button>
        </a>
        <a href="sign-up.php">
            <button type="button" class="btn btn-warning">Sign-up</button>
        </a>
    </div>
</div>
<!-- /Collapse -->