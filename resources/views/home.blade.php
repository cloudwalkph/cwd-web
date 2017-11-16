<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cloudwalk Digital</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}" >
        <link rel="stylesheet" href="{{ asset('css/slick/slick.css') }}" >
        <link rel="stylesheet" href="{{ asset('css/slick/slick-theme.css') }}" >
        <link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" >

        <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

        <style>
            #map {
                height: 400px;
                width: 104%;
                margin-left: -2%;
            }
        </style>

        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    </head>
    <body>

        <nav class="navbar navbar-default navbar-fixed-top" id="nav_bar">
            <div class="container-fluid" style="padding: 10px 50px">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img alt="Brand" src="/images/logo_nav.png" class="brand-img img-responsive">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#home">HOME</a></li>
                        <li><a href="#aboutUs">ABOUT</a></li>
                        <li><a href="#products">PRODUCTS</a></li>
                        {{--<li><a href="#partners">PARTNERS</a></li>--}}
                        <li><a href="#contact-us" class="btn btn-primary btn-flat">CONTACT US</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid section-parent">
            <!-- SHAPES -->
            <div class="shape-container--1 shape-animation"><div class="random-shape"><img src="/images/shapes/rec1.png" alt="Rectangle" class="shape1"></div></div>

            <img src="/images/shapes/poly2.png" alt="Poly2" class="shape2">
            <img src="/images/shapes/poly1.png" alt="Poly1" class="shape3">
            <!-- HOME -->
            <div class="target" id="home">
                <div class="line"></div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 header-content">
                    <h4>OUR NEXT PROJECT:</h4>
                    <h1>YOUR NEW WEBSITE</h1>
                    <hr class="orange-line"><br>

                    <p>
                        Let's create something that will convert visitors to instant customers.
                        With clean and clear UI/UX and branded aesthetics, start creating valuable qualified leads.
                    </p>
                    <div class="button_home">
                        <a href="#contact-us" class="btn btn-home btn-flat btn-lg">GET ESTIMATE</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <img src="/images/laptop.png" alt="Laptop" class="img-responsive" style="width: 100%">
                </div>
            </div>

            <!-- ABOUT -->
            <div id="aboutUs" class="container-fluid target">
                <div class="col-lg-5 col-md-offset-1 col-md-5 col-sm-5 col-sm-offset-1 col-xs-12 text-content">
                    <p>
                        Expand your brand's reach today, take it to the clouds!
                        We'll be happy to do the heavy lifting (Coding) for you!
                    </p>
                    <hr>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 logo">
                    <img src="/images/logo.png" alt="LOGO" class="img-responsive">
                    <hr class="orange-vertical-line">
                    <p>
                        We are a digital solutions company that create products to improve and innovate
                        companies across the globe. We create unparalleled systematic business solutions
                        to make your operations more efficient.
                    </p>
                </div>
                <div class="col-lg-12 col-sm-12 col-xs-12 feature">
                    <div class="container">
                        <h1>SOFTWARE SOLUTIONS</h1>
                        <p class="text-center">
                            Cloudwalk's core service is developing software solutions for various industries.
                            We treat every project as a collaboration with clients, understanding issues and
                            objectives and recommend the best solution that we can build and meet client's business goals.
                        </p>
                        <div class="col-md-12">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <img src="/images/web.svg" alt="Feature 1" class="img-responsive">
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 feature-description">
                                <h2 class="text-primary">Web Development</h2>
                                <p>
                                    Creating customized web development is the first service that Cloudwalk has
                                    offered and has always been in out team's DNA, servicing leading businesses,
                                    multinational companies to SMEs, From a one-pager sites to ones with intricate
                                    details, our team would be very happy to take on your web requirements.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <img src="/images/mobile.svg" alt="Feature 1" class="img-responsive">
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 feature-description">
                                <h2 class="text-primary">Mobile App (iOS and Android)</h2>
                                <p>
                                    Cloudwalk offers its expertise in creating a mobile app that will be useful for your
                                    audience. From user interface, user experience to execution in iOS and Android
                                    app, our team will work with you to launch a valuabe app.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <img src="/images/uiux.svg" alt="Feature 1" class="img-responsive">
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 feature-description">
                                <h2 class="text-primary">UI/UX Design</h2>
                                <p>
                                    We make sure that our User Interface and User Experience are composed of two
                                    key elements: Art and Science. We strongly advocate design that is simple, relevant
                                    and aesthetically pleasing and can be combined with scientific disciplines that
                                    pertains into the users' behavior and instincts in using the software, as well as the
                                    analysis in making the process more efficient.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <img src="/images/hardware.svg" alt="Feature 1" class="img-responsive">
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 feature-description">
                                <h2 class="text-primary">Hardware Integrations</h2>
                                <p>
                                    Build a more advanced business solutions with software and hardware integration.
                                    Cloudwalk takes pride of its team of software engineers that can integrate your
                                    software solutions to its required and applicable equipment.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- PRODUCTS -->
            <div id="products" class="container-fluid target">
                <h1 class="text-primary">Products</h1>

                <div class="single-item">
                    <!-- Wrapper for slides -->
                    <div class="item">
                        <img src="/images/photolive-logo.png" alt="Photolive">
                        <div class="slick-caption">
                            <span>Photolive</span> a first of its kind modern, digital photo booth that combines sophisticated design with the latest in digital technology creating a memorable experience for you and your guests. <br>
                            <a href="http://photolive.com.ph/" target=_blank class="btn btn-blue btn-flat btn-lg hide">VISIT SITE</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/images/bolooka-logo.png" alt="Bolooka" width="250">
                        <div class="slick-caption">
                            <span>Bolooka</span> is an e-commerce platform that provides an exclusive marketplace for local merchants and artists who create only the best products in the country. <br>
                            <a href="http://www.bolooka.com/" target=_blank class="btn btn-blue btn-flat btn-lg hide">VISIT SITE</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/images/medix-logo.png" alt="Medix" width="250">
                        <div class="slick-caption">
                            <span>Medix</span> is a cloud-based clinic management software that helps healthcare practitioners improve their clinic operations using just one quick and easy service. <br>
                            <a href="https://www.medix.ph/" target=_blank class="btn btn-blue btn-flat btn-lg hide">VISIT SITE</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/images/verify-logo.png" alt="Verify" width="250">
                        <div class="slick-caption">
                            <span>Verify</span> is a platform that helps companies and organizations track and record the activities and performance deployed manpower and teams <br>
                            <a href="http://verify.cloudwalkdigital.com/" target=_blank class="btn btn-blue btn-flat btn-lg hide">VISIT SITE</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PARTNERS -->
            {{--<div id="partners" class="target">--}}
                {{--<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 text-content">--}}
                    {{--<h2 class="text-primary">Customer Feedback</h2>--}}
                    {{--<hr class="orange-line"><br>--}}

                    {{--<p class="text-description">We’ve worked with some of the world’s best customers. Helping these guys succeed with a little help from us was a pretty fulfilling experience for us. We hope to add you here!</p>--}}
                {{--</div>--}}
                {{--<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 comments">--}}
                    {{--<p class="text-header"><span class="quote">“</span>The best Digital Agency since sliced bread!</p>--}}
                    {{--<p class="text-description">How’s business? Boomin. I’m giving you cloth talk, cloth. Special cloth alert, cut from a special cloth. Surround yourself with angels.</p>--}}
                    {{--<div class="personal-information">--}}
                        {{--<div class="col-md-4 col-sm-6 col-xs-4 pic">--}}
                            {{--<img src="/images/thompson.png" alt="Medix" class="img-circle" width="150" height="150">--}}
                        {{--</div>--}}
                        {{--<div class="col-md-8 col-sm-6 col-xs-8 info">--}}
                            {{--<p class="name">Jonathan L. Simmons</p>--}}
                            {{--<p class="company">Blade and Babe Inc.</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}

            <!-- CONTACT US -->
            <div id="contact-us" class="container-fluid target">
                <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12 text-content">
                    <h2 class="text-primary">Get a Free Consultation</h2>
                    <hr class="orange-line"><br>
                    <p class="text-description">Get in touch with us today! Fill out this form and let's get things done.</p>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-8 col-xs-12 form-container">
                    <div class="well">
                        <form class="row" name="sentMessage" id="contactForm" novalidate>
                            <input type="text" class="token" name="_token" value="{{ csrf_token() }}" hidden>
                            <div class="col-sm-12"><div id="success"></div></div>
                            <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                <p class="help-block text-danger"></p>
                                <input type="text" name="first_name" class="form-control" id="first_name"
                                       required data-validation-required-message="Please enter your first name.">
                                <label for="first_name" class="label-control">FIRST NAME</label>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                <p class="help-block text-danger"></p>
                                <input type="text" name="last_name" class="form-control" id="last_name"
                                       required data-validation-required-message="Please enter your last name.">
                                <label for="last_name" class="label-control">LAST NAME</label>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                <p class="help-block text-danger"></p>
                                <input type="email" name="email" class="form-control" id="email"
                                       required data-validation-required-message="Please enter your email address.">
                                <label for="email" class="label-control">EMAIL ADDRESS</label>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                <p class="help-block text-danger"></p>
                                <input type="text" name="phone" class="form-control" id="phone"
                                       required data-validation-required-message="Please enter your phone.">
                                <label for="phone" class="label-control">PHONE</label>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                <p class="help-block text-danger"></p>
                                <textarea class="form-control" name="message" rows="5" cols="80" style="resize: none" id="message"
                                          required data-validation-required-message="Please enter your message."></textarea>
                                <label for="message" class="label-control">MESSAGE</label>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                {!! Recaptcha::render() !!}
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <button type="submit" id="btn-submit" name="submit" class="btn btn-block btn-blue">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="blue-gradient"></div>
            </div>
            <div class="map container-fluid">
                <div class="well well-lg">
                    <h1 class="text-primary">DROP BY OUR OFFICE!</h1>
                    <hr><br>
                    <p class="text-description">79 3BB Building Kamuning Street Corner, <br> 11th Jamboree, Quezon City, 1100 Metro Manila</p>
                </div>
                <div id="map"></div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <div class="col-lg-8 col-md-7 col-sm-6 col-xs-12 text-content">
                    <p class="text-header">WORK WITH US TODAY!</p>
                    <p>whatsup@cloudwalkdigital.com</p>
                    <p>(02) 414 4014</p>
                    <div class="button_home">
                        <a href="#contact-us" class="btn btn-blue btn-flat">START YOUR PROJECT</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-6 col-xs-12 socials">
                    <ul>
                        <li><i class="fa fa-facebook-square"></i> <a href="#">TERMS AND CONDITIONS</a></li>
                        <li><i class="fa fa-twitter"></i> <a href="#">BLOG</a></li>
                        <li><i class="fa fa-youtube"></i> <a href="#">CONTACT</a></li>
                    </ul>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12 copyright">
                    <p>COPYRIGHT © 2017 CLOUDWALK DIGITAL ALL RIGHTS RESERVED</p>
                </div>
            </div>
        </footer>

        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('css/slick/slick.min.js') }}" ></script>
        <script src="{{ asset('js/jqBootstrapValidation.js') }}"></script>
        <script src="{{ asset('js/contact_me.js') }}"></script>
        <script>
            $(document).ready(function(){
                $('.single-item').slick({
                    dots: true,
                    infinite: true,
                    speed: 300,
                    slidesToShow: 1,
                    cssEase: 'linear'
                });
                $('a[href*="#"]:not([href="#"])').click(function() {
                    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        if (target.length) {
                            $('html, body').animate({
                                scrollTop: target.offset().top-20
                            }, 1000);
                            return false;
                        }
                    }
                });

                // Cache selectors
                var lastId,
                 topMenu = $("#nav_bar"),
                 topMenuHeight = topMenu.outerHeight()+1,
                 // All list items
                 menuItems = topMenu.find("a"),
                 // Anchors corresponding to menu items
                 scrollItems = menuItems.map(function(){
                   var item = $($(this).attr("href"));
                    if (item.length) { return item; }
                 });

                var homeButton = $(".button_home a");

                // Bind click handler to menu items
                // so we can get a fancy scroll animation
                menuItems.click(function(e){
                  var href = $(this).attr("href"),
                      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
                  $('html, body').stop().animate({
                      scrollTop: offsetTop
                  }, 850);
                  e.preventDefault();
                });

                homeButton.click(function(e){
                    var href = $(this).attr("href"),
                        offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
                    $('html, body').stop().animate({
                        scrollTop: offsetTop
                    }, 850);
                    e.preventDefault();
                });


                // Bind to scroll
                $(window).scroll(function(){
                   // Get container scroll position
                   var fromTop = $(this).scrollTop()+topMenuHeight;

                   // Get id of current scroll item
                   var cur = scrollItems.map(function(){
                     if ($(this).offset().top < fromTop)
                       return this;
                   });
                   // Get the id of the current element
                   cur = cur[cur.length-1];
                   var id = cur && cur.length ? cur[0].id : "";

                   if (lastId !== id) {
                       lastId = id;
                       // Set/remove active class
                       menuItems
                         .parent().removeClass("active")
                         .end().filter("[href=\\#"+id+"]").parent().addClass("active");
                   }
                });
            })

        </script>
        <script>
            $(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
        </script>

        <script type="text/javascript">
            var marker;
            function initMap() {
                var cloudwalk = {lat: 14.629339911026799, lng: 121.04066580533981};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 20,
                    center: cloudwalk
                });

                var image = '/images/pin.png';
                marker = new google.maps.Marker({
                    position: cloudwalk,
                    animation: google.maps.Animation.DROP,
                    map: map,
                    icon: image
                });
                map.setOptions({ scrollwheel: false });

                marker.addListener('click', toggleBounce);
            }

            function toggleBounce() {
                if (marker.getAnimation() !== null) {
                    marker.setAnimation(null);
                } else {
                    marker.setAnimation(google.maps.Animation.BOUNCE);
                }
            }
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAueyHwdNHm7u2X68gb-4YuncJzRFDoyYI&callback=initMap"></script>
    </body>
</html>
