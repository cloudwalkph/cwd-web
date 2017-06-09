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

    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
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
                        <li><a href="#about">ABOUT</a></li>
                        <li><a href="#products">PRODUCTS</a></li>
                        <li><a href="#partners">PARTNERS</a></li>
                        <li><a href="#contact-us" class="btn btn-primary btn-flat">CONTACT US</a></li>
                    </ul>
            </div>
        </nav>

        <div class="container-fluid section-parent">
            <!-- SHAPES -->
            <img src="/assets/images/shapes/rec1.png" alt="Rectangle" class="shape1">
            <img src="/assets/images/shapes/rec2.png" alt="Rectangle2" class="shape2">
            <!-- HOME -->
            <div id="home">
                <div class="line"></div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-content">
                    <p class="sub-header">OUR NEXT PROJECT:</p>
                    <p class="text-header">YOUR NEW WEBSITE</p>

                    <p>Let's create something that will convert visitors to instant customers. With clean and clear UI/UX and branded aesthetics, create valuable qualified leads.</p>
                    <button type="button" class="btn btn-blue btn-flat btn-lg">GET ESTIMATE</button>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <img src="/assets/images/laptop.png" alt="Laptop" class="img-responsive" style="width: 100%">
                </div>
            </div>

            <!-- ABOUT -->
            <div id="about" class="container-fluid">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-content">
                    <p>Expand your brand's reach today, take it to the clouds! We'll be happy to do the heavy lifting (coding) for you!</p>
                    <hr>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 logo">
                    <img src="/assets/images/logo.png" alt="LOGO" class="img-responsive">
                    <p>We are digital solutions company that create products to improve and innovate companies across the globe. We create unparalleled systematic business solutions to make your operations more efficient.</p>
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
            <div id="products" class="container-fluid">
                <div class="single-item">

                    <!-- Wrapper for slides -->
                    <div class="item">
                        <img src="/assets/images/photolive-logo.png" alt="Photolive">
                        <div class="slick-caption">
                            <p>Products</p>
                            <span>Photolive</span> is a social media tool and the first digital photo booth in the country that allows brands to gain valuable presence in top social networking sites like Facebook, Instagram, Twitter and email in real time. <br>
                            <a href="http://photolive.com.ph/" target=_blank class="btn btn-blue btn-flat btn-lg">VISIT SITE</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/assets/images/bolooka-logo.png" alt="Bolooka" width="250" class="landscape-img">
                        <div class="slick-caption">
                            <p>Products</p>
                            <span>Bolooka</span> is an e-commerce platform that provides an exclusive marketplace for local merchants and artists who create only the best products in the country. <br>
                            <a href="http://www.bolooka.com/" target=_blank class="btn btn-blue btn-flat btn-lg">VISIT SITE</a>
                        </div>
                    </div>
                    <div class="item">
                        <img src="/assets/images/medix-logo.png" alt="Medix" width="250" class="landscape-img">
                        <div class="slick-caption">
                            <p>Products</p>
                            <span>Medix</span> is a cloud-based clinic management software that helps healthcare practitioners improve their clinic operations using just one quick and easy service. It is a 24/7 accessible manager that efficiently organizes appointments and clinic records. <br>
                            <a href="https://www.medix.ph/" target=_blank class="btn btn-blue btn-flat btn-lg">VISIT SITE</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PARTNERS -->
            <div id="partners">
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 text-content">
                    <p class="text-header">Customer Feedback</p>
                    <hr><br>

                    <p class="text-description">We’ve worked with some of the world’s best customers. Helping these guys succeed with a little help from us was a pretty fulfilling experience for us. We hope to add you here!</p>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 comments">
                    <p class="text-header"><span class="quote">“</span>The best Digital Agency since sliced bread!</p>
                    <p class="text-description">How’s business? Boomin. I’m giving you cloth talk, cloth. Special cloth alert, cut from a special cloth. Surround yourself with angels.</p>
                    <div class="personal-information">
                        <div class="col-md-4 col-sm-6 col-xs-4">
                            <img src="/assets/images/pom.jpg" alt="Medix" class="img-circle" width="150" height="150">
                        </div>
                        <div class="col-md-8 col-sm-6 col-xs-8 info">
                            <span class="name">Jonathan L. Simmons</span> <br>
                            <span class="company">Blade and Babe Inc.</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CONTACT US -->
            <div id="contact-us" class="container-fluid">
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 text-content">
                    <p class="text-header">Get a Free Consultation</p>
                    <hr><br>
                    <p class="text-description">Get in touch with us today! Fill out this form and let's get things done.</p>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 form-container">
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
                    <p class="text-description">79 3BB Building Kamuning Street Corner,<br>11th Jamboree, Quezon City, 1100 Metro Manila</p>
                </div>
                <div id="map"></div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <div class="col-md-8 col-sm-6 col-xs-12 text-content">
                    <p class="text-header">DROP BY OUR OFFICE!</p>
                    <p>whatsup@cloudwalkdigital.com</p>
                    <p>(02) 414 4014</p>
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
        <script src="{{ asset('css/slick/slick.min.js') }}" ></script>
        <script>
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

                marker.addListener('click', toggleBounce);
            }

            function toggleBounce() {
                if (marker.getAnimation() !== null) {
                  marker.setAnimation(null);
                } else {
                  marker.setAnimation(google.maps.Animation.BOUNCE);
                }
            }

            $(document).ready(function(){
                $('.single-item').slick({
                  dots: true,
                  infinite: true,
                  speed: 500,
                  fade: true,
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

            })

        </script>
    </body>
</html>
