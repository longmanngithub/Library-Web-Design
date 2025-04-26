<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction | Library</title>

    <!-- Bootstrap Min Bundle CSS. !DO NOT TOUCH! -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"/>
    
    <!-- Link CSS -->
    <link rel="stylesheet" href="css/master.css" type="text/css">
    <link rel="stylesheet" href="css/transaction.css" type="text/css">
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

    <!-- Transaction -->

    <div class="container-fluid">
      <div class="container py-5" id="transaction">
        <main>
          <div class="pb-5 text-center">
            <img class="d-block mx-auto mb-4" src="images/library-logo.svg" alt="Library Logo" width="72" height="57">
            <h2 class="fw-bold">Subscription Transaction</h2>
            <p class="lead">Please enter your credit or debit information to purchase our service.</p>
          </div>
  
          <!-- SUBSCRIPTION CART -->
  
          <div class="row g-5">
            <div class="col-md-5 col-lg-4 order-md-last">
              <!-- HEADER -->
              <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="" style="color: var(--main-color);">Subscription</span>
                <span class="badge rounded-pill" style="background-color: var(--main-color);">1</span>
              </h4>
              <ul class="list-group mb-3">
                <!-- SUBSCRIPTION PLAN -->
                <li class="list-group-item d-flex justify-content-between lh-sm">
                  <div>
                    <h6 class="my-0">Plus plan</h6>
                    <small class="text-body-secondary">Limited access</small>
                  </div>
                  <span class="text-body-secondary">$4.99/mo</span>
                </li>
                <!-- PROMO CODE -->
                <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
                  <div class="text-success">
                    <h6 class="my-0">Promo code</h6>
                    <small>STUDENTDIS20</small>
                  </div>
                  <span class="text-success">−20%</span>
                </li>
                <!-- TOTAL -->
                <li class="list-group-item d-flex justify-content-between">
                  <span>Total (USD)</span>
                  <strong>$3.99/mo</strong>
                </li>
              </ul>
              <!-- /Ul -->
  
              <!-- REDEEM BUTTON -->
              <form class="card p-2">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Promo code">
                  <button type="submit" class="btn btn-secondary">Redeem</button>
                </div>
              </form>
              <!-- /Form -->
            </div>
            <!-- /Col-md-5 -->
  
            <div class="col-md-7 col-lg-8">
  
                <h4 class="mb-3">Payment Method</h4>
  
                <form action="library.php" method="post" class="needs-validation" novalidate id="paymentForm">
  
                  <!-- PAYMENT METHODS -->
  
                  <div class="my-3" id="payment">
                    <div class="row g-2">
                      
                      <!-- CREDIT/DEBIT -->
  
                      <div class="col-md-12 animation">
                        <div class="border p-3 rounded-3">
                          <div class="form-check">
                            <!-- CHECKBOX --> 
                            <input id="credit" name="paymentMethod" type="radio" class="form-check-input" value="credit" checked required>
                            <label class="form-check-label d-flex justify-content-between" for="credit">Credit/Debit Card
                              <!-- CREDIT CARD LOGOS -->
                              <img src="images/card-payment/creditcard.png" alt="Visa, Mastercard, Unionpay" width="110">
                            </label>
                          </div>
                          <!-- /Form-check -->
                        </div>
                        <!-- /Border -->
                      </div>
                      <!-- /Col-md-12 -->
  
                      <!-- ABA PAY -->
  
                      <div class="col-md-6 animation">
                        <div class="border p-3 rounded-3">
                          <div class="form-check">
                            <!-- CHECKBOX -->
                              <input id="abapay" name="paymentMethod" type="radio" class="form-check-input" value="abapay" required>
                              <label class="form-check-label d-flex justify-content-between" for="abapay">ABA Pay
                                <!-- ABA PAY LOGO -->
                                <img src="images/card-payment/abapay.png" alt="ABA Pay" width="40">
                              </label>
                          </div>
                          <!-- /Form-check -->
                        </div>
                        <!-- /Border -->
                      </div>
                      <!-- /Col-md-6 -->
  
                      <!-- APPLE PAY -->
                      
                      <div class="col-md-6 animation">
                        <div class="border p-3 rounded-3">
                          <div class="form-check">
                            <!-- CHECKBOX -->
                              <input id="applepay" name="paymentMethod" type="radio" class="form-check-input" value="applepay" required>
                              <label class="form-check-label d-flex justify-content-between" for="applepay">Apple Pay
                                <!-- APPLE PAY LOGO -->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" baseProfile="tiny" id="Layer_1" x="0px" y="0px" width="50" viewBox="0 0 512 210.2" xml:space="preserve">
                                  <path id="XMLID_34_" d="M93.6,27.1C87.6,34.2,78,39.8,68.4,39c-1.2-9.6,3.5-19.8,9-26.1c6-7.3,16.5-12.5,25-12.9  C103.4,10,99.5,19.8,93.6,27.1 M102.3,40.9c-13.9-0.8-25.8,7.9-32.4,7.9c-6.7,0-16.8-7.5-27.8-7.3c-14.3,0.2-27.6,8.3-34.9,21.2  c-15,25.8-3.9,64,10.6,85c7.1,10.4,15.6,21.8,26.8,21.4c10.6-0.4,14.8-6.9,27.6-6.9c12.9,0,16.6,6.9,27.8,6.7  c11.6-0.2,18.9-10.4,26-20.8c8.1-11.8,11.4-23.3,11.6-23.9c-0.2-0.2-22.4-8.7-22.6-34.3c-0.2-21.4,17.5-31.6,18.3-32.2  C123.3,42.9,107.7,41.3,102.3,40.9 M182.6,11.9v155.9h24.2v-53.3h33.5c30.6,0,52.1-21,52.1-51.4c0-30.4-21.1-51.2-51.3-51.2H182.6z   M206.8,32.3h27.9c21,0,33,11.2,33,30.9c0,19.7-12,31-33.1,31h-27.8V32.3z M336.6,169c15.2,0,29.3-7.7,35.7-19.9h0.5v18.7h22.4V90.2  c0-22.5-18-37-45.7-37c-25.7,0-44.7,14.7-45.4,34.9h21.8c1.8-9.6,10.7-15.9,22.9-15.9c14.8,0,23.1,6.9,23.1,19.6v8.6l-30.2,1.8  c-28.1,1.7-43.3,13.2-43.3,33.2C298.4,155.6,314.1,169,336.6,169z M343.1,150.5c-12.9,0-21.1-6.2-21.1-15.7c0-9.8,7.9-15.5,23-16.4  l26.9-1.7v8.8C371.9,140.1,359.5,150.5,343.1,150.5z M425.1,210.2c23.6,0,34.7-9,44.4-36.3L512,54.7h-24.6l-28.5,92.1h-0.5  l-28.5-92.1h-25.3l41,113.5l-2.2,6.9c-3.7,11.7-9.7,16.2-20.4,16.2c-1.9,0-5.6-0.2-7.1-0.4v18.7C417.3,210,423.3,210.2,425.1,210.2z  "/>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                  <g>
                                  </g>
                                </svg>
                              </label>
                          </div>
                          <!-- /Form-check -->
                        </div>
                        <!-- /Border -->
                      </div>
                      <!-- /Col-md-6 -->
  
                    </div>
                    <!-- /Row -->
                  </div>
  
                  <!-- CREDIT/DEBIT INFO -->
    
                  <div class="row gy-3" id="paymentDetails">
                    <div class="col-md-12">
                      <label for="cc-number" class="form-label">Card number<span class="text-danger">*</span></label>
                      <input type="text" class="form-control animation" id="cc-number" name="cc-number" placeholder="Bank card number" required maxlength="19" required>
                      <div class="invalid-feedback">
                        Credit card number is required
                      </div>
                    </div>
    
                    <div class="col-md-4">
                      <label for="cc-name" class="form-label">Name on card<span class="text-danger">*</span></label>
                      <input type="text" class="form-control animation" id="cc-name" name="cc-name" placeholder="Name">
                      <div class="invalid-feedback">
                        Name on card is required
                      </div>
                    </div>
    
                    <div class="col-md-4">
                      <label for="cc-expiration" class="form-label">Expiration date<span class="text-danger">*</span></label>
                      <input type="text" class="form-control animation" id="cc-expiration" name="cc-expiration" placeholder="MM/YY" required maxlength="5" required>
                      <div class="invalid-feedback">
                        Expiration date required
                      </div>
                    </div>
    
                    <div class="col-md-4">
                      <label for="cc-cvv" class="form-label">CVV/CVC<span class="text-danger">*</span></label>
                      <input type="text" inputmode="numeric" class="form-control animation" id="cc-cvv" name="cc-cvv" placeholder="3 or 4-digit number" required maxlength="4" required>
                      <div class="invalid-feedback">
                        Security code required
                      </div>
                    </div>
                  </div>
  
                  <!-- SAVE THIS CARD -->
  
                  <div class="form-check my-4" id="saveCard">
                    <input type="checkbox" class="form-check-input" id="saveCardCheck" name="saveCardCheck">
                    <label class="form-check-label" for="saveCardCheck">Save this card information for next time</label>
                  </div>
  
                  <!-- HORIZONTAL LINE -->
                  <hr class="my-4">
                  
                  <!-- SUBMIT BUTTON -->
                  <button class="w-100 btn btn-primary btn-lg animation" type="submit" id="submit-btn">Continue to checkout</button>
  
                </form>
                <!-- /Form -->
              </div>
              <!-- /Col-md-7 -->
            </div>
            <!-- /Row -->
          </main>
          <!-- /Main -->
      </div>
      <!-- /Container -->
    </div>
    <!-- /Container-fluid -->
      
      <!-- MODAL -->
      <div class="modal modal-sheet fade bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="modal-confirm">
        <div class="modal-lg modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content rounded-4 shadow">
            <div class="modal-header border-bottom-0">
              <h1 class="modal-title fs-5">Transaction Confirmation</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- SUMMARIZING THE PLAN -->
            <div class="modal-body">
              <h4 class="text-center">You have chosen the <strong>Plus Plan</strong>.</h4>
              <p class="text-center">This plan will cost you <strong>$4.99</strong> per month.</p>
            </div>

            <div class="modal-body py-0">
              <ul class="list-group mb-3">
                <!-- SUBSCRIPTION PLAN -->
                <li class="list-group-item d-flex justify-content-between lh-sm">
                  <div>
                    <h6 class="my-0">Plus plan</h6>
                    <small class="text-body-secondary">Limited access</small>
                  </div>
                  <span class="text-body-secondary">$4.99/mo</span>
                </li>
                <!-- PROMO CODE -->
                <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
                  <div class="text-success">
                    <h6 class="my-0">Promo code</h6>
                    <small>STUDENTDIS20</small>
                  </div>
                  <span class="text-success">−20%</span>
                </li>
                <!-- TOTAL -->
                <li class="list-group-item d-flex justify-content-between">
                  <span>Total (USD)</span>
                  <strong>$3.99/mo</strong>
                </li>
              </ul>
              <!-- /Ul -->
            </div>

            <!-- TERMS OF SERVICE -->
            <div class="modal-body py-0">
              <small>By purchasing this plan, you have read and agreed to the <a href="#">terms of service</a>.</small><br>
              <small>
                <span class="text-danger">*</span>Your payment cannot be refunded.
              </small>
            </div>

            <!-- PAYMENT BUTTON -->
            <div class="modal-footer flex-column align-items-stretch w-100 gap-2 pb-3 border-top-0">
              <button type="button" class="btn btn-lg btn-primary" data-bs-toggle="modal" data-bs-target="#modal-success">Proceed to Payment</button>
            </div>
            
          </div>
          <!-- /Model-content -->
        </div>
        <!-- /Modal-dialog -->
      </div>

      <!-- Payment Successful -->

      <div class="modal modal-sheet fade bg-body-secondary p-4 py-md-5" tabindex="-1" role="dialog" id="modal-success">
        <div class="modal-lg modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content rounded-4 shadow">
            <div class="modal-header border-bottom-0">
              <h1 class="modal-title fs-5">Successful Payment</h1>
              <a href="library.php">
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
                <h4>Your purchase has been successful</h4><br>
                <p>Your order number is <strong>1234567890</strong>.</p>
                <p>You will receive an email confirmation shortly.</p>
              </div>
            </div>
            <a href="library.php" class="modal-footer flex-column align-items-stretch w-100 gap-2 pb-3 border-top-0" style="text-decoration: none;">
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
    
    <!-- Link JS -->
    <script src="js/transaction.js" type="text/javascript"></script>

</body>
</html>