<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nos activités</title>
    <!-- Description Meta Tag -->
    <meta
      name="description"
      content="Association de reconstitution historique viking basée dans la commune de
    Saulnes."
    />
    <!-- Facebook / Open Graph Meta Tags -->
    <meta name="og:title" content="Nos activités" />
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
    <meta name="twitter:title" content="Nos activités" />
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
    <link rel="stylesheet" href="../style/pagesStyle.css" />
    <!-- END Stylesheets -->
  </head>
  <body>
  <?php include_once '../componant/header.html' ?>
    <main>
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col col-12 col-lg-6 my-5">
            <h2>Nos activités</h2>
            <article>
              <p>
                L’un des objectifs principaux de l’association est l’immersion
                totale dans le monde des vikings de l’époque.
              </p>
              <p>
                C’est par la vie de camp que cette image sera la plus exposée au
                public et la qualité de celle-ci reflète le sérieux de
                l’association.
              </p>
              <p>
                Bien que l’artisanat et le combat impressionnent plus le public,
                la vie civile occupera la casi totalité du temps de nos
                prestations.
              </p>
              <p>
                Le montage du campement, la cuisine, l'échange avec le public,
                les jeux… sont des exemples parmi tant d’autres de la vie de
                camp.
              </p>
            </article>
          </div>
          <div class="col col-12 col-lg-6 my-5">
            <div
              id="carouselActivités"
              class="carousel slide"
              data-bs-ride="carousel"
            >
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="../ressource/images/nosActivités1.jpg"
                    class="d-block w-100 carouselImg"
                    alt="Bataille"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="../ressource/images/nosActivités2.jpg"
                    class="d-block w-100 carouselImg"
                    alt="Repos"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="../ressource/images/nosActivités3.jpg"
                    class="d-block w-100 carouselImg"
                    alt="Poterie"
                  />
                </div>
              </div>
              <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselActivités"
                data-bs-slide="prev"
              >
                <span
                  class="carousel-control-prev-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselActivités"
                data-bs-slide="next"
              >
                <span
                  class="carousel-control-next-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </main>

    <?php include_once "../componant/footer.html" ; ?>

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