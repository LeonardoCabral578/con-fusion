<?php
$titulo = "Ristorante Con Fusion";
$indexActivo = "active";

include_once 'plantillas/dec-inicio.inc.php';
include_once 'plantillas/navbar.inc.php';
?>

<header class="jumbotron">
  <div class="container">
    <div class="row row-header">
      <div class="col-12 col-sm-8">
        <h1>Ristorante con Fusion</h1>
        <p>We take inspiration from the World's best cuisines, and create a unique fusion experience. Our lipsmacking
          creations will tickle your culinary senses!</p>
      </div>
      <div class="col-12 col-sm align-self-center">
        <img src="img/logo.png" class="img-fluid">
      </div>
    </div>
  </div>
</header>

<div class="container">
  <div class="row row-content align-items-center">
    <div class="col-12 col-sm-4 order-sm-last col-md-3">
      <h3>Our Lipsmacking Culinary Creations</h3>
    </div>
    <div class="col col-sm order-sm-first col-md">
      <div class="media">
        <img class="d-flex mr-3 img-thumbnail align-self-center" src="img/uthappizza.png" alt="uthappizza">
        <div class="media-body">
          <h2 class="mt-0">Uthappizza <span class="badge badge-danger">HOT</span> <span class="badge badge-pill badge-secondary">$4.99</span></h2>
          <p class="d-none d-sm-block">A unique combination of Indian Uthappam (pancake) and Italian pizza, topped with Cerignola olives, ripe vine
            cherry tomatoes, Vidalia onion, Guntur chillies and Buffalo Paneer.</p>
        </div>
      </div>
    </div>
  </div>


  <div class="row row-content align-items-center">
    <div class="col-12 col-sm-4 order-sm-first col-md-3">
      <h3>This Month's Promotions</h3>
    </div>
    <div class="col col-sm col-md">
      <h2>Weekend Grand Buffet</h2>
      <p>Featuring mouthwatering combinations with a choice of five different salads, six enticing appetizers, six
        main entrees and five choicest desserts. Free flowing bubbly and soft drinks. All for just $19.99 per person
      </p>
    </div>
  </div>

  <div class="row row-content align-items-center">
    <div class="col-12 col-sm-4 order-sm-last col-md-3">
      <h3>Meet our Culinary Specialists</h3>
    </div>
    <div class="col col-sm order-sm-first col-md">
      <div class="media">
        <img class="d-flex mr-3 img-thumbnail align-self-center" src="img/alberto.png" alt="alberto">
        <div class="media-body">
          <h2 class="mt-0">Alberto Somayya</h2>
          <h4>Executive Chef</h4>
          <p>Award winning three-star Michelin chef with wide International experience having worked closely with whos-who
            in the culinary world, he specializes in creating mouthwatering Indo-Italian fusion experiences. </p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
include_once 'plantillas/footer.inc.php';
include_once 'plantillas/dec-final.inc.php';
?>