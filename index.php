<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tanngrisnir</title>
    <!-- Description Meta Tag -->
    <meta
      name="description"
      content="Association de reconstitution historique viking basée dans la commune de
    Saulnes."
    />
    <!-- Facebook / Open Graph Meta Tags -->
    <meta name="og:title" content="Tanngrisnir" />
    <meta name="og:type" content="website" />
    <meta name="og:url" content="https://simhar54.github.io/tanngrisnir/" />
    <meta name="og:image" content="ressource\images\bannierelarge.jpg" />
    <meta name="og:site_name" content="Tanngrisnir" />
    <meta
      name="og:description"
      content="Association de reconstitution historique viking basée dans la commune de
    Saulnes."
    />
    <!-- END Open Graph Meta Tag -->

    <!-- Twitter Meta Tags -->
    <meta name="twitter:title" content="Tanngrisnir" />
    <meta
      name="twitter:description"
      content="Association de reconstitution historique viking basée dans la commune de
    Saulnes."
    />
    <meta name="twitter:image" content="ressource\images\bannierelarge.jpg" />
    <meta name="twitter:card" content="summary_large_image" />
    <!-- End Twitter Meta Tags -->

    <!-- Stylesheets -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    />
    <link rel="stylesheet" href="style/style.css" />
    <!-- END Stylesheets -->
  </head>
  <body>
  <?php include_once './componant/header.html' ?>
    <main class="container">
      <div
        class="row align-items-center justify-content-lg-center justify-content-md-center"
      >
        <div class="col-lg-4 col-md-6 presentation">
          <h2>Qui sommes nous ?</h2>
          <a href="./page/quiSommeNous.php"
            ><img
              class="imageLien"
              src="./ressource/images/quiSommesNous.jpg"
              alt="Guerriers"
          /></a>
        </div>
        <div class="col-lg-4 col-md-6 presentation">
          <h2>Nos activités !</h2>
          <a href="./page/nosActivites.php"
            ><img
              class="imageLien"
              src="./ressource/images/nosActivites.jpg"
              alt="Guerriers"
          /></a>
        </div>
        <div class="col-lg-4 col-md-6 presentation">
          <h2>Nos projets !</h2>
          <a href="./page/nosProjets.php"
            ><img
              class="imageLien"
              src="./ressource/images/nosProjets.jpg"
              alt="Guerriers"
          /></a>
        </div>
      </div>
    </main>

    <?php include_once "./componant/footer.html" ; ?>
    
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
  </body>
</html>
