<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>SCHOOL | WEBSITE</title>
        
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/hero-slider.css">
        <link rel="stylesheet" href="css/owl-carousel.css">
        <link rel="stylesheet" href="css/style.css">

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>
 
    <div class="wrap">
        <header id="header">
            <div class="">
                <div class="row">
                    <div class="col-md-12">
                        <button id="primary-nav-button" type="button">Menu</button>
                        <a href="index.html"><div class="logo">
                            <img src="img/bs.jpg" alt="Venue Logo">
                        </div></a>
                        <nav id="primary-nav" class="dropdown cf">
                            <ul class="dropdown menu">
                                <li class='active'><a href="/">Home</a></li>

                                <li><a href="/vsyllabus">View Syllabus</a></li>

                                <li><a href="/vnotes">View Notes</a></li>

                                <li><a href="/vtimetable">View Time Table</a></li>

                                <li><a href="/vresults">View Results</a></li>

                                <li><a href="/feed">Write Feedback</a></li>

                                <li><a href="/logout">Logout</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
    </div>

    <section class="banner banner-secondary" id="top">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-caption">
                        <div class="line-dec"></div>
                        <h2>Write FeedBack</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main>
        <form action="/fb" method="post">
            @csrf
        <section class="popular-places">
            <div class="container">
                <div class="contact-content">
                    <div class="row">
                        <div class="col-md-8"> 
                            <div class="left-content">
                                <div class="row">
                                    <div class="col-md-12">
                                      <fieldset>
                                        <input name="stname" type="text" class="form-control" id="stname" placeholder="Your name..." required="">
                                      </fieldset>
                                    </div>
                                     <div class="col-md-12">
                                      <fieldset>
                                        <input name="tchrname" type="text" class="form-control" id="tchrname" placeholder="Teacher Name..." required="">
                                      </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                      <fieldset>
                                        <textarea name="feedback" rows="6" class="form-control" id="feedback" placeholder="Your Feedback..." required=""></textarea>
                                      </fieldset>
                                    </div>
                                    <div>
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                      </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>      
                </div>
            </div>
        </section>
        </form>
    </main>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="about-veno">
                        <div class="logo">
                            <img src="img/images.jpg" alt="Venue Logo">
                        </div>
                        <p>???Learn as much as you can while you are young, since life becomes too busy later.???</p>
                        <ul class="social-icons">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="useful-links">
                        <div class="footer-heading">
                            <h4>Useful Links</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <ul>
                                    <li><a href="/"><i class="fa fa-stop"></i>Home</a></li>
                                    <li><a href="/about"><i class="fa fa-stop"></i>About</a></li>
                                    <li><a href="/contact"><i class="fa fa-stop"></i>Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contact-info">
                        <div class="footer-heading">
                            <h4>Contact Information</h4>
                        </div>
                        <p><i class="fa fa-map-marker"></i>ERNAKULAM,KOCHI</p>
                        <ul>
                            <li><span>Phone:</span><a href="#">7418529635</a></li>
                            <li><span>Email:</span><a href="#">contact@school.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="sub-footer">
        <p>Copyright ?? 2020<a href="#">Learning.com</a></p>
    </div>
</body>
</html>