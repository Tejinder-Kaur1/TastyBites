<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Order Confirmation</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link href="img/favicon.png" rel="icon" />
    <style>
      /* Fix for footer at bottom */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      body {
        display: flex;
        flex-direction: column;
        font-family: "Nunito", sans-serif;
      }
      .main-content {
        flex: 1;
      }
      .simple-footer {
        background-color: #343a40;
        color: white;
        text-align: center;
        padding: 20px 0;
        width: 100%;
      }

      /* Rest of your existing styles */
      .logo-container {
        background-color: #343a40;
        padding: 20px 0;
        text-align: center;
      }
      .logo-container h1 {
        margin: 0;
      }
      .confirmation-icon {
        font-size: 3rem;
        color: #28a745;
        margin-bottom: 20px;
        animation: bounce 1s;
      }
      .confirmation-message {
        font-size: 2rem;
        font-weight: 700;
        color: #28a745;
        margin-bottom: 20px;
      }
      .confirmation-container {
        min-height: 60vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 40px 20px;
      }
      .btn {
        font-family: "Nunito", sans-serif;
        font-weight: 500;
        text-transform: uppercase;
        transition: 0.5s;
      }
      .btn-primary {
        background-color: #fea116;
        border-color: #fea116;
      }
      .footer-brand {
        font-weight: bold;
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
    </style>

    <!-- Your existing head content -->
    <link href="img/favicon.ico" rel="icon" />
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
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <div class="main-content">
      <!-- Logo Header -->
      <div class="logo-container">
        <a href="index.php">
          <h1 class="text-primary">
            <i class="fa fa-utensils me-3"></i>TastyBites
          </h1>
        </a>
      </div>

      <!-- Order Confirmation Content -->
      <div class="confirmation-container">
        <div class="confirmation-icon">
          <i class="fas fa-check-circle"></i>
        </div>
        <h1 class="confirmation-message">Your order is on the way!</h1>
        <p>Thank you for your order. It will arrive soon!</p>
        <a href="index.php" class="btn btn-primary py-3 px-5">Go to Home</a>
      </div>
     
    </div>
     <!-- footer Start -->
     <?php include 'footer2.php';
       ?>
       <!-- footer end -->

    

    <script>
      // Set current year
      document.getElementById("current-year").textContent =
        new Date().getFullYear();
    </script>
  </body>
</html>
