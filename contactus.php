<html>
<head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    
    <title>Virtual Incubation Center</title>
    <link rel="icon" href="./img/logo.png" type="image/icon type">
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand mr-auto" href="#"><img src="img/logo.png" height="30" width="41" alt="logo"></a>
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="./Main_home.php"><span class="fa fa-home fa-lg"></span> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="./aboutus.php"><span class="fa fa-info fa-lg"></span> About</a></li>
                    <li class="nav-item"><a class="nav-link" href="./public_projects.php"><span class="fa fa-list fa-lg"></span> Our Projects</a></li>
                    <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-address-card fa-lg"></span> Contact Us</a></li>
                </ul>
                <span class="navbar-text">
                    <a class="nav-link" href="./login.php" target="_blank">
                        <span class="fa fa-sign-in"></span> Login
                    </a>
                </span>
            </div>
        </div>
    </nav>
    <div class="container">
            <div class="row row-content">
                <div class="col-12">
                <h3>Location Information</h3>
                </div>
                <div class="col-12 col-sm-4 offset-sm-1">
                        <h5>Our Address</h5>
                        <address>
                        3-5-1026,Hari Vihar Colony<br>
                        Narayanguda, Hyderabad<br>
                        Telangana - 500029<br>
                        <i class="fa fa-phone fa-lg"></i>: 040 2326 1407<br>
                        <i class="fa fa-fax fa-lg"></i>: 040 2326 1407<br>
                        <i class="fa fa-envelope fa-lg"></i>: <a href="mailto:vic.info@gmail.com">vic.info@gmail.com</a>
                        </address>
                </div>
                <div class="col-12 col-sm-6 offset-sm-1">
                    <h5>Map of our Location</h5>
                    <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3807.3039887726163!2d78.48784931482608!3d17.397193188072716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb99c44533324f%3A0x8aa5456a7d836bb5!2sKeshav%20Memorial%20Institute%20Of%20Technology!5e0!3m2!1sen!2sin!4v1616912794752!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-12 col-sm-11 offset-sm-1">
                    <div class="btn-group" role="group">
                        <a role="button" class="btn btn-primary" href="tel:+8512345678"><i class="fa fa-phone"></i> Call</a>
                        <a role="button" class="btn btn-info" ><i class="fa fa-skype"></i> Skype</a>
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
                                <input type="text" class="form-control" id="firstname" name="firstname"
                                    placeholder="First Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="lastname" class="col-md-2 col-form-label">Last Name</label>
                            <div class="col-md-10">
                                <input type="text" class="form-control" id="lastname" name="lastname"
                                    placeholder="Last Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="telnum" class="col-12 col-md-2 col-form-label">Contact Tel.</label>
                            <div class="col-5 col-md-3">
                                <input type="text" class="form-control" id="areacode" name="Area Code"
                                    placeholder="Area Code">
                            </div>
                            <div class="col-7 col-md-7">
                                <input type="text" class="form-control" id="telnum" name="telnum"
                                    placeholder="Tel. Number">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="emailid" class="col-md-2 col-form-label">Email</label>
                            <div class="col-md-10">
                                <input type="email" class="form-control" id="emailid" name="emailid"
                                    placeholder="Email">
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
                            <div class="col-md-3 offset-1">
                                <select class="form-control">
                                    <option>Tel.</option>
                                    <option>Email</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Feedback" class="col-md-2 col-form-label">Your Feedback</label>
                            <div class="col-md-10">
                                <textarea class="form-control" id="feedback" name="feedback"
                                    rows="12"></textarea>
                            </div>
                        </div>      
                        <div class="form-group row">
                            <div class="offset-md-2 col-md-10">
                                <button type="submit" class="btn btn-primary">
                                    Send Feedback
                                </button>
                            </div>
                        </div>      
                    </form>
                </div>
                <div class="col-12 col-md">
                </div>
            </div>
        </div>
    </div>
    <footer class="footer  ">
        <div class="container">
            <div class="row">             
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="./Main_home.html">Home</a></li>
                        <li><a href="./aboutus.html">About</a></li>
                        <li><a href="./mentors_page.html">Our Mentors</a></li>
                        <li><a href="./investors_page.html">Our Investors</a></li>
                        <li><a href="./projects_page.html">Our Projects</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
		              3-5-1026,Hari Vihar Colony<br>
		              Narayanguda, Hyderabad<br>
		              Telangana - 500029<br>
		              <i class="fa fa-phone fa-lg"></i>: 040 2326 1407<br>
		              <i class="fa fa-fax fa-lg"></i>: 040 2326 1407<br>
		              <i class="fa fa-envelope fa-lg"></i>: <a href="mailto:vic.info@gmail.com">vic.info@gmail.com</a>
		           </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a class="btn btn-social-icon btn-google" href="http://google.com/+" target="_blank"><i class="fa fa-google-plus fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id=" target="_blank"><i class="fa fa-facebook fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/" target="_blank"><i class="fa fa-twitter fa-lg"></i></a>
                        <a class="btn btn-social-icon btn-youtube" href="http://youtube.com/" target="_blank"><i class="fa fa-youtube fa-lg"></i></a>
                        <a class="btn btn-social-icon " href="mailto:" target="_blank"><i class="fa fa-envelope-o fa-lg"></i></a>
                    </div>
                </div>
           </div>
           <div class="row justify-content-center">             
                <div class="col-auto">
                    <p>© Copyright 2021. All rights reserved.</p>
                </div>
           </div>
        </div>
    </footer>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>