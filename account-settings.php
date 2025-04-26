<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Settings | Library</title>

    <!-- Bootstrap Min Bundle CSS. !DO NOT TOUCH! -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"/>

    <!-- Link CSS -->
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/account-settings.css">
    
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
    
    
    

    <!-- Account Settings -->

    <main id="account-settings">
        <div class="container light-style flex-grow-1 container-p-y mb-5">
            <h2 class="fw-bold py-5 mb-2">
                Account settings
            </h2>
            <div class="card overflow-hidden shadow rounded-4">
                <div class="row no-gutters row-bordered row-border-light">

                    <!-- TAB BAR -->
                    <div class="col-md-3 pt-0">
                        <div class="list-group list-group-flush account-settings-links">
                            <a class="list-group-item list-group-item-action active" data-toggle="list"
                                href="#account-info">Account info</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                                href="#change-password">Change password</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                                href="#subscription">Subscription</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                                href="#payment">Payment info</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                                href="#privacy">Privacy</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list"
                                href="#notifications">Notifications</a>
                        </div>
                    </div>

                    <!-- TAB CONTENT -->
                    <div class="col-md-9">
                        <div class="tab-content">
                            <!-- ACCOUNT INFO TAB -->
                            <div class="tab-pane fade active show py-4 px-3" id="account-info">
                                <div class="card-body media align-items-center d-flex">
                                    <!-- PROFILE PIC -->
                                    <img src="https://github.com/mdo.png" alt="" class="d-block ui-w-80 rounded-circle me-4">
                                    <!-- UPLOAD BUTTON -->
                                    <div class="media-body ml-4">
                                        <label class="btn btn-outline-primary">
                                            Upload new photo
                                            <input type="file" class="account-settings-fileinput">
                                        </label> &nbsp;
                                        <button type="button" class="btn btn-default md-btn-flat">Reset</button>
                                        <div class="text-light small mt-1">Allowed JPG, GIF or PNG. Max size of 800K</div>
                                    </div>
                                </div>
                                <hr class="border-light m-0">
                                <div class="card-body">
                                    <!-- FULL NAME -->
                                    <div class="form-group d-flex">
                                        <div class="form-group w-100 me-2">
                                            <label class="form-label">First name</label>
                                            <input type="text" class="form-control mb-3" value="John">
                                        </div>
                                        <div class="form-group w-100 ms-2">
                                            <label class="form-label">Last name</label>
                                            <input type="text" class="form-control mb-3" value="Appleseed">
                                        </div>
                                    </div>
                                    <!-- GENDER -->
                                    <div class="form-group">
                                        <label class="form-label">Gender</label>
                                        <select class="form-select mb-3">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option selected>Not set</option>
                                        </select>
                                    </div>
                                    <!-- BIRTHDAY -->
                                    <div class="form-group">
                                        <label class="form-label">Birthday</label>
                                        <input type="text" class="form-control mb-3" value="Not set">
                                    </div>
                                    <!-- EMAIL -->
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control mb-1" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" value="jappleseed@me.com">
                                        <div class="alert alert-warning mt-3">
                                            Your email is not confirmed. Please check your inbox.<br>
                                            <a href="javascript:void(0)">Resend confirmation</a>
                                        </div>
                                    </div>
                                    <!-- PHONE NUMBER -->
                                    <div class="form-group">
                                        <label class="form-label">Phone number</label>
                                        <input type="tel" inputmode="numeric" size="10" pattern="[0]{1}[1-9]{1}[0-9]{7,8}" minlength="9" maxlength="10" class="form-control mb-3" value="">
                                    </div>
                                    <!-- SAVE BUTTON -->
                                    <div class="form-button">
                                        <button type="button" class="btn btn-primary animation" data-bs-target="#modal-save" data-bs-toggle="modal">Save changes</button>&nbsp;
                                        <button type="button" class="btn btn-default animation">Cancel</button>
                                    </div>
                                </div>
                                <!-- /Card-body -->
                            </div>
                            <!-- PASSWORD TAB -->
                            <div class="tab-pane fade py-4 px-3" id="change-password">
                                <div class="card-body">
                                    <form action="/" method="post" class="needs-validation" novalidate id="password-form">
                                        <!-- CURRENT PASSWORD -->
                                        <div class="form-group">
                                            <label class="form-label">Current password</label>
                                            <input type="password" class="form-control mb-2" id="currentPassword" required>
                                            <div class="invalid-feedback">
                                                Current password is required
                                            </div>
                                        </div>
                                        <!-- NEW PASSWORD -->
                                        <div class="form-group">
                                            <label class="form-label mt-3">New password</label>
                                            <input type="password" class="form-control mb-2" id="newPassword" required>
                                            <div class="invalid-feedback">
                                                Please enter a new password
                                            </div>
                                        </div>
                                        <!-- CONFIRM NEW PASWORD -->
                                        <div class="form-group">
                                            <label class="form-label mt-3">Repeat new password</label>
                                            <input type="password" class="form-control mb-2" id="newPasswordConfirm" required>
                                            <div class="invalid-feedback">
                                                New password does not match
                                            </div>
                                        </div>
                                        <!-- BUTTON -->
                                        <button type="submit" class="btn btn-primary animation mt-3 mb-3">Change password</button>
                                    </form>
                                    <!-- /Form -->
                                </div>
                                <!-- /Card-body -->
                            </div>
                            <!-- SUBSCRIPTION TAB -->
                            <div class="tab-pane fade py-4 px-3" id="subscription">
                                <div class="card-body">
                                    <!-- SUBSCRIPTION PLAN -->
                                    <div class="form-group">
                                        <label class="form-label">Subscription plan</label>
                                        <input type="text" class="form-control mb-3" value="Premium Plan" readonly>
                                    </div>
                                    <!-- DATE -->
                                    <div class="form-group">
                                        <label class="form-label">Initial payment date</label>
                                        <input type="text" class="form-control mb-3" value="August 3, 2024" readonly>
                                    </div>
                                    <!-- NEXT DATE -->
                                    <div class="form-group">
                                        <label class="form-label">Next payment date</label>
                                        <input type="text" class="form-control mb-3" value="September 3, 2024" readonly>
                                    </div>
                                    <!-- BILLING -->
                                    <div class="form-group">
                                        <label class="form-label">Billing cycle</label>
                                        <input type="text" class="form-control mb-3" value="$7.99/mo" readonly>
                                    </div>
                                    <!-- BUTTON -->
                                    <button type="reset" class="btn btn-primary animation mb-3" data-bs-target="#modal-cancel-plan" data-bs-toggle="modal">Cancel plan</button>
                                </div>
                                <!-- /Card-body -->
                            </div>
                            <!-- PAYMENT INFO TAB -->
                            <div class="tab-pane fade py-4 px-3" id="payment">
                                <div class="card-body">
                                    <!-- PAYMENT METHOD -->
                                    <div class="form-group">
                                        <label class="form-label">Payment method</label>
                                        <input type="text" class="form-control mb-3" value="Credit/Debit Card" readonly>
                                    </div>
                                    <!-- CARD NUMBER -->
                                    <div class="form-group">
                                        <label class="form-label">Card number</label>
                                        <input type="text" class="form-control mb-3" value="Mastercard - 5412 **** **** ****" readonly>
                                    </div>
                                    <!-- DATE -->
                                    <div class="form-group">
                                        <label class="form-label">Billing date</label>
                                        <input type="text" class="form-control mb-3" value="August 3, 2024" readonly>
                                    </div>
                                    <!-- ADDRESS -->
                                    <div class="form-group">
                                        <label class="form-label">Billing address</label>
                                        <input type="text" class="form-control mb-3" value="">
                                    </div>
                                    <!-- ZIP CODE -->
                                    <div class="form-group">
                                        <label class="form-label">Zip code</label>
                                        <input type="text" class="form-control mb-3" value="">
                                    </div>
                                    <button type="button" class="btn btn-primary animation mb-3 me-2">Update payment info</button>
                                    <button type="button" class="btn btn-danger animation mb-3">Remove card</button>
                                </div>
                                <!-- /Card-body -->
                            </div>
                            <!-- PRIVACY TAB -->
                            <div class="tab-pane fade py-4 px-3" id="privacy">
                                <div class="card-body">
                                    <h6 class="mb-4">Improve library experience</h6>
                                    <!-- SEARCH HISTORY -->
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" checked>
                                        <label class="form-check-label mb-3">Share search history</label>
                                    </div>
                                    <!-- IMPROVE SEARCH -->
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" checked>
                                        <label class="form-check-label mb-3">Share analytics</label>
                                    </div>
                                    <!-- PERSONAL DATA -->
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" checked>
                                        <label class="form-check-label mb-3">Personal results in search</label>
                                    </div>
                                    <!-- WEB ACTIVITY -->
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" checked>
                                        <label class="form-check-label mb-5">Share web activity</label>
                                    </div>
                                    <hr class="border-light m-0">
                                    <!-- TERMS & SERVICE -->
                                    <h6 class="mb-3">Terms & service</h6>
                                    <a href="#">Read terms & service</a>
                                    <!-- SAVE BUTTON -->
                                    <div class="form-button mt-5">
                                        <button type="button" class="btn btn-primary animation" data-bs-target="#modal-save" data-bs-toggle="modal">Save changes</button>&nbsp;
                                        <button type="button" class="btn btn-default animation">Cancel</button>
                                    </div>
                                </div>
                                <!-- /Card-body -->
                            </div>
                            <!-- NOTIFICATIONS TAB -->
                            <div class="tab-pane fade py-4 px-3" id="notifications">
                                <div class="card-body">
                                    <h6 class="mb-4">Activity</h6>
                                    <!-- NOTIFY DOWNLOADS -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="downloads" checked>
                                        <label class="form-check-label mb-1" for="flexCheckChecked">Notify me when downloads are completed</label>
                                    </div>
                                    <!-- NOTIFY DEADLINES -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="deadlines" checked>
                                        <label class="form-check-label mb-1" for="flexCheckChecked">Notify me about the deadlines</label>
                                    </div>
                                    <!-- NOTIFY -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" checked>
                                        <label class="form-check-label mb-1" for="flexCheckChecked">Notify me about the next billing date</label>
                                    </div>
                                </div>
                                <!-- /Card-body -->
                                <hr class="border-light m-0">
                                <div class="card-body pb-2">
                                    <h6 class="mb-4">Application</h6>
                                    <!-- NOTIFY NEWS -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="news" checked>
                                        <label class="form-check-label mb-1" for="flexCheckChecked">News and announcements</label>
                                    </div>
                                    <!-- NOTIFY UPDATES -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="updates" checked>
                                        <label class="form-check-label mb-1" for="flexCheckChecked">Weekly updates</label>
                                    </div>
                                    <!-- NOTIFY BLOGS -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="updates" checked>
                                        <label class="form-check-label mb-1" for="flexCheckChecked">Weekly blog digests</label>
                                    </div>
                                    <!-- SAVE BUTTON -->
                                    <div class="form-button mt-5">
                                        <button type="button" class="btn btn-primary animation" data-bs-target="#modal-save" data-bs-toggle="modal">Save changes</button>&nbsp;
                                        <button type="button" class="btn btn-default animation">Cancel</button>
                                    </div>
                                </div>
                                <!-- /Card-body -->
                            </div>

                        </div>
                        <!-- /Tab-content -->
                    </div>

                </div>
                <!-- /Row -->
            </div>
            <!-- /Card -->

        </div>
        <!-- /Container -->
    </main>

    <!-- Modal for save changes -->
    
    <div class="modal modal-sheet fade bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="modal-save">
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header border-bottom-0">
                    <h1 class="modal-title fs-5">Save changes</h1>
                    <a href="#">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </a>
                </div>
                <div class="modal-body py-0">
                    <div class="success-logo align-items-center justify-content-center d-flex py-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-fill-check" viewBox="0 0 16 16">
                            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                            <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
                        </svg>
                    </div>
                    <div class="success-message text-center">
                        <h4>Changes saved successfully</h4>
                    </div>
                </div>
                <a class="modal-footer flex-column align-items-stretch w-100 gap-2 pb-3 border-top-0" href="#" style="text-decoration: none;">
                    <button type="button" class="btn btn-lg btn-primary" data-bs-dismiss="modal">Confirm</button>
                </a>
            </div>
        </div>
    </div>

    <!-- Modal for change password -->
    
    <div class="modal modal-sheet fade bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="modal-password">
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header border-bottom-0">
                    <h1 class="modal-title fs-5">Change password</h1>
                    <a href="#">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </a>
                </div>
                <div class="modal-body py-0">
                    <div class="success-logo align-items-center justify-content-center d-flex py-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-fill-check" viewBox="0 0 16 16">
                            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                            <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
                        </svg>
                    </div>
                    <div class="success-message text-center">
                        <h4>Password changed successfully</h4>
                    </div>
                </div>
                <a class="modal-footer flex-column align-items-stretch w-100 gap-2 pb-3 border-top-0" href="#" style="text-decoration: none;">
                    <button type="button" class="btn btn-lg btn-primary" data-bs-dismiss="modal">Confirm</button>
                </a>
            </div>
        </div>
    </div>

    <!-- Modal for cancel plan -->
    
    <div class="modal modal-sheet fade bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="modal-cancel-plan">
        <div class="modal-dialog" role="document">
            <div class="modal-content rounded-4 shadow">
                <div class="modal-header border-bottom-0">
                    <h1 class="modal-title fs-5">Cancel plan</h1>
                    <a href="#">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </a>
                </div>
                <div class="modal-body py-0">
                    <div class="success-logo align-items-center justify-content-center d-flex py-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-fill-check" viewBox="0 0 16 16">
                            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                            <path d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4"/>
                        </svg>
                    </div>
                    <div class="success-message text-center">
                        <h4>Plan canceled successfully</h4>
                    </div>
                </div>
                <a class="modal-footer flex-column align-items-stretch w-100 gap-2 pb-3 border-top-0" href="#" style="text-decoration: none;">
                    <button type="reset" class="btn btn-lg btn-primary" data-bs-dismiss="modal">Confirm</button>
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
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Link JS -->
    <script src="js/account-settings.js"></script>
    
</body>
</html>