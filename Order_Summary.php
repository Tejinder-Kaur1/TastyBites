<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Order Summary </title>
    <link rel="icon" href="/img/favicon.png" type="image/x-icon" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <!-- Include all the same CSS files as your menu page -->
    <link href="img/favicon.png" rel="icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link
      href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
      rel="stylesheet"
    />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />

    <style>
      .order-steps {
        display: flex;
        justify-content: space-between;
        margin-bottom: 30px;
      }
      .step {
        text-align: center;
        flex: 1;
        position: relative;
      }
      .step-number {
        width: 40px;
        height: 40px;
        background: #fea116;
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 10px;
        font-weight: bold;
      }
      .step.active .step-number {
        background: #0d6efd;
      }
      .step-title {
        font-weight: 600;
      }
      .step:not(:last-child):after {
        content: "";
        position: absolute;
        top: 20px;
        left: 60%;
        width: 80%;
        height: 2px;
        background: #ddd;
        z-index: -1;
      }
      .order-summary-card {
        border: 1px solid #eee;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 30px;
      }
      .order-item-img {
        width: 80px;
        height: 80px;
        object-fit: cover;
        border-radius: 5px;
      }
      .payment-methods img {
        height: 30px;
        margin-right: 10px;
        cursor: pointer;
      }
      .payment-methods .active {
        border: 2px solid #fea116;
        border-radius: 5px;
      }
      .location-options {
        margin-bottom: 20px;
      }
      #map {
        height: 200px;
        width: 100%;
        margin-top: 15px;
        display: none;
      }
    </style>
  </head>

  <body>
    <div class="container-xxl bg-white p-0">
      <!-- Spinner Start -->
      <div
        id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
      >
        <div
          class="spinner-border text-primary"
          style="width: 3rem; height: 3rem"
          role="status"
        >
          <span class="sr-only">Loading...</span>
        </div>
      </div>
      <!-- Spinner End -->

      <!-- Navbar (same as menu page) -->
      <div class="container-xxl position-relative p-0">
        <nav
          class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0"
        >
          <a href="" class="navbar-brand p-0">
            <h1 class="text-primary m-0">
              <i class="fa fa-utensils me-3"></i>TastyBites
            </h1>
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
          >
            <span class="fa fa-bars"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-4">
              <a href="index.php" class="nav-item nav-link">Home</a>
              <a href="about.php" class="nav-item nav-link">About</a>
              <a href="menu.php" class="nav-item nav-link">Menu</a>
              <div class="nav-item dropdown">
                <a
                  href="#"
                  class="nav-link dropdown-toggle"
                  data-bs-toggle="dropdown"
                  >Pages</a
                >
                <div class="dropdown-menu m-0">
                  <a href="booking.php" class="dropdown-item">Booking</a>
                  <a href="team.php" class="dropdown-item">Our Team</a>
                  <a href="testimonial.php" class="dropdown-item"
                    >Testimonial</a
                  >
                </div>
              </div>
              <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
            <a href="" class="btn btn-primary py-2 px-4">Book A Table</a>
          </div>
        </nav>

        <div class="container-xxl py-5 bg-dark hero-header mb-5">
          <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">
              Order Summary
            </h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Menu</a></li>
                <li
                  class="breadcrumb-item text-white active"
                  aria-current="page"
                >
                  Order
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>

      <!-- Order Summary Content -->
      <div class="container-xxl py-5">
        <div class="container">
          <div class="order-steps">
            <div class="step active">
              <div class="step-number">1</div>
              <div class="step-title">Delivery Address</div>
            </div>
            <div class="step">
              <div class="step-number">2</div>
              <div class="step-title">Order Summary</div>
            </div>
            <div class="step">
              <div class="step-number">3</div>
              <div class="step-title">Payment</div>
            </div>
          </div>

          <!-- Step 1: Delivery Address -->
          <div id="step1" class="mb-5">
            <h4 class="mb-4">Enter Details</h4>

            <form id="addressForm">
              <div class="mb-3">
                <label for="fullName" class="form-label">Full Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="fullName"
                  required
                />
              </div>
              <div class="mb-3">
                <label for="phoneNumber" class="form-label">Phone Number</label>
                <input
                  type="tel"
                  class="form-control"
                  id="phoneNumber"
                  required
                />
              </div>
              <div class="mb-3">
                <label for="address" class="form-label">Full Address</label>
                <textarea
                  class="form-control"
                  id="address"
                  rows="3"
                  required
                ></textarea>
              </div>
              <div class="mb-3">
                <label for="landmark" class="form-label"
                  >Landmark (Optional)</label
                >
                <input type="text" class="form-control" id="landmark" />
              </div>
              <!-- <div id="map"></div> -->
            </form>

            <div class="d-flex justify-content-end mt-4">
              <button class="btn btn-primary" id="continueToStep2">
                Continue
              </button>
            </div>
          </div>

          <!-- Step 2: Order Summary (initially hidden) -->
          <div id="step2" class="mb-5" style="display: none">
            <h4 class="mb-4">Review Your Order</h4>

            <div class="order-summary-card">
              <div class="d-flex align-items-center mb-4">
                <img id="orderItemImg" class="order-item-img" src="" alt="" />
                <div class="ms-4">
                  <h5 id="orderItemName" class="mb-1"></h5>
                  <div class="d-flex align-items-center">
                    <span>Quantity: </span>
                    <div
                      class="input-group input-group-sm ms-3"
                      style="width: 100px"
                    >
                      <button
                        class="btn btn-outline-secondary"
                        type="button"
                        id="decrementQty"
                      >
                        -
                      </button>
                      <input
                        type="text"
                        class="form-control text-center"
                        value="1"
                        id="quantity"
                      />
                      <button
                        class="btn btn-outline-secondary"
                        type="button"
                        id="incrementQty"
                      >
                        +
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="border-top pt-3">
                <div class="d-flex justify-content-between mb-2">
                  <span>Item Price:</span>
                  <span id="itemPrice"></span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                  <span>Delivery Fee:</span>
                  <span>₹20</span>
                </div>
                <div class="d-flex justify-content-between fw-bold fs-5">
                  <span>Total:</span>
                  <span id="totalPrice"></span>
                </div>
              </div>
            </div>

            <div class="d-flex justify-content-between mt-4">
              <button class="btn btn-outline-secondary" id="backToStep1">
                Back
              </button>
              <button class="btn btn-primary" id="continueToStep3">
                Continue to Payment
              </button>
            </div>
          </div>

          <!-- Step 3: Payment (initially hidden) -->
          <div id="step3" style="display: none">
            <h4 class="mb-4">Select Payment Method</h4>
            <div class="payment-options mb-5">
              <div class="row g-3">
                <!-- Card Payment -->
                <div class="col-md-6">
                  <div class="card payment-card" data-method="card">
                    <div class="card-body">
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="paymentMethod"
                          id="cardPayment"
                          checked
                        />
                        <label
                          class="form-check-label fw-bold"
                          for="cardPayment"
                        >
                          <i class="fas fa-credit-card me-2"></i>Credit/Debit
                          Card
                        </label>
                      </div>
                      <div id="cardDetails" class="mt-3">
                        <div class="mb-3">
                          <label for="cardNumber" class="form-label"
                            >Card Number</label
                          >
                          <input
                            type="text"
                            class="form-control"
                            id="cardNumber"
                            placeholder="1234 5678 9012 3456"
                          />
                        </div>
                        <div class="row">
                          <div class="col-md-6 mb-3">
                            <label for="expiryDate" class="form-label"
                              >Expiry Date</label
                            >
                            <input
                              type="text"
                              class="form-control"
                              id="expiryDate"
                              placeholder="MM/YY"
                            />
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="cvv" class="form-label">CVV</label>
                            <input
                              type="text"
                              class="form-control"
                              id="cvv"
                              placeholder="123"
                            />
                          </div>
                        </div>
                        <div class="mb-3">
                          <label for="cardName" class="form-label"
                            >Name on Card</label
                          >
                          <input
                            type="text"
                            class="form-control"
                            id="cardName"
                            placeholder="John Doe"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- UPI Payment -->
                <div class="col-md-6">
                  <div class="card payment-card" data-method="upi">
                    <div class="card-body">
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="paymentMethod"
                          id="upiPayment"
                        />
                        <label
                          class="form-check-label fw-bold"
                          for="upiPayment"
                        >
                          <i class="fas fa-mobile-alt me-2"></i>UPI Payment
                        </label>
                      </div>
                      <div id="upiDetails" class="mt-3" style="display: none">
                        <div class="mb-3">
                          <label for="upiId" class="form-label">UPI ID</label>
                          <input
                            type="text"
                            class="form-control"
                            id="upiId"
                            placeholder="yourname@upi"
                          />
                        </div>
                        <div class="text-muted small">
                          <i class="fas fa-info-circle me-2"></i>You'll be
                          redirected to your UPI app
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Cash on Delivery -->
                <div class="col-12">
                  <div class="card payment-card" data-method="cod">
                    <div class="card-body">
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="paymentMethod"
                          id="codPayment"
                        />
                        <label
                          class="form-check-label fw-bold"
                          for="codPayment"
                        >
                          <i class="fas fa-money-bill-wave me-2"></i>Cash on
                          Delivery
                        </label>
                      </div>
                      <div
                        id="codDetails"
                        class="mt-2 text-muted"
                        style="display: none"
                      >
                        Pay when you receive your order
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <<!-- Order Summary -->
            <div class="order-summary-card mb-4">
              <h5 class="mb-3">Order Summary</h5>
              <div class="d-flex justify-content-between mb-2">
                <span id="summaryItemName"></span>
                <span id="summaryItemPrice"></span>
              </div>

              <div class="d-flex justify-content-between mb-2">
                <span>Delivery Fee:</span>
                <span>₹20</span>
              </div>
              <div class="d-flex justify-content-between fw-bold fs-5">
                <span> Total:</span>
                <span id="summaryTotalPrice"></span>
              </div>
            </div>

            <!-- Terms and Place Order -->
            <div class="form-check mb-4">
              <input
                class="form-check-input"
                type="checkbox"
                id="termsCheck"
                required
              />
              <label class="form-check-label" for="termsCheck">
                I agree to the <a href="Terms_Conditions.php">Terms and Conditions</a>
              </label>
            </div>

            <div class="d-flex justify-content-between">
              <button class="btn btn-outline-secondary" id="backToStep2">
                Back
              </button>
              <button class="btn btn-success" id="placeOrderBtn">
                Place Order
              </button>
            </div>
          </div>
        
        </div>
      </div>

   

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

  

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script>
      $(document).ready(function () {
        // Get item details from URL parameters
        const urlParams = new URLSearchParams(window.location.search);
        const itemName = urlParams.get("item");
        const itemPrice = urlParams.get("price");
        const itemImg = urlParams.get("img");

        // Set initial values
        $("#orderItemName").text(itemName);
        $("#orderItemImg").attr("src", itemImg);
        $("#itemPrice").text(itemPrice);
        $("#summaryItemName").text(itemName);
        $("#summaryItemPrice").text(itemPrice);

        // Calculate total
        function calculateTotal() {
          const quantity = parseInt($("#quantity").val());
          const price = parseFloat(itemPrice.replace("₹", ""));
          const total = price * quantity + 20; // Adding delivery fee
          $("#totalPrice").text("₹" + total.toFixed(2));
          $("#summaryTotalPrice").text("₹" + total.toFixed(2));
        }

        calculateTotal();

        // Quantity controls
        $("#incrementQty").click(function () {
          let qty = parseInt($("#quantity").val());
          $("#quantity").val(qty + 1);
          calculateTotal();
        });

        $("#decrementQty").click(function () {
          let qty = parseInt($("#quantity").val());
          if (qty > 1) {
            $("#quantity").val(qty - 1);
            calculateTotal();
          }
        });



        // Payment method selection
        $(".payment-methods img").click(function () {
          $(".payment-methods img").removeClass("active");
          $(this).addClass("active");
        });

        // Step navigation
        $("#continueToStep2").click(function (e) {
          e.preventDefault();
          if ($("#addressForm")[0].checkValidity()) {
            $("#step1").hide();
            $("#step2").show();
            $(".step").removeClass("active");
            $(".step:nth-child(2)").addClass("active");
          } else {
            $("#addressForm")[0].reportValidity();
          }
        });

        $("#backToStep1").click(function () {
          $("#step2").hide();
          $("#step1").show();
          $(".step").removeClass("active");
          $(".step:nth-child(1)").addClass("active");
        });

        $("#continueToStep3").click(function () {
          $("#step2").hide();
          $("#step3").show();
          $(".step").removeClass("active");
          $(".step:nth-child(3)").addClass("active");
        });

        $("#backToStep2").click(function () {
          $("#step3").hide();
          $("#step2").show();
          $(".step").removeClass("active");
          $(".step:nth-child(2)").addClass("active");
        });


        // Place order
        $("#placeOrderBtn").click(function () {
          if ($("#termsCheck").is(":checked")) {
            // In a real app, you would process payment here
            // For demo, we'll just redirect to thank you page
            window.location.href = "Order_Confirm.php";
          } else {
            alert("Please agree to the terms and conditions");
          }
        });
      });

    
    </script>
  </body>
</html>
