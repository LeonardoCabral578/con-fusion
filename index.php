<?php
$titulo = "Ristorante Con Fusion";
$indexActivo = "active";

include_once 'plantillas/dec-inicio.inc.php';
include_once 'plantillas/navbar.inc.php';
?>

<header class="jumbotron">
  <div class="container">
    <div class="row row-header">
      <div class="col-12 col-sm-6">
        <h1>Ristorante con Fusion</h1>
        <p>We take inspiration from the World's best cuisines, and create a unique fusion experience. Our lipsmacking
          creations will tickle your culinary senses!</p>
      </div>
      <div class="col-12 col-sm align-self-center">
        <img src="img/logo.png" class="img-fluid">
      </div>
      <div class="col-12 col-sm align-self-center">
        <a role="button" class="btn btn-block nav-link btn-warning" data-toggle="modal" data-target="#reserveModal" data-html="true" title="Or call us at <br><strong>+852 12345678</strong>" data-placement="bottom"><strong>Reserve Table</strong></a>
      </div>
    </div>
  </div>
</header>

<div id="reserveModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg" role="content">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title"><strong>Reserve a Table</strong></h4>
        <button type="button" class="close" data-dismiss="modal">
          &times;
        </button>
      </div>
      <div class="modal-body">
        <dl class="row">
          <div class="col-12 col-sm-2">
            <dt>Number of Guest</dt>
          </div>
          <div class="col-12 col-sm-6">
            <dd>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label" for="inlineRadio1"><strong>1</strong></label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2"><strong>2</strong></label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                <label class="form-check-label" for="inlineRadio3"><strong>3</strong></label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                <label class="form-check-label" for="inlineRadio3"><strong>4</strong></label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                <label class="form-check-label" for="inlineRadio3"><strong>5</strong></label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                <label class="form-check-label" for="inlineRadio3"><strong>6</strong></label>
              </div>
            <dd>
          </div>
        </dl>
        <d1 class="row">
          <div class="col-12 col-sm-2">
            <dt>Section</dt>
          </div>
          <div class="col-12 col-sm-6">
            <dd>
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-success active">
                  <input type="radio" checked>Non-Smoking
                </label>
                <label class="btn btn-danger">
                  <input type="radio">Smoking
                </label>
              </div>
            </dd>
          </div>
        </d1>
        <br>
        <d1 class="row">
          <div class="col-12 col-sm-2">
            <dt>Date and Time</dt>
          </div>
          <dd>
            <div class="form-group row">
              <div class="col-12 col-md-6 col-sm-12">
                <input class="form-control" id="date" name="date" placeholder="Date">
              </div>
              <div class="col-12 col-md-6 col-sm-12">
                <input class="form-control" id="time" name="time" placeholder="Time">
              </div>
            </div>
            <br>
            <div class="form-group row">
              <div class="col">
                <button type="submit" class="btn btn-secondary">
                  Cancel
                </button>
                <button type="submit" class="btn btn-primary">
                  Reserve
                </button>
              </div>
            </div>
          </dd>
        </d1>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row row-content">
    <div class="col">
      <div id="mycarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
          <div class="carousel-item active">
            <img class="d-block img-fluid" src="img/uthappizza.png" alt="uthappizza">
            <div class="carousel-caption d-none d-md-block">
              <h2>Uthappizza <span class="badge badge-danger">HOT</span> <span class="badge badge-pill badge-secondary">$4.99</span></h2>
              <p class="d-none d-sm-block">A unique combination of Indian Uthappam (pancake) and Italian pizza, topped with Cerignola olives, ripe vine
                cherry tomatoes, Vidalia onion, Guntur chillies and Buffalo Paneer.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="img/buffet.png" alt="Buffet">
            <div class="carousel-caption d-none d-md-block">
              <h2>Weekend Grand Buffet <span class="badge badge-danger">NEW</span></h2>
              <p class="d-none d-sm-block">Featuring mouthwatering combinations with a choice of five different salads, six enticing appetizers, six
                main entrees and five choicest desserts. Free flowing bubbly and soft drinks. All for just $19.99 per person
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block img-fluid" src="img/alberto.png" alt="Alberto">
            <div class="carousel-caption d-none d-md-block">
              <h2>Alberto Somayya</h2>
              <h4>Executive Chef</h4>
              <p class="d-none d-sm-block">Award winning three-star Michelin chef with wide International experience having worked closely with whos-who
                in the culinary world, he specializes in creating mouthwatering Indo-Italian fusion experiences. </p>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
          <li data-target="#mycarousel" data-slide-to="1"></li>
          <li data-target="#mycarousel" data-slide-to="2"></li>
        </ol>
        <a class="carousel-control-prev" href="#mycarousel" id="Cnextprev" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#mycarousel" id="Cnextprev" role="button" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
          <button class="btn btn-danger btn-sm" id="carouselButton">
            <span class="fa fa-pause"></span>
          </button>
      </div>
    </div>
  </div>

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
    <div class="col col-sm order-sm-first col-md">
      <div class="media">
        <div class="media-body">
          <h2 class="mt-0">Weekend Grand Buffet <span class="badge badge-danger">NEW</span></h2>
          <p class="d-none d-sm-block">Featuring mouthwatering combinations with a choice of five different salads, six enticing appetizers, six
            main entrees and five choicest desserts. Free flowing bubbly and soft drinks. All for just $19.99 per person
          </p>
        </div>
        <img class="d-flex ml-3 img-thumbnail align-self-center" src="img/buffet.png" alt="weekendgrandbuffet">
      </div>
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
          <p class="d-none d-sm-block">Award winning three-star Michelin chef with wide International experience having worked closely with whos-who
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