<?php
$titulo = "Contact Us - Ristorante Con Fusion";
$contactusActivo = "active";

include_once 'plantillas/dec-inicio.php';
include_once 'plantillas/navbar.php';
?>

<header class="jumbotron">
    <div class="container">
        <div class="row row-header">
            <div class="col-12 col-sm-8">
                <h1>Ristorante con Fusion</h1>
                <p>We take inspiration from the World's best cuisines, and create a unique fusion experience. Our lipsmacking creations will tickle your culinary senses!</p>
            </div>
            <div class="col-12 col-sm align-self-center">
                <img src="img/logo.png" class="img-fluid">
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <ol class="col-12 breadcrumb">
            <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
            <li class="breadcrumb-item active">Contact Us</li>
        </ol>
        <div class="col-12">
            <h3>Contact Us</h3>
            <hr>
        </div>
    </div>

    <div class="row row-content">
        <div class="col-12">
            <h3>Location Information</h3>
        </div>
        <div class="col-12 col-sm-4 offset-sm-1">
            <h5>Our Address</h5>
            <address style="font-size: 100%">
                121, Clear Water Bay Road<br>
                Clear Water Bay, Kowloon<br>
                HONG KONG<br>
                <i class="fa fa-phone"></i>: +852 1234 5678<br>
                <i class="fa fa-fax"></i>: +852 8765 4321<br>
                <i class="fa fa-envelope"></i>:
                <a href="mailto:confusion@food.net">confusion@food.net</a>
            </address>
        </div>
        <div class="col-12 col-sm-6 offset-sm-1">
            <h5>Map of our Location</h5>
        </div>
        <div class="col-12 col-sm-11 offset-sm-1">
            <div class="btn-group" role="group">
                <a role="button" class="btn btn-primary" href="tel:+85212345678"><i class="fa fa-phone"></i> Call</a>
                <a role="button" class="btn btn-info"><i class="fa fa-skype"></i> Skype</a>
                <a role="button" class="btn btn-success" href="mailto:confusion@food.net"><i class="fa fa-envelope-o"></i> Email</a>
            </div>
        </div>
    </div>

    <div class="row row-content">
        <div class="col-12">
            <h3>Send us your Feedback</h3>
        </div>
        <div class="col-12 col-md-9">
            <form>
                <div class="form-group row">
                    <label for="firstname" class="col-md-2 col-form-label">First Name</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="lastname" class="col-md-2 col-form-label">Last Name</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="telnum" class="col-12 col-md-2 col-form-label">Contact Tel.</label>
                    <div class="col-5 col-md-3">
                        <input type="tel" class="form-control" id="areacode" name="areacode" placeholder="Area Code">
                    </div>
                    <div class="col-7 col-md-7">
                        <input type="tel" class="form-control" id="telnum" name="telnum" placeholder="Tel. Number">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="emailid" class="col-md-2 col-form-label">Email</label>
                    <div class="col-md-10">
                        <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 offset-md-2">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="approve" id="approve" value="">
                            <label class="form-check-label" for="approve">
                                <strong>May we contact you?</strong>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-3 offset-md-1">
                        <select class="form-control">
                            <option>Tel.</option>
                            <option>Email</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="feedback" class="col-md-2 col-form-label">Your FeedBack</label>
                    <div class="col-md-10">
                        <textarea class="form-control" id="feedback" name="feedback" rows="12"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-md-2 col-md-10">
                        <button type="submit" class="btn btn-primary">
                            Send FeedBack
                        </button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-12 col-md">
        </div>
    </div>
</div>

<?php
include_once 'plantillas/footer.php';
include_once 'plantillas/dec-final.php';
?>