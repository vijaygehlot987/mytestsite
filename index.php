<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.php">Services</a>
                </li>
            </ul>

        </div>
    </nav>


    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/Slider (3).jpg" alt="Los Angeles" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>We had such a great time in LA!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/Slider (1).jpg" alt="Chicago" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Chicago</h3>
                    <p>Thank you, Chicago!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/Slider (2).jpg" alt="New York" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>New York</h3>
                    <p>We love the Big Apple!</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <section class="my-5">
        <div class="py-5">
            <div>
                <h2 class="text-center">About Us</h2>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <img src="images/Slider (3).jpg" class="img-fluid aboutimg"></img>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <h1 class="display-6">About You </h1>
                        <p class="py-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Enim, quaerat rerum illum aperiam eligendi na
                            tus adipisci nihil suscipit provident officiis
                            necessitatibus? Harum neque eveniet nam quis similique mollitia corporis sit.
                        <p>
                            <a href="about.php" class="btn btn-success">Check More</a>
                    </div>
                </div>



            </div>
        </div>
    </section>
    <section class="my-5">
        <div class="py-5">
            <div>
                <h2 class="text-center">Services</h2>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="card">
                        <img class="card-img-top" class="img-fluid cardimage" src="images/Slider (2).jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">John Doe</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="card">
                        <img class="card-img-top" class="img-fluid cardimage" src="images/Slider (2).jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">John Doe</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="card">
                        <img class="card-img-top" class="img-fluid cardimage" src="images/Slider (2).jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">John Doe</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="card">
                        <img class="card-img-top" class="img-fluid cardimage" src="images/Slider (2).jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">John Doe</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="my-5">
        <div class="py-5">
            <div>
                <h2 class="text-center">Gallery</h2>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-3 col-12">
                    <img class="img-fluid pb-4" src="images/Slider (2).jpg"></img>
                </div>
                <div class="col-lg-4 col-md-3 col-12">
                    <img class="img-fluid pb-4" src="images/Slider (2).jpg"></img>
                </div>
                <div class="col-lg-4 col-md-3 col-12">
                    <img class="img-fluid pb-4" src="images/Slider (2).jpg"></img>
                </div>
                <div class="col-lg-4 col-md-3 col-12">
                    <img class="img-fluid pb-4" src="images/Slider (2).jpg"></img>
                </div>
                <div class="col-lg-4 col-md-3 col-12">
                    <img class="img-fluid pb-4" src="images/Slider (2).jpg"></img>
                </div>
                <div class="col-lg-4 col-md-3 col-12">
                    <img class="img-fluid pb-4" src="images/Slider (2).jpg"></img>
                </div>
                <div class="col-lg-4 col-md-3 col-12">
                    <img class="img-fluid pb-4" src="images/Slider (2).jpg"></img>
                </div>
                <div class="col-lg-4 col-md-3 col-12">
                    <img class="img-fluid pb-4" src="images/Slider (2).jpg"></img>
                </div>
                <div class="col-lg-4 col-md-3 col-12">
                    <img class="img-fluid pb-4" src="images/Slider (2).jpg"></img>
                </div>
                <div class="col-lg-4 col-md-3 col-12">
                    <img class="img-fluid pb-4" src="images/Slider (2).jpg"></img>
                </div>
                <div class="col-lg-4 col-md-3 col-12">
                    <img class="img-fluid pb-4" src="images/Slider (2).jpg"></img>
                </div>
                <div class="col-lg-4 col-md-3 col-12">
                    <img class="img-fluid pb-4" src="images/Slider (2).jpg"></img>
                </div>

                <div class="col-lg-4 col-md-3 col-12">
                    <img class="img-fluid pb-4" src="images/Slider (2).jpg"></img>
                </div>
                <div class="col-lg-4 col-md-3 col-12">
                    <img class="img-fluid pb-4" src="images/Slider (2).jpg"></img>
                </div>
                <div class="col-lg-4 col-md-3 col-12">
                    <img class="img-fluid pb-4" src="images/Slider (2).jpg"></img>
                </div>



            </div>

        </div>

        </div>
    </section>
    <section class="my-5">
        <div class="py-5">
            <div>
                <h2 class="text-center">Contact Us</h2>
            </div>
        </div>
        <div class="w-50 m-auto">
            <form action="user.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email Id</label>
                    <input type="text" name="user" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>Mobile Number</label>
                    <input type="text" name="user" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>Comment</label>
                    <textarea class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>

    <footer>
        <p class="p3 bg-dark text-white text-center" >Fab</hp>


       
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>