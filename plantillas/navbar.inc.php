<nav class="navbar navbar-dark navbar-expand-sm fixed-top">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand mr-auto" href="./index.php">Ristorante Con Fusion</a>
      <div class="collapse navbar-collapse" id="Navbar">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item <?php echo $indexActivo?>"><a class="nav-link" href="./index.php"><span class="fa fa-home fa-lg"> Home</a></li>
          <li class="nav-item <?php echo $aboutusActivo?>"><a class="nav-link" href="./aboutus.php"><span class="fa fa-info fa-lg"> About</a></li>
          <li class="nav-item <?php echo $estaActivo?>"><a class="nav-link" href="#"><span class="fa fa-list fa-lg"> Menu</a></li>
          <li class="nav-item <?php echo $contactusActivo?>"><a class="nav-link" href="./contactus.php"><span class="fa fa-address-card fa-lg">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>