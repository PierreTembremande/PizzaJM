<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accueil</title>
  <style>
    <?php include 'style/Accueil.css' ?>
  </style>
</head>

<body>
  <h1>Accueil</h1>
    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Acccueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">item</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">item</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"href="#">item</a>
                </li>
            </ul>
        </div>
    </nav>

    <main>contenu du site</main>

    <footer>
        <ul class="footer-list">
            <li class="footer-item">An item</li>
            <li class="footer-item">A second item</li>
            <li class="footer-item">A third item</li>
        </ul>
    </footer>
  <div id="clientRatesDiv">
    <h2>Avis clients</h2>
    <p>Voici ce que les 3 avis de nos clients pensent de nous :</p>
    <div id="clientRates">
      <div id="clientRate">
        <h3>Yannou</h3>
        <span class="star-rating">
          <label for="rate-1" style="--i:1"><i class="fa-solid fa-star">
              <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </i></label>
          <input type="radio" name="rating" id="rate-1" value="1">
          <label for="rate-2" style="--i:2"><i class="fa-solid fa-star">
              <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </i></label>
          <input type="radio" name="rating" id="rate-2" value="2">
          <label for="rate-3" style="--i:3"><i class="fa-solid fa-star">
              <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </i></label>
          <input type="radio" name="rating" id="rate-3" value="3">
          <label for="rate-4" style="--i:4"><i class="fa-solid fa-star">
              <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </i></label>
          <input type="radio" name="rating" id="rate-4" value="4" checked>
          <label for="rate-5" style="--i:5"><i class="fa-solid fa-star">
              <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                <path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z" />
              </svg>
            </i></label>
          <input type="radio" name="rating" id="rate-5" value="5">
          <p>Je n'ai jamais mangé de meilleur pizza de ma vie !</p>
        </span>
      </div>
    </div>
  </div>
</body>

</html>