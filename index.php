<!DOCTYPE html>
<html lang="en-uk">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Home - Countdown Conundrum</title>

  <!-- Bootstrap + Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="Countdown.css">
  <link rel="icon" href="Favicon/Timer.png" type="image/x-icon">
</head>

<body class="bg-dark text-light">

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark shadow-sm" style="background-color: #102044;">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center fw-bold fs-5" href="index.php">
      <img src="Favicon/Timer.png" alt="Logo" width="40" height="40" class="me-2">
      Countdown Conundrum
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active fw-bold fs-6" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link fw-bold fs-6" href="play.php">Play</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- MAIN CONTENT -->
<header class="container py-4 text-center">
  <h1 class="display-5 fw-bold">Welcome to Countdown Conundrum</h1>
  <p class="lead-small fw-bold">The ultimate fast-paced word puzzle game that challenges your mind and reflexes. Think fast. Type faster. Win big!</p>
</header>

<section class="container">
  <div class="row g-4 align-items-center justify-content-center">
    <div class="col-lg-5">
      <img src="images/Countdown.jpg" class="img-fluid rounded shadow" alt="Hero Image">
    </div>
    <div class="col-lg-5">
      <h2 class="fw-bold mb-2">About the Game</h2>
      <p class="fw-bold">
        Countdown Conundrum is inspired by the classic TV show but with a modern twist! You'll face a series of scrambled words and a ticking timer. Solve as many as you can before time runs out to improve your score and climb the leaderboard!
      </p>
      <a href="play.php" class="btn btn-warning btn-lg fw-bold shadow mt-3">Play Now!</a>
    </div>
  </div>
</section>

<section class="container">
  <h2 class="fw-bold text-center mb-4">How to Play</h2>
  <div class="step-cards">
    <div class="step-card-wrapper">
      <div class="card bg-secondary text-light card-sm shadow">
        <h5 class="fw-bold">Step 1 🟢</h5>
        <p class="fw-bold">Choose your word length: 5, 7, or 9 letters — or go wild with mixed lengths for a real challenge.</p>
      </div>
    </div>
    <div class="step-card-wrapper">
      <div class="card bg-secondary text-light card-sm shadow">
        <h5 class="fw-bold">Step 2 ⌨️</h5>
        <p class="fw-bold">Type your guess as fast as you can in the input field. Check your answer to see if you're correct.</p>
      </div>
    </div>
    <div class="step-card-wrapper">
      <div class="card bg-secondary text-light card-sm shadow">
        <h5 class="fw-bold">Step 3 ⏱️</h5>
        <p class="fw-bold">Beat the timer and get as many correct words as possible. Track your score and improve your skills!</p>
      </div>
    </div>
    <div class="step-card-wrapper">
      <div class="card bg-secondary text-light card-sm shadow">
        <h5 class="fw-bold">Step 4 🎯</h5>
        <p class="fw-bold">Try to guess 5 words in the shortest time possible for bonus points and bragging rights!</p>
      </div>
    </div>
    <div class="step-card-wrapper">
      <div class="card bg-secondary text-light card-sm shadow">
        <h5 class="fw-bold">Step 5 🏆</h5>
        <p class="fw-bold">Climb the leaderboard and challenge your friends to beat your high score.</p>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="text-light pt-5" style="background-color: #102044;">
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
          <li><a href="index.php" class="text-reset text-decoration-underline">Home</a></li>
          <li><a href="play.php" class="text-reset text-decoration-underline">Play</a></li>
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

</body>
</html>