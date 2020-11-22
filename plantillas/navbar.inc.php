<nav class="navbar navbar-dark navbar-expand-sm fixed-top">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand mr-auto" href="./index.php"><img src="img/logo.png" height="30" width="41"></a>
    <div class="collapse navbar-collapse" id="Navbar">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item <?php echo $indexActivo ?>"><a class="nav-link" href="./index.php"><span class="fa fa-home fa-lg"> Home</a></li>
        <li class="nav-item <?php echo $aboutusActivo ?>"><a class="nav-link" href="./aboutus.php"><span class="fa fa-info fa-lg"> About</a></li>
        <li class="nav-item <?php echo $estaActivo ?>"><a class="nav-link" href="#"><span class="fa fa-list fa-lg"> Menu</a></li>
        <li class="nav-item <?php echo $contactusActivo ?>"><a class="nav-link" href="./contactus.php"><span class="fa fa-address-card fa-lg">Contact</a></li>
      </ul>
      <span class="navbar-text">
        <a data-toggle="modal" data-target="#loginModal">
          <span class="fa fa-sign-in"></span> Login
        </a>
      </span>
    </div>
  </div>
</nav>

<div id="loginModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg" role="content">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Login</h4>
        <button type="button" class="close" data-dismiss="modal">
          &times;
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-row">
            <div class="form-group col-sm-4">
              <label class="sr-only" for="exampleInputEmail3">Email address</label>
              <input type="email" class="form-control form-control-sm mr-1" id="exampleInputEmail3" placeholder="Enter email">
            </div>
            <div class="form-group col-sm-4">
              <label class="sr-only" for="exampleInputPassword3">Password</label>
              <input type="password" class="form-control form-control-sm mr-1" id="exampleInputPassword3" placeholder="Password">
            </div>
            <div class="col-sm-auto">
              <div class="form-check">
                <input class="form-check-input" type="checkbox">
                <label class="form-check-label"> Remember me
                </label>
              </div>
            </div>
          </div>
          <div class="form-row">
            <button type="button" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary btn-sm ml-1">Sign in</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>