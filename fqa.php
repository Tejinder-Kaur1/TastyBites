<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>TastyBites - FAQs & Question Submission</title>
    <link rel="icon" href="/img/favicon.png" type="image/x-icon" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta
      content="FAQs, ask question, food delivery questions"
      name="keywords"
    />
    <meta
      content="TastyBites FAQs - Submit your questions and find answers about our service."
      name="description"
    />

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

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
    <style>
      body {
        font-family: "Nunito", sans-serif;
      }
      h1,
      h2,
      h3,
      .display-3 {
        font-family: "Nunito", sans-serif;
        font-weight: 700;
      }
      .logo-container {
        background-color: #343a40;
        padding: 20px 0;
        text-align: center;
      }
      .logo-container h1 {
        margin: 0;
      }
      .simple-footer {
        background-color: #343a40;
        color: white;
        text-align: center;
        padding: 20px 0;
        margin-top: 50px;
      }
      .footer-brand {
        color: white;
        text-decoration: underline;
      }
      .footer-brand:hover {
        color: #f8f9fa;
        text-decoration: underline;
      }
      .copyright-owner {
        text-decoration: underline;
      }
      .faq-item {
        margin-bottom: 30px;
        border-bottom: 1px solid #eee;
        padding-bottom: 20px;
      }
      .faq-question {
        color: #ff6b6b;
        font-weight: 700;
        margin-bottom: 10px;
      }
      .highlight-box {
        background-color: #fff5f5;
        border-left: 4px solid #ff6b6b;
        padding: 15px;
        margin: 20px 0;
        border-radius: 0 4px 4px 0;
      }
      .question-form {
        background-color: #f8f9fa;
        padding: 30px;
        border-radius: 8px;
        margin-bottom: 40px;
      }
      .form-control {
        height: 45px;
        border-radius: 4px;
      }
      textarea.form-control {
        height: auto;
      }
      .submit-btn {
        background-color: #ff6b6b;
        border: none;
        padding: 10px 25px;
        font-weight: 600;
      }
      .submit-btn:hover {
        background-color: #e05a5a;
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

      <!-- Logo Only (No Navbar) -->
      <div class="logo-container">
        <a href="index.php">
          <h1 class="text-primary">
            <i class="fa fa-utensils me-3"></i>TastyBites
          </h1>
        </a>
      </div>

      <!-- FAQs Content Start -->
      <div class="container-xxl py-5">
        <div class="container">
          <div class="text-center">
            <h1 class="mb-5">Frequently Asked Questions</h1>
            <p class="lead">Submit your questions or browse our FAQs</p>
          </div>

          <div class="row g-5">
            <div class="col-lg-12">
              <div class="bg-light rounded p-5">
                <!-- Question Submission Form -->
                <div class="question-form">
                  <h2 class="mb-4">Ask Your Question</h2>
                  <form id="faqForm">
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <input
                          type="text"
                          class="form-control"
                          placeholder="Your Name"
                          required
                        />
                      </div>
                      <div class="col-md-6 mb-3">
                        <input
                          type="email"
                          class="form-control"
                          placeholder="Your Email"
                          required
                        />
                      </div>
                    </div>
                    <div class="mb-3">
                      <textarea
                        class="form-control"
                        rows="4"
                        placeholder="Your Question..."
                        required
                      ></textarea>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn submit-btn text-white">
                        Submit Question
                      </button>
                    </div>
                  </form>
                </div>

                <!-- FAQ Section -->
                <h2 class="mb-4">Common Questions</h2>

                <div class="faq-item">
                  <h3 class="faq-question">1. How do I track my order?</h3>
                  <p>
                    Once your order is confirmed and out for delivery, you'll
                    receive a tracking link via SMS and email. You can also
                    check order status in your account dashboard.
                  </p>
                </div>

                <div class="faq-item">
                  <h3 class="faq-question">
                    2. What are your delivery charges?
                  </h3>
                  <p>
                    Delivery fees vary based on your location and order size.
                    The exact fee will be displayed during checkout before you
                    complete your order.
                  </p>
                </div>

                <div class="faq-item">
                  <h3 class="faq-question">
                    3. Can I schedule orders in advance?
                  </h3>
                  <p>
                    Yes! During checkout, you can select "Schedule Order" to
                    choose a future date and time for delivery (up to 7 days in
                    advance).
                  </p>
                </div>

                <div class="faq-item">
                  <h3 class="faq-question">4. How do I apply promo codes?</h3>
                  <p>
                    Enter your promo code in the designated field during
                    checkout. Valid codes will automatically apply discounts to
                    your order total.
                  </p>
                </div>

                <div class="faq-item">
                  <h3 class="faq-question">
                    5. What if I receive the wrong order?
                  </h3>
                  <div class="highlight-box">
                    <p class="mb-0">
                      <strong>Contact us immediately:</strong> If there's any
                      mistake with your order, please call us within 30 minutes
                      of delivery at (555) 123-4567 for resolution.
                    </p>
                  </div>
                </div>

                <div class="text-center mt-5">
                  <a href="index.php" class="btn btn-primary py-3 px-5"
                    >Go to Home</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- FAQs Content End -->

      <!-- footer Start -->
      <?php include 'footer2.php';
       ?>
       <!-- footer end -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
      // Set current year in copyright
      document.getElementById("current-year").textContent =
        new Date().getFullYear();

      // Form submission handling
      document
        .getElementById("faqForm")
        .addEventListener("submit", function (e) {
          e.preventDefault();
          alert(
            "Thank you for your question! We will respond via email within 24 hours."
          );
          this.reset();
        });
    </script>
  </body>
</html>
