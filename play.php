<!DOCTYPE html>
<html lang="en-uk">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Play - Countdown Conundrum</title>

  <!-- Bootstrap + Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="Countdown.css">
  <link rel="icon" href="Favicon/Timer.png" type="image/x-icon">

  <? include "connection.php"; ?>

  <!-- Countdown Game JS -->
  <script src="Countdown.js" defer></script>

  <style>
    html, body {
      height: 100%;
    }
    body {
      display: flex;
      flex-direction: column;
    }
    main {
      flex: 1;
    }
    .card:hover {
      transform: translateY(-3px);
      transition: all 0.3s ease;
    }
    .divider {
      border-left: 2px solid #ffffff33;
      height: 100%;
    }
  </style>
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
        <li class="nav-item"><a class="nav-link fw-bold fs-6" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link active fw-bold fs-6" href="play.php">Play</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- MAIN CONTENT -->
<main class="container py-5 d-flex justify-content-center align-items-center">
  <div class="card bg-secondary text-light shadow w-100" style="max-width: 1000px;">
    <div class="card-body p-4">
      <div class="row g-4">

        <!-- LEFT SIDE -->
        <div class="col-md-7">
          <h2 class="text-center fw-bold mb-3">Guess the Word</h2>
          <h1 id="Word" class="display-4 text-center my-4">_ _ _ _ _</h1>
          <input type="text" id="Guess" class="form-control text-center mb-3" placeholder="Type your guess">
          <button class="btn btn-warning w-100 mb-4 fw-bold" id="Check" onclick="Check()">Check</button>

          <h5 class="text-center fw-bold mb-3">Select Word Length</h5>
          <div class="d-flex flex-wrap justify-content-center gap-2">
            <button class="btn btn-primary fw-bold" id="5-Letter" onclick="Game(5)">5-Letter</button>
            <button class="btn btn-primary fw-bold" id="7-Letter" onclick="Game(7)">7-Letter</button>
            <button class="btn btn-primary fw-bold" id="9-Letter" onclick="Game(9)">9-Letter</button>
            <button class="btn btn-info text-dark fw-bold" id="Mixed-Letter" onclick="Game('Any')">Mixed</button>
          </div>
        </div>

        <!-- DIVIDER (OPTIONAL) -->
        <div class="col-md-1 d-none d-md-flex justify-content-center">
          <div class="divider"></div>
        </div>

        <!-- RIGHT SIDE -->
        <div class="col-md-4 text-center d-flex flex-column justify-content-center">
          <h5 class="fw-bold mb-2">Correct Words</h5>
          <div id="Counter" class="display-4 mb-4">0</div>
          <h5 class="fw-bold mb-2">Timer</h5>
          <div id="Timer" class="display-5">00:00:00</div>
        </div>

      </div>
    </div>
  </div>
</main>

<!-- FOOTER -->
<footer class="text-light pt-5" style="background-color: #102044;">
  <div class="container">
    <div class="row">

      <!-- About -->
      <div class="col-md-4 mb-4">
        <h5 class="fw-bold mb-3"><i class="fas fa-clock me-2 text-warning"></i>Countdown Conundrum</h5>
        <p class="fw-bold">
          A fast-paced, brain-teasing word puzzle game inspired by the classic TV show. Beat the timer, unscramble the word, and test your brain!
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
