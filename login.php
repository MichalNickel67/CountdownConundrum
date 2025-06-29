<!DOCTYPE html>
<html lang="en-uk">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Log In - Countdown Conundrum</title>

  <!-- Bootstrap + Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet" />

  <link rel="icon" href="Favicon/Timer.png" type="image/x-icon" />
</head>

<body class="bg-dark text-light d-flex flex-column min-vh-100">

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: #102044;">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center fw-bold fs-5" href="index.html">
      <img src="Favicon/Timer.png" alt="Logo" width="40" height="40" class="me-2">
      Countdown Conundrum
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link fw-bold fs-6" href="index.html">Home</a></li>
        <li class="nav-item"><a class="nav-link fw-bold fs-6" href="play.html">Play</a></li>
        <li class="nav-item"><a class="nav-link active fw-bold fs-6" href="login.html">Log In</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- MAIN CONTENT -->
<main class="container py-5 flex-grow-1">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <div class="card bg-secondary text-light p-4 shadow">
        <h2 class="fw-bold text-center mb-4">Log in to your account</h2>
        <form>
          <div class="mb-3">
            <label for="email" class="form-label fw-bold">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="you@example.com" required>
          </div>
          <div class="mb-4">
            <label for="password" class="form-label fw-bold">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter password" required>
          </div>
          <button type="submit" class="btn btn-warning w-100 fw-bold">Log In</button>
          <p class="fw-bold text-center mt-3">Don't have an account? <a href="#" class="text-decoration-underline text-reset">Register here</a></p>
        </form>
      </div>
    </div>
  </div>
</main>

<!-- FOOTER -->
<footer class="text-light pt-5 mt-auto" style="background-color: #102044;">
  <div class="container">
    <div class="row">

      <!-- About -->
      <div class="col-md-4 mb-4">
        <h5 class="fw-bold mb-3"><i class="fas fa-clock me-2 text-warning"></i>Countdown Conundrum</h5>
        <p class="fw-bold">
          A high-paced, brain-teasing word puzzle game inspired by the classic TV show. Beat the timer, unscramble the word, and test your brain!
        </p>
      </div>

      <!-- Pages -->
      <div class="col-md-3 mb-4">
        <h6 class="fw-bold mb-3">Pages</h6>
        <ul class="list-unstyled fw-bold">
          <li><a href="index.html" class="text-reset text-decoration-underline">Home</a></li>
          <li><a href="play.html" class="text-reset text-decoration-underline">Play</a></li>
          <li><a href="login.html" class="text-reset text-decoration-underline">Log In</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div class="col-md-3 mb-4">
        <h6 class="fw-bold mb-3">Contact</h6>
        <p class="fw-bold"><i class="fas fa-map-marker-alt me-2 text-warning"></i> Nottingham, UK</p>
        <p class="fw-bold"><i class="fas fa-envelope me-2 text-warning"></i> support@countdowngame.com</p>
        <p class="fw-bold"><i class="fas fa-phone me-2 text-warning"></i> +44 123 456 789</p>
      </div>

      <!-- Social -->
      <div class="col-md-2 mb-4">
        <h6 class="fw-bold mb-3 text-center">Follow us</h6>
        <div class="d-flex justify-content-center gap-3 fs-4">
          <a href="https://facebook.com" class="text-reset"><i class="fab fa-facebook-f"></i></a>
          <a href="https://twitter.com" class="text-reset"><i class="fab fa-twitter"></i></a>
          <a href="https://instagram.com" class="text-reset"><i class="fab fa-instagram"></i></a>
          <a href="https://github.com" class="text-reset"><i class="fab fa-github"></i></a>
        </div>
      </div>

    </div>
  </div>

  <div class="text-center p-3 mt-4" style="background-color: #0b162e;">
    &copy; 2025 Countdown Conundrum. All rights reserved.
  </div>
</footer>

<!-- Bootstrap Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
