<?php
include_once (__DIR__ . '/functions.php');
Functions::getConfig ();
Functions::getTemplate ('header', 'SS. Peter and Paul | One Faith. One Heart. One Soul.');
?>
    <div class="hero">
        <div class="heroContent">
            <h4>Welcome</h4>
            <h3 class="heroContentHeader">Welcome to our Website</h3>
            <h5>We are one Big and Happy Family</h5>
        </div>
    </div>

    <!-- Monthy Intention -->
    <div class="intents">
        <div class="container intent">
            <section class="intention row clear">
                <div class="col-md-7">
                    <img class="img img-responsive" src="assets/img/intention.png" alt="Intention Image for February">
                </div>
                <div class="col-md-5">
                    <h4 class="intentHeader">Monthly Intention</h4>
                    <h2 class="intentionHeader">Intention for the Month of February</h2>
                    <p class="intentionContent">For those seeking future life partners, heartwarming friendship and healing from heartbreaks. May they submit to the assuring power of God's love.</p>
                </div>
            </section>
        </div>
    </div>
    <!-- Monthly Intention Ends -->

    <!-- Subscribe Section -->
    <section class="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="subscribe-content">
                        <h3>Subscribe to our Newsletter</h3>
                        <p>Subscribe with your email to get updates from us.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="subscription-box">
                        <form class="subscription-form" method="POST" action="https://masudrana.us14.list-manage.com/subscribe/post?u=bbaf30c9498959598e94abea6&amp;id=ea892eba33" novalidate="true">
                            <div class="subscribe-input">
                                <input type="email" id="subscriber-email" class="subscribe-control" name="EMAIL" placeholder="Enter Your Email">
                            </div>
                            <div class="subscribe-input">
                                <button class="button email-submit-btn btn-white" type="submit">Subscribe<i class="fa fa-paper-plane"></i></button>
                            </div>
                            <div class="form-information">
                                <h5 class="subscription-success text-success"></h5>
                                <h5 class="subscription-error text-danger"></h5>
                                <label class="subscription-label" for="subscriber-email"></label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Subscribe Section End -->

    <!-- Blog Section -->
        <div class="sspp-section blog-section clear">
            <div class="container clear">
                <div class="row clear">
                    <div class="col-lg-12 col-md-12">
                        <div class="area-heading">
                            <h2 class="area-title">Trending Updates</h2>
                            <p>Latest updates from our blog.</p>
                        </div>
                    </div>
                </div>
                <div class="row clear">
                    <div class="col-md-4 col-sm-6 clear">
                        <article class="blog-post clear">
                            <div class="post-thumbnail clear">
                                <a href="#"><img src="http://localhost/ebitinvestment//assets/img/blog/1.jpg" alt=""></a>
                            </div>
                            <div class="post-content clear">
                                <h5 class="post-title"><a href="#">Bitcoin Price Primed to Test</a></h5>
                                <ul class="post-date list-inline">
                                    <li><a href="#"><i class="fa fa-user"></i>Admin</a></li>
                                    <li><a href="#"><i class="fa fa-calendar"></i>07 Aug</a></li>
                                    <li><a href="#"><i class="fa fa-flag"></i>Bitcoin</a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium soluta repudiandae ullam dolore tenetur pariatur, aspernatur consectetur ratione aut.</p>
                                <a class="button" href="#">Read more</a>
                                <div class="clear"></div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 col-sm-6 clear">
                        <article class="blog-post clear">
                            <div class="post-thumbnail clear">
                                <a href="#"><img src="http://localhost/ebitinvestment//assets/img/blog/2.jpg" alt=""></a>
                            </div>
                            <div class="post-content clear">
                                <h5 class="post-title"><a href="#">Bitcoin Price Primed to Test</a></h5>
                                <ul class="post-date list-inline">
                                    <li><a href="#"><i class="fa fa-user"></i>Admin</a></li>
                                    <li><a href="#"><i class="fa fa-calendar"></i>07 Aug</a></li>
                                    <li><a href="#"><i class="fa fa-flag"></i>Bitcoin</a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure impedit dicta voluptates nam, temporibus dolorem rem quibusdam neque quo quidem.</p>
                                <a class="button" href="#">Read more</a>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 hidden-sm">
                        <article class="blog-post">
                            <div class="post-thumbnail">
                                <a href="#"><img src="http://localhost/ebitinvestment/assets/img/blog/3.jpg" alt=""></a>
                            </div>
                            <div class="post-content">
                                <h5 class="post-title"><a href="#">Bitcoin Price Primed to Test</a></h5>
                                <ul class="post-date list-inline">
                                    <li><a href="#"><i class="fa fa-user"></i>Admin</a></li>
                                    <li><a href="#"><i class="fa fa-calendar"></i>07 Aug</a></li>
                                    <li><a href="#"><i class="fa fa-flag"></i>Bitcoin</a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio doloremque dolor tempore aperiam, atque nesciunt quis voluptatibus dolore, omnis.</p>
                                <a class="button" href="#">Read more</a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    <!-- Blog Section End -->
<?php
    Functions::getTemplate ('footer');
?>