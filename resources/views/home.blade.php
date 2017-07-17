<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CloudWalk Digital</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}" >
        <link rel="stylesheet" href="{{ asset('css/slick/slick.css') }}" >
        <link rel="stylesheet" href="{{ asset('css/slick/slick-theme.css') }}" >
        <link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" >
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

        <style>
          #map {
            height: 400px;
            width: 104%;
            margin-left: -2%;
           }
        </style>

        <script type="text/javascript">
            var marker;
            function initMap() {
                var cloudwalk = {lat: 14.629339911026799, lng: 121.04066580533981};
                var map = new google.maps.Map(document.getElementById('map'), {
                  zoom: 20,
                  center: cloudwalk
                });

                var image = '/assets/images/pin.png';
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

    </head>
    <body>

        <nav class="navbar navbar-default navbar-fixed-top" id="nav_bar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img alt="Brand" src="/assets/images/logo_nav.png" class="brand-img img-responsive">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#home">HOME</a></li>
                        <li><a href="#aboutus">ABOUT</a></li>
                        <li><a href="#products">PRODUCTS</a></li>
                        <li><a href="#partners">PARTNERS</a></li>
                        <li><a href="#contact-us" class="btn btn-primary btn-flat">CONTACT US</a></li>
                    </ul>
            </div>
        </nav>

        <div class="container-fluid section-parent">
            <!-- SHAPES -->
            <img src="/assets/images/shapes/rec1.png" alt="Rectangle" class="shape1">
            <img src="/assets/images/shapes/poly2.png" alt="Poly2" class="shape2">
            <img src="/assets/images/shapes/poly1.png" alt="Poly1" class="shape3">
            <!-- HOME -->
            <div class="target" id="home">
                <div class="line"></div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-content">
                    <p class="text-header">Cloudwalk Digital</p>

                    <p>We are a digital solutions company that creates products to improve and innovate companies across the globe. We create unparalleled systematic business solutions to make your operations more efficient.</p>
                    <button type="button" class="btn btn-blue btn-flat btn-lg">GET ESTIMATE</button>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <img src="/assets/images/laptop.png" alt="Laptop" class="img-responsive" style="width: 100%">
                </div>
            </div>

            <!-- ABOUT -->
            <div id="aboutus" class="container-fluid target">
                <div class="col-lg-5 col-md-offset-1 col-md-5 col-sm-5 col-sm-offset-1 col-xs-12 text-content">
                    <p>Expand your brand's reach today, take it to the clouds! We'll be happy to do the heavy lifting (coding) for you!</p>
                    <hr>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 logo">
                    <img src="/assets/images/logo.png" alt="LOGO" class="img-responsive">
                    <p>CLOUDWALK DIGITAL has developed technologically advanced software solutions over the past years with a team of competent software engineers who are providing their best efforts to satisfy the needs of its customers. One of its own top of the line software solutions for the healthcare industry, MEDIX, is already used by leading healthcare providers in the country and worldwide. </p>
                    <p>We aim to create a smart country working efficiently as a team to improve the quality of life for many people while we embrace the digital technology and we make it a point that it will give unmatched benefits to our clients, making their lives and businesses easier and more manageable.</p>
                </div>
                <div class="col-lg-12 col-sm-12 col-xs-12 feature">
                    <div class="container">
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <img src="/assets/images/feature_1.png" alt="Feature 1" class="img-responsive">
                            <p class="text-primary">Online Management System</p>
                            <p>Learning is cool, but knowing is better, and I know the key to success. Find peace, life is like a water fall, yuo've gotta flow. celebrate success right, The only way, apple.</p>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <img src="/assets/images/feature_2.png" alt="Feature 2" class="img-responsive">
                            <p class="text-primary">Web Development</p>
                            <p>I'm up to something. The first of the month is comming, we have to get money, we have no choice. It cost money to eat and they don't want you to eat. You smart, you loyal.</p>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <img src="/assets/images/feature_3.png" alt="Feature 3" class="img-responsive">
                            <p class="text-primary">Digital Marketing</p>
                            <p>It's Important to use cocoa butter. It's the key to more success, why not live smooth? Why live rough? The other day the grass was brown. now it's green because I ain't give up.</p>
                        </div>

                    </div>
                </div>
            </div>

            <!-- PRODUCTS -->
            <div id="products" class="container-fluid target">
                <div class="single-item">

                    <!-- Wrapper for slides -->
                    <div class="item">
                        <img src="/assets/images/photolive-logo.png" alt="Photolive">
                        <div class="slick-caption">
                            <span>Photolive</span> a first of its kind modern, digital photo booth that combines sophisticated design with the latest in digital technology creating a memorable experience for you and your guests. <br>
                            <a href="http://photolive.com.ph/" target=_blank class="btn btn-blue btn-flat btn-lg">VISIT SITE</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/assets/images/bolooka-logo.png" alt="Bolooka" width="250">
                        <div class="slick-caption">
                            <span>Bolooka</span> is an e-commerce platform that provides an exclusive marketplace for local merchants and artists who create only the best products in the country. <br>
                            <a href="http://www.bolooka.com/" target=_blank class="btn btn-blue btn-flat btn-lg">VISIT SITE</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/assets/images/medix-logo.png" alt="Medix" width="250">
                        <div class="slick-caption">
                            <span>Medix</span> is a cloud-based clinic management software that helps healthcare practitioners improve their clinic operations using just one quick and easy service. <br>
                            <a href="https://www.medix.ph/" target=_blank class="btn btn-blue btn-flat btn-lg">VISIT SITE</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/assets/images/verify-logo.png" alt="Verify" width="250">
                        <div class="slick-caption">
                            <span>Verify</span> is a platform that helps companies and organizations track and record the activities and performance deployed manpower and teams <br>
                            <a href="http://project-verify.medix.ph/" target=_blank class="btn btn-blue btn-flat btn-lg">VISIT SITE</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PARTNERS -->
            <div id="partners" class="target">
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 text-content">
                    <p class="text-header">Customer Feedback</p>
                    <hr><br>

                    <p class="text-description">We’ve worked with some of the world’s best customers. Helping these guys succeed with a little help from us was a pretty fulfilling experience for us. We hope to add you here!</p>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 comments">
                    <p class="text-header"><span class="quote">“</span>The best Digital Agency since sliced bread!</p>
                    <p class="text-description">How’s business? Boomin. I’m giving you cloth talk, cloth. Special cloth alert, cut from a special cloth. Surround yourself with angels.</p>
                    <div class="personal-information">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <img src="/assets/images/pom.jpg" alt="Medix" class="img-circle" width="150" height="150">
                        </div>
                        <div class="col-md-8 col-sm-6 col-xs-12 info">
                            <span class="name">Jonathan L. Simmons</span> <br>
                            <span class="company">Blade and Babe Inc.</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CONTACT US -->
            <div id="contact-us" class="container-fluid target">
                <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12 text-content">
                    <p class="text-header">Get a Free Consultation</p>
                    <hr><br>
                    <p class="text-description">Get in touch with us today! Fill out this form and let's get things done.</p>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-8 col-xs-12 form-container">
                    <div class="well">
                        <form class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="first_name" class="form-control">
                                <label for="first_name" class="label-control">FIRST NAME</label>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="last_name" class="form-control">
                                <label for="last_name" class="label-control">LAST NAME</label>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="email" name="email" class="form-control">
                                <label for="email" class="label-control">EMAIL ADDRESS</label>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" name="phone" class="form-control">
                                <label for="phone" class="label-control">PHONE</label>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <textarea class="form-control" name="message" rows="5" cols="80" style="resize: none"></textarea>
                                <label for="message" class="label-control">MESSAGE</label>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                {!! Recaptcha::render() !!}
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <button type="submit" name="submit" class="btn btn-block btn-blue">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="blue-gradient"></div>
            </div>
            <div class="map container-fluid">
                <div class="well well-lg">
                    <p class="text-header">DROP BY OUR OFFICE!</p>
                    <hr><br>
                    <p class="text-description">Unit 1 3BB Building, #79 Kamuning Road, <br> Brgy. Kamuning, Quezon City, 1103</p>
                </div>
                <div id="map"></div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <div class="col-md-8 col-sm-6 col-xs-12 text-content">
                    <p class="text-header">DROP BY OUR OFFICE!</p>
                    <p>whatsup@cloudwalkdigital.com</p>
                    <p>(02)-962-4192</p>
                    <button type="button" class="btn btn-blue btn-flat">START YOUR PROJECT</button>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 socials">
                    <ul>
                        <li><i class="fa fa-facebook-square"></i> <a href="#">TERMS AND CONDITIONS</a></li>
                        <li><i class="fa fa-twitter"></i> <a href="#">BLOG</a></li>
                        <li><i class="fa fa-youtube"></i> <a href="#">CONTACT</a></li>
                    </ul>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12 copyright">
                    <p>COPYRIGHT @ 2017 CLOUDWALK DIGITAL ALL RIGHTS RESERVED</p>
                </div>
            </div>
        </footer>



        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAueyHwdNHm7u2X68gb-4YuncJzRFDoyYI&callback=initMap"></script>
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('css/slick/slick.min.js') }}" ></script>
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
    </body>
</html>
