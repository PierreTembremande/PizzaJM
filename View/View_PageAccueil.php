<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Accueil</title>
  <style>
    <?php include 'style/Accueil.css' ?><?php
                                        foreach ($avis as $value) {
                                          echo ".star-rating" . $value["Av_id"] . " {
            white-space: nowrap;
        }
        
        .star-rating" . $value["Av_id"] . " [type='radio'] {
            appearance: none;
        }
        
        .star-rating" . $value["Av_id"] . " i {
            font-size: 1.2em;
            transition: 0.3s;
        }
        
        .star-rating" . $value["Av_id"] . " label:has(~ :checked) i svg {
          text-shadow: 0 0 2px #ffffff, 0 0 10px #ffee58;
          filter: invert(8%) sepia(100%) saturate(6480%) hue-rotate(246deg) brightness(102%) contrast(143%);
        }\n\n";
                                        }
                                        ?>
  </style>
  <link rel="icon" href="View/Pictures/logo.png" />
</head>

<body>
  <div class="div-logo"><img class="logo" src="View/Pictures/logo.png" alt="Logo"></div>


  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link active" href="#">Notre pizzeria</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Nos pizzas</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Avis</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Contact</a>
    </li>
  </ul>


  <div class="background">
    <img class="img-description" src="View/Pictures/fond pizza.png" alt="">
    <div class="div-txt-description">
      <main>Bienvenue chez PizzaJM !</br></br>
        Nous sommes fiers de vous accueillir dans notre univers de délices italiens, où chaque pizza raconte une histoire de passion, de tradition et de goût.</br> Notre histoire commence bien avant l'ouverture de nos portes, dans les ruelles pittoresques de l'Italie, où l'art de la pizza a vu le jour. Chez PizzaJM, nous avons fait de cette tradition notre héritage, et chaque jour, nous nous efforçons de vous offrir une expérience gastronomique inoubliable.</main>
    </div>
  </div>



  <footer>
    <ul class="footer-list">
      <li class="footer-item">An item</li>
      <li class="footer-item">A second item</li>
      <li class="footer-item">A third item</li>
    </ul>
  </footer>
  <div id="clientRatesDiv">
    <h2>Avis clients</h2>
    <p>Voici ce que les <?php echo count($avis); ?> avis de nos clients pensent de nous :</p>
    <div id="clientRates">
      <?php
      foreach ($avis as $value) {
        echo "<div id='clientRate'>
              <h3>" . $value["Av_nom"] . "</h3>
              <span class='star-rating" . $value["Av_id"] . "'>
                  <label for='rate-1-" . $value["Av_id"] . "' style='--i:1'><i class='fa-solid fa-star'>
                          <svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 576 512'>
                              <path d='M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z' />
                          </svg>
                      </i></label>
                  <input type='radio' name='rating' id='rate-1-" . $value["Av_id"] . "' value='1' " . ($value["Av_note"] == 1 ? "checked" : "") . ">
                  <label for='rate-2-" . $value["Av_id"] . "' style='--i:2'><i class='fa-solid fa-star'>
                          <svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 576 512'>
                              <path d='M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z' />
                          </svg>
                      </i></label>
                  <input type='radio' name='rating' id='rate-2-" . $value["Av_id"] . "' value='2' " . ($value["Av_note"] == 2 ? "checked" : "") . ">
                  <label for='rate-3-" . $value["Av_id"] . "' style='--i:3'><i class='fa-solid fa-star'>
                          <svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 576 512'>
                              <path d='M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z' />
                          </svg>
                      </i></label>
                  <input type='radio' name='rating' id='rate-3-" . $value["Av_id"] . "' value='3' " . ($value["Av_note"] == 3 ? "checked" : "") . ">
                  <label for='rate-4-" . $value["Av_id"] . "' style='--i:4'><i class='fa-solid fa-star'>
                          <svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 576 512'>
                              <path d='M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z' />
                          </svg>
                      </i></label>
                  <input type='radio' name='rating' id='rate-4-" . $value["Av_id"] . "' value='4' " . ($value["Av_note"] == 4 ? "checked" : "") . ">
                  <label for='rate-5-" . $value["Av_id"] . "' style='--i:5'><i class='fa-solid fa-star'>
                          <svg xmlns='http://www.w3.org/2000/svg' height='1em' viewBox='0 0 576 512'>
                              <path d='M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z' />
                          </svg>
                      </i></label>
                  <input type='radio' name='rating' id='rate-5-" . $value["Av_id"] . "' value='5' " . ($value["Av_note"] == 5 ? "checked" : "") . ">
                  <p>" . $value["Av_commentaire"] . "</p>
              </span>
          </div>";
      }
      ?>
    </div>
  </div>
</body>

</html>