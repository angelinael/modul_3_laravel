<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Spotify Home</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="images/logo.png" alt="Spotify Logo" width="120">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#">Premium</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Support</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Download</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-outline-light" href="#">Log In</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Hero Section -->
  <section class="hero-section">
    <div class="container text-center text-light">
      <h1 class="display-4">Music for everyone</h1>
      <p class="lead">Millions of songs. No credit card needed.</p>
      <a href="#" class="btn btn-success btn-lg mt-3">Get Spotify Free</a>
    </div>
  </section>

  <!-- Hero Section -->
  <section class="text-center bg-dark text-light py-5">
    <div class="container">
      <h1 class="display-4">Music for everyone</h1>
      <p class="lead">Millions of songs. No credit card needed.</p>
      <a href="#" class="btn btn-success btn-lg mt-3">Get Spotify Free</a>
    </div>
  </section>

  <!-- Playlist Carousel -->
  <section class="py-5 bg-light">
    <div class="container">
      <h2 class="mb-4">Popular Playlists</h2>
      <div id="playlistCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-4">
                <div class="card">
                  <img src="images/playlist1.jpg" class="card-img-top" alt="Playlist 1">
                  <div class="card-body">
                    <h5 class="card-title">Top Hits</h5>
                    <p class="card-text">The hottest songs right now.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img src="images/playlist2.jpg" class="card-img-top" alt="Playlist 2">
                  <div class="card-body">
                    <h5 class="card-title">Chill Vibes</h5>
                    <p class="card-text">Relax and unwind.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img src="images/playlist3.jpg" class="card-img-top" alt="Playlist 3">
                  <div class="card-body">
                    <h5 class="card-title">Workout Beats</h5>
                    <p class="card-text">Boost your energy with these tracks.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Add more carousel items as needed -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#playlistCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#playlistCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </section>

  <!-- Song List Section -->
  <section class="py-5">
    <div class="container">
      <h2 class="mb-4">Trending Now</h2>
      <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
          <span>Blinding Lights - The Weeknd</span>
          <span class="badge bg-success rounded-pill">3:20</span>
        </a>
        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
          <span>Levitating - Dua Lipa</span>
          <span class="badge bg-success rounded-pill">3:23</span>
        </a>
        <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
          <span>Peaches - Justin Bieber</span>
          <span class="badge bg-success rounded-pill">3:18</span>
        </a>
        <!-- Add more songs as needed -->
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-light py-4">
    <div class="container text-center">
      <p>© 2024 Spotify Clone. All rights reserved.</p>
    </div>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
