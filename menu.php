<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Food Menu</title>
    <link rel="icon" href="/img/favicon.png" type="image/x-icon" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.png" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link
      href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css"
      rel="stylesheet"
    />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
    <style>
      .d-flex {
        display: flex !important
;
      }
      .justify-content-between {
        justify-content: space-between !important;
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

      <!-- Navbar & Hero Start -->
      <div class="container-xxl position-relative p-0">
        <nav
          class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0"
        >
          <a href="" class="navbar-brand p-0">
            <h1 class="text-primary m-0">
              <i class="fa fa-utensils me-3"></i>TastyBites
            </h1>
            <!-- <img src="img/logo.png" alt="Logo"> -->
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

              <a href="menu.php" class="nav-item nav-link active">Menu</a>
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
            <a href="booking.php" class="btn btn-primary py-2 px-4">Book A Table</a>
          </div>
        </nav>

        <div class="container-xxl py-5 bg-dark hero-header mb-5">
          <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">
              Food Menu
            </h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li
                  class="breadcrumb-item text-white active"
                  aria-current="page"
                >
                  Menu
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
      <!-- Navbar & Hero End -->

      <!-- Menu Start -->
      <div class="container-xxl py-5">
        <div class="container">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5
              class="section-title ff-secondary text-center text-primary fw-normal"
            >
              Food Menu
            </h5>
            <h1 class="mb-5">Most Popular Items</h1>
          </div>
          <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
            <ul
              class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5"
            >
              <li class="nav-item">
                <a
                  class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active"
                  data-bs-toggle="pill"
                  href="#tab-1"
                >
                  <i class="fa fa-coffee fa-2x text-primary"></i>
                  <div class="ps-3">
                    <small class="text-body">Popular</small>
                    <h6 class="mt-n1 mb-0">Breakfast</h6>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a
                  class="d-flex align-items-center text-start mx-3 pb-3"
                  data-bs-toggle="pill"
                  href="#tab-2"
                >
                  <i class="fa fa-hamburger fa-2x text-primary"></i>
                  <div class="ps-3">
                    <small class="text-body">Special</small>
                    <h6 class="mt-n1 mb-0">Lunch</h6>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a
                  class="d-flex align-items-center text-start mx-3 me-0 pb-3"
                  data-bs-toggle="pill"
                  href="#tab-3"
                >
                  <i class="fa fa-utensils fa-2x text-primary"></i>
                  <div class="ps-3">
                    <small class="text-body">Lovely</small>
                    <h6 class="mt-n1 mb-0">Dinner</h6>
                  </div>
                </a>
              </li>
            </ul>
            <div class="tab-content">
              <div id="tab-1" class="tab-pane fade show p-0 active">
                <div class="row g-4">
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Roasted_Poha.jpg"
                        alt="Roasted Poha"
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Roasted Poha</span>
                          <span class="text-primary">₹50</span>
                        </h5>
                        <h6 class="d-flex justify-content-between">
                          <small>Flavorful Morning Delight </small>
                          <button
                            class="btn btn-sm btn-primary mt-2"
                            style="width: 60px"
                            onclick="location.href='Order_Summary.php?item=Roasted Poha&price=₹50&img=img/Roasted_Poha.jpg'"
                          >
                            Buy
                          </button>
                        </h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Idli_Samber.jpg"
                        alt="Idli Sambar"
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Idli Sambar</span>
                          <span class="text-primary">₹80(4)</span>
                        </h5>
                        <h6 class="d-flex justify-content-between">
                          <small>South Indian Soul </small>
                          <button
                            class="btn btn-sm btn-primary mt-2"
                            style="width: 60px"
                            onclick="location.href='Order_Summary.php?item=Idli Sambar&price=₹80(4)&img=img/Idli_Samber.jpg'"
                          >
                            Buy
                          </button>
                        </h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Dhokla.jpg"
                        alt="Dhokla"
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Dhokla</span>
                          <span class="text-primary">₹50(2)</span>
                        </h5>
                        <h6 class="d-flex justify-content-between">
                          <small>A Bite of Gujarat </small>
                          <button
                            class="btn btn-sm btn-primary mt-2"
                            style="width: 60px"
                            onclick="location.href='Order_Summary.php?item=Dhokla&price=₹50(2)&img=img/Dhokla.jpg'"
                          >
                            Buy
                          </button>
                        </h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Egg_Sandwich.jpg"
                        alt="Egg Sandwich"
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Egg Sandwich</span>
                          <span class="text-primary">₹40</span>
                        </h5>
                        <h6 class="d-flex justify-content-between">
                          <small>Power-Packed Breakfast Bite </small>
                          <button
                            class="btn btn-sm btn-primary mt-2"
                            style="width: 60px"
                            onclick="location.href='Order_Summary.php?item=Egg Sandwich&price=₹40&img=img/Egg_Sandwich.jpg'"
                          >
                            Buy
                          </button>
                        </h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Teddy_panCake.jpg"
                        alt="Teddy PanCake"
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Teddy PanCake</span>
                          <span class="text-primary">₹40</span>
                        </h5>
                        <h6 class="d-flex justify-content-between">
                          <small>Cuteness You Can Eat </small>
                          <button
                            class="btn btn-sm btn-primary mt-2"
                            style="width: 60px"
                            onclick="location.href='Order_Summary.php?item=Teddy PanCake&price=₹40&img=img/Teddy_panCake.jpg'"
                          >
                            Buy
                          </button>
                        </h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Dahi_Paratha.jpg"
                        alt="Dahi Parantha"
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Dahi Parantha</span>
                          <span class="text-primary">₹50(2)</span>
                        </h5>
                        <h6 class="d-flex justify-content-between">
                          <small>Tradition on Your Tongue </small>
                          <button
                            class="btn btn-sm btn-primary mt-2"
                            style="width: 60px"
                            onclick="location.href='Order_Summary.php?item=Dahi Parantha&price=₹50(2)&img=img/Dahi_Paratha.jpg'"
                          >
                            Buy
                          </button>
                        </h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Litti chokha.jpg"
                        alt="Litti Chokha"
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Litti Chokha</span>
                          <span class="text-primary">₹50</span>
                        </h5>
                        <h6 class="d-flex justify-content-between">
                          <small>Bihar’s Bold Bite </small>
                          <button
                            class="btn btn-sm btn-primary mt-2"
                            style="width: 60px"
                            onclick="location.href='Order_Summary.php?item=Litti Chokha&price=₹50&img=img/Litti chokha.jpg'"
                          >
                            Buy
                          </button>
                        </h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Aloo_chat.jpg"
                        alt="Aloo Chat"
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Aloo Chat</span>
                          <span class="text-primary">₹30</span>
                        </h5>
                        <h6 class="d-flex justify-content-between">
                          <small>Zingy Bite of Joy </small>
                          <button
                            class="btn btn-sm btn-primary mt-2"
                            style="width: 60px"
                            onclick="location.href='Order_Summary.php?item=Aloo Chat&price=₹30&img=img/Aloo_chat.jpg'"
                          >
                            Buy
                          </button>
                        </h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tab-2" class="tab-pane fade show p-0">
                <div class="row g-4">
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Kulhad Pizza.jpg"
                        alt="Kulhad Pizza"
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Kulhad Pizza</span>
                          <span class="text-primary">₹45</span>
                        </h5>
                        <h6 class="d-flex justify-content-between">
                          <small>The Mugful Delight </small>
                          <button
                            class="btn btn-sm btn-primary mt-2"
                            style="width: 60px"
                            onclick="location.href='Order_Summary.php?item=Kulhad Pizza&price=₹45&img=img/Kulhad Pizza.jpg'"
                          >
                            Buy
                          </button>
                        </h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Thali.jpg"
                        alt="Thali"
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Thali</span>
                          <span class="text-primary">₹60</span>
                        </h5>
                        <h6 class="d-flex justify-content-between">
                          <small> A Feast on Plate </small>
                          <button
                            class="btn btn-sm btn-primary mt-2"
                            style="width: 60px"
                            onclick="location.href='Order_Summary.php?item=Thali&price=₹60&img=img/Thali.jpg'"
                          >
                            Buy
                          </button>
                        </h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Samosa.jpg"
                        alt="Samosa"
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Samosa</span>
                          <span class="text-primary">₹40</span>
                        </h5>
                        <h6 class="d-flex justify-content-between">
                          <small>Crispy, Spicy, Perfect Crunch </small>
                          <button
                            class="btn btn-sm btn-primary mt-2"
                            style="width: 60px"
                            onclick="location.href='Order_Summary.php?item=Samosa&price=₹40&img=img/Samosa.jpg'"
                          >
                            Buy
                          </button>
                        </h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/New_York_Style_Pizza.jpg"
                        alt="New York Style Pizza"
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>New York Style Pizza</span>
                          <span class="text-primary">₹50</span>
                        </h5>
                        <h6 class="d-flex justify-content-between">
                          <small> The Ultimate Slice of Life </small>
                          <button
                            class="btn btn-sm btn-primary mt-2"
                            style="width: 60px"
                            onclick="location.href='Order_Summary.php?item=New York Style Pizza&price=₹50&img=img/New_York_Style_Pizza.jpg'"
                          >
                            Buy
                          </button>
                        </h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Cheesy_hulk_Sandwich.jpg"
                        alt="Cheesy hulk Sandwich"
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Cheesy hulk Sandwich</span>
                          <span class="text-primary">₹60</span>
                        </h5>
                        <h6 class="d-flex justify-content-between">
                          <small>Power-Packed, Cheesy Goodness </small>
                          <button
                            class="btn btn-sm btn-primary mt-2"
                            style="width: 60px"
                            onclick="location.href='Order_Summary.php?item=Cheesy hulk Sandwich&price=₹60&img=img/Cheesy_hulk_Sandwich.jpg'"
                          >
                            Buy
                          </button>
                        </h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Classic Cheeseburger.jpg"
                        alt="Classic Cheeseburger"
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Classic Cheeseburger</span>
                          <span class="text-primary">₹40</span>
                        </h5>
                        <h6 class="d-flex justify-content-between">
                          <small>Perfectly Grilled, Richly Cheesy </small>
                          <button
                            class="btn btn-sm btn-primary mt-2"
                            style="width: 60px"
                            onclick="location.href='Order_Summary.php?item=Classic Cheeseburger&price=₹40&img=img/Classic Cheeseburger.jpg'"
                          >
                            Buy
                          </button>
                        </h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Hamburger.jpg"
                        alt="Hamburger"
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Hamburger</span>
                          <span class="text-primary">₹60</span>
                        </h5>
                        <h6 class="d-flex justify-content-between">
                          <small>Satisfy Your Burger Cravings </small>
                          <button
                            class="btn btn-sm btn-primary mt-2"
                            style="width: 60px"
                            onclick="location.href='Order_Summary.php?item=Hamburger&price=₹60&img=img/Hamburger.jpg'"
                          >
                            Buy
                          </button>
                        </h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Taco Pizza.jpg"
                        alt="Taco Pizza"
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Taco Pizza</span>
                          <span class="text-primary">₹65</span>
                        </h5>
                        <h6 class="d-flex justify-content-between">
                          <small>Spice Up Your Slice </small>
                          <button
                            class="btn btn-sm btn-primary mt-2"
                            style="width: 60px"
                            onclick="location.href='Order_Summary.php?item=Taco Pizza&price=₹65&img=img/Taco Pizza.jpg'"
                          >
                            Buy
                          </button>
                        </h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tab-3" class="tab-pane fade show p-0">
                <div class="row g-4">
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Dahi Bhalla.jpg"
                        alt="Dahi Bhalla"
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Dahi Bhalla</span>
                          <span class="text-primary">₹40</span>
                        </h5>
                        <h6 class="d-flex justify-content-between">
                          <small>Creamy, Crunchy, Irresistible Delight </small>
                          <button
                            class="btn btn-sm btn-primary mt-2"
                            style="width: 60px"
                            onclick="location.href='Order_Summary.php?item=Dahi Bhalla&price=₹40&img=img/Dahi Bhalla.jpg'"
                          >
                            Buy
                          </button>
                        </h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Pani_Puri.jpg"
                        alt="Pani Puri"
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Pani Puri</span>
                          <span class="text-primary">₹40(8)</span>
                        </h5>
                        <h6 class="d-flex justify-content-between">
                          <small>A Water Balloon of Joy </small>
                          <button
                            class="btn btn-sm btn-primary mt-2"
                            style="width: 60px"
                            onclick="location.href='Order_Summary.php?item=Pani Puri&price=₹40(8)&img=img/Pani_Puri.jpg'"
                          >
                            Buy
                          </button>
                        </h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Rasmali.jpg"
                        alt="Rasmalai"
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Rasmalai</span>
                          <span class="text-primary">₹35</span>
                        </h5>
                        <h6 class="d-flex justify-content-between">
                          <small>A Bite of Heaven </small>
                          <button
                            class="btn btn-sm btn-primary mt-2"
                            style="width: 60px"
                            onclick="location.href='Order_Summary.php?item=Rasmalai&price=₹35&img=img/Rasmali.jpg'"
                          >
                            Buy
                          </button>
                        </h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Cheesy_hotDog.jpg"
                        alt="Cheesy Hotdog"
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Cheesy Hotdog</span>
                          <span class="text-primary">₹45</span>
                        </h5>
                        <h6 class="d-flex justify-content-between">
                          <small>The Ultimate Comfort Bite </small>
                          <button
                            class="btn btn-sm btn-primary mt-2"
                            style="width: 60px"
                            onclick="location.href='Order_Summary.php?item=Cheesy Hotdog&price=₹45&img=img/Cheesy_hotDog.jpg'"
                          >
                            Buy
                          </button>
                        </h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Paneer_momos.jpg"
                        alt="Paneer momos"
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Paneer momos</span>
                          <span class="text-primary">₹40(8)</span>
                        </h5>
                        <h6 class="d-flex justify-content-between">
                          <small> Steamed to Perfection </small>
                          <button
                            class="btn btn-sm btn-primary mt-2"
                            style="width: 60px"
                            onclick="location.href='Order_Summary.php?item=Paneer momos&price=₹40(8)&img=img/Paneer_momos.jpg'"
                          >
                            Buy
                          </button>
                        </h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Matka_Kulfi.jpg"
                        alt="Matka Kulfi"
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Matka Kulfi</span>
                          <span class="text-primary">₹35</span>
                        </h5>
                        <h6 class="d-flex justify-content-between">
                          <small>Frozen Joy in a Pot </small>
                          <button
                            class="btn btn-sm btn-primary mt-2"
                            style="width: 60px"
                            onclick="location.href='Order_Summary.php?item=Matka Kulfi&price=₹35&img=img/Matka_Kulfi.jpg'"
                          >
                            Buy
                          </button>
                        </h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Godhuma_Rava_Halwa.jpg"
                        alt="Godhuma Rava Halwa"
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Godhuma Rava Halwa</span>
                          <span class="text-primary">₹45</span>
                        </h5>
                        <h6 class="d-flex justify-content-between">
                          <small>A Classic Comfort Dessert </small>
                          <button
                            class="btn btn-sm btn-primary mt-2"
                            style="width: 60px"
                            onclick="location.href='Order_Summary.php?item=Godhuma Rava Halwa&price=₹45&img=img/Godhuma_Rava_Halwa.jpg'"
                          >
                            Buy
                          </button>
                        </h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center">
                      <img
                        class="flex-shrink-0 img-fluid rounded"
                        src="img/Tikki_VadaPaw.jpg"
                        alt="Tikki VadaPav"
                        style="width: 80px"
                      />
                      <div class="w-100 d-flex flex-column text-start ps-4">
                        <h5
                          class="d-flex justify-content-between border-bottom pb-2"
                        >
                          <span>Tikki VadaPav</span>
                          <span class="text-primary">₹50</span>
                        </h5>
                        <h6 class="d-flex justify-content-between">
                          <small>A Bombay Street Delight </small>
                          <button
                            class="btn btn-sm btn-primary mt-2"
                            style="width: 60px"
                            onclick="location.href='Order_Summary.php?item=Tikki VadaPav&price=₹50&img=img/Tikki_VadaPaw.jpg'"
                          >
                            Buy
                          </button>
                        </h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Menu End -->

     <!-- Footer Start -->
     <?php include 'footer.php'; 
     ?>
      <!-- Footer End -->
      

      <!-- Back to Top -->
      <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"
        ><i class="bi bi-arrow-up"></i
      ></a>
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
  </body>
</html>
