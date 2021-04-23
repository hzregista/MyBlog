
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Get Start</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#services">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#portfolio">Articles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">History</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#team">Team</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<header class="masthead">
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in">Hello World!</div>
            <div class="intro-heading text-uppercase">Welcome To Our Blog</div>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Who Are We?</a>
        </div>
    </div>
</header>

<section class="page-section" id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">About Us and Our Services</h2>
                <h3 class="section-subheading text-muted">A title</h3>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="service-heading">Example1.1</h4>
                <p class="text-muted">Example Sentence 1.1</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="service-heading">Example1.2</h4>
                <p class="text-muted">Example Sentence 1.2</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="service-heading">Example1.3</h4>
                <p class="text-muted">Example Sentence 1.3</p>
            </div>
        </div>
    </div>
</section>
<section class="bg-light page-section" id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">About Us and Our Services</h2>
                <h3 class="section-subheading text-muted">A title again :)</h3>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="service-heading">Example2.1</h4>
                <p class="text-muted">Example Sentence 2.1</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="service-heading">Example2.2</h4>
                <p class="text-muted">Example Sentence 2.2</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="service-heading">Example2.3</h4>
                <p class="text-muted">Example Sentence 2.3</p>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Grid -->
<section class=" page-section" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">My Blogs</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
        </div>
        <div class="row">
            <?php foreach ($data["bl"] as $key => $value) {
                ?>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal<?php echo $key; ?>">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" style="height: 200px; width: 100%;" src="<?php echo SOURCE; ?>images/<?php echo $value["images"]; ?>" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4><?php echo $value["hood"]; ?></h4>
                        <p class="text-muted"><?php echo $value["title"]; ?></p>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</section>

<!-- About -->
<section class="page-section" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">What Have We Done?</h2>
                <h3 class="section-subheading text-muted">Information About Us</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="timeline">
                    <li>
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src="<?php echo SOURCE; ?>img/about/1.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Hood 1</h4>
                                <h4 class="subheading">Title 1</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Content 1</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src="<?php echo SOURCE; ?>img/about/2.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Hood 2</h4>
                                <h4 class="subheading">Title 2</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Content 2</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src="<?php echo SOURCE; ?>img/about/4.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Hood 3</h4>
                                <h4 class="subheading">Title 3</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Content 3</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="rounded-circle img-fluid" src="<?php echo SOURCE; ?>img/about/3.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Hood 4</h4>
                                <h4 class="subheading">Title 4</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Content 4</p>
                            </div>
                        </div>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Team -->
<section class="bg-light page-section" id="team">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">The people I inspire</h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-4 col-sm-6 col-md-12 col-lg-12 col-xl-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="<?php echo SOURCE; ?>img/team/1.jpg" alt="">
                        <h4>Anyone</h4>
                        <p class="text-muted">Information about the anyone</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                </div>
            </div>
            <div class="col-4 col-sm-6 col-md-6  col-lg-12  col-xl-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="<?php echo SOURCE; ?>img/team/2.jpg" alt="">
                        <h4>Someone</h4>
                        <p class="text-muted">Information about the someone</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                </div>
            </div>
            <div class="col-4 col-sm-12 col-md-6  col-lg-12  col-xl-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="<?php echo SOURCE; ?>img/team/3.jpg" alt="">
                        <h4>And One More Person</h4>
                        <p class="text-muted">Information about the person</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                        </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <p class="large text-muted"></p>
            </div>
        </div>
    </div>
</section>

<!-- Clients -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img class="img-fluid d-block mx-auto" src="<?php echo SOURCE; ?>img/logos/envato.jpg" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img class="img-fluid d-block mx-auto" src="<?php echo SOURCE; ?>img/logos/designmodo.jpg" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img class="img-fluid d-block mx-auto" src="<?php echo SOURCE; ?>img/logos/themeforest.jpg" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img class="img-fluid d-block mx-auto" src="<?php echo SOURCE; ?>img/logos/creative-market.jpg" alt="">
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Contact -->
<section class="page-section" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase"></h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form action="<?php echo SOURCE; ?>mail/sendemail.php"  name="sentMessage" novalidate="novalidate">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="name" type="text" placeholder="Fullname *" required="required" data-validation-required-message="Full Name">
                                    <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" placeholder="EMail *" required="required" data-validation-required-message="E-Mail">
                                    <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="phone" type="tel" placeholder="GSM *" required="required" data-validation-required-message="GSM">
                                    <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" id="message" placeholder="Message *" required="required" data-validation-required-message="Message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4">
                <span class="copyright">Copyright &copy; MFD 2019</span>
            </div>
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.instagram.com">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-inline quicklinks">
                    <li class="list-inline-item">
                        <a href="#">Privacy Policy</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">Terms of Use</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<?php foreach ($data["bl"] as $key => $value) {
    ?>
    <div class="portfolio-modal modal fade" id="portfolioModal<?php echo $key; ?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <h2 class="text-uppercase"><?php echo $value["hood"] ?></h2>
                                <p class="item-intro text-muted"><?php echo $value["title"] ?></p>
                                <img class="img-fluid d-block mx-auto" src="<?php echo SOURCE ?>images/<?php echo $value["images"] ?>" alt="">
                                    <p><?php echo substr($value["content"], 0, 300) ?> </p>
                                    <ul class="list-inline">
                                        <li>Date: <?php echo functions::date("now", $value["date"]); ?></li>

                                        <li>Category: <?php echo functions::categories()[$value["category"]]; ?></li>
                                    </ul>
                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                        <i class="fas fa-times"></i>
                                        Close</button>
                                    <a href="<?php echo MAIN_DIRECTORY ?>blog/article/<?php echo $value["id"] ?>"> <button class="btn btn-success"  type="button">

                                            View All</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>



