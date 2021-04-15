<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-186039528-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-186039528-1');
    </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sleek Upsell — Upselling Reimagined</title>

    <meta property="og:title" content="Sleek Upsell - Upselling Reimagined " />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="logo.png" />

    <link rel="icon" href="<?php echo base_url(); ?>fr/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Product+Sans:300,400,700" rel="stylesheet">


    <link rel="stylesheet" href="fe/css/global/bootstrap.min.css">

    <link rel="stylesheet" href="fe/css/global/plugins/icon-font.css">

    <link rel="stylesheet" href="fe/css/style.css">

    <style>
        /* Customize website's scrollbar like Mac OS Not supports in Firefox and IE */

        /* total width */
        *::-webkit-scrollbar {
            background-color: #fff;
            width: 16px
        }

        /* background of the scrollbar except button or resizer */
        *::-webkit-scrollbar-track {
            background-color: #fff
        }

        *::-webkit-scrollbar-track:hover {
            background-color: #f4f4f4
        }

        /* scrollbar itself */
        *::-webkit-scrollbar-thumb {
            background-color: #4259ff;
            border-radius: 16px;
            border: 5px solid #fff
        }

        *::-webkit-scrollbar-thumb:hover {
            background-color: #7642ff;
            border: 4px solid #f4f4f4
        }

        /* set button(top and bottom of the scrollbar) */
        *::-webkit-scrollbar-button {
            display: none
        }
    </style>
    <style>
        /* by Jamal Hassouni*/
        @import url('https://fonts.googleapis.com/css?family=Roboto:300');

        body {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif !important;
        }

        section {
            width: 100%;
            height: 100vh;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            padding: 40px 0;
        }

        .card {
            position: relative;
            max-width: 300px;
            height: auto;
            background: linear-gradient(-45deg, #fe0847, #feae3f);
            border-radius: 15px;
            margin: 0 auto;
            padding: 40px 20px;
            -webkit-box-shadow: 0 10px 15px rgba(0, 0, 0, .1);
            box-shadow: 0 10px 15px rgba(0, 0, 0, .1);
            -webkit-transition: .5s;
            transition: .5s;
            margin-bottom: 20px;
        }

        .card:hover {
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
        }

        .col-sm-4:nth-child(1) .card,
        .col-sm-4:nth-child(1) .card .title .fa {
            background: linear-gradient(-45deg, #f403d1, #64b5f6);

        }

        .col-sm-4:nth-child(2) .card,
        .col-sm-4:nth-child(2) .card .title .fa {
            background: linear-gradient(-45deg, #ffec61, #f321d7);

        }

        .col-sm-4:nth-child(3) .card,
        .col-sm-4:nth-child(3) .card .title .fa {
            background: linear-gradient(-45deg, #24ff72, #9a4eff);

        }

        .card::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 40%;
            background: rgba(255, 255, 255, .1);
            z-index: 1;
            -webkit-transform: skewY(-5deg) scale(1.5);
            transform: skewY(-5deg) scale(1.5);
        }

        .title .fa {
            color: #fff;
            font-size: 60px;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            text-align: center;
            line-height: 100px;
            -webkit-box-shadow: 0 10px 10px rgba(0, 0, 0, .1);
            box-shadow: 0 10px 10px rgba(0, 0, 0, .1);

        }

        .title h2 {
            position: relative;
            margin: 20px 0 0;
            padding: 0;
            color: #fff;
            font-size: 28px;
            z-index: 2;
        }

        .price,
        .option {
            position: relative;
            z-index: 2;
        }

        .price h4 {
            margin: 0;
            padding: 20px 0;
            color: #fff;
            font-size: 60px;
        }

        .option ul {
            margin: 0;
            padding: 0;

        }

        .option ul li {
            margin: 0 0 10px;
            padding: 0;
            list-style: none;
            color: #fff;
            font-size: 16px;
        }

        .card a {
            position: relative;
            z-index: 2;
            background: #fff;
            color: black;
            width: 150px;
            height: 40px;
            line-height: 40px;
            border-radius: 40px;
            display: block;
            text-align: center;
            margin: 20px auto 0;
            font-size: 16px;
            cursor: pointer;
            -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
            box-shadow: 0 5px 10px rgba(0, 0, 0, .1);

        }

        .card a:hover {
            text-decoration: none;
        }
    </style>

</head>

<body class="overflow-hidden">
    <header id="home">

        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="z-index: 3000; position: fixed; width: 100vw;">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <h3 class="gradient-mask">Sleek Upsell</h3>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#site-nav" aria-controls="site-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="site-nav">
                    <ul class="navbar-nav text-sm-left ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#features">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pricing">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="mailto:support@sleekupsell.com">Help</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://sleekupsell.com/news">News</a>
                        </li>
                        <li class="nav-item text-center">
                            <a href="#signup" class="btn align-middle btn-primary my-2 my-lg-0">GET STARTED</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <section class="jumbotron-two">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-5">
                        <h1 class="display-5">Upselling Reimagined</h1>
                        <p class="text-muted mb-3">Boost your sales today by giving your customers more customized and eye-catching offers. Get that extra cent from your customers and count bigger profits.</p>
                        <p>
                            <a href="#signup" class="btn btn-xl btn-primary">Get started free</a>
                        </p>
                    </div>
                    <div class="col-12 col-md-7 my-3 my-md-lg">
                        <div class="youtube cast-shadow" data-video-id="N8Xj0yjhhc8" data-params="modestbranding=1&amp;showinfo=0&amp;controls=1&amp;vq=hd720">
                            <img src="fe/images/screen2.jpg" alt="image" class="img-fluid">
                            <div style="display: none;" class="play"><span class="pe-7s-play pe-3x"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="bg-shape"></div>
        <div class="bg-circle"></div>
        <div class="bg-circle-two"></div>
    </header>

    <div class="section bg-light pt-lg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="media mb-5">
                        <div class="media-icon d-flex mr-3"> <i class="pe-7s-paint-bucket pe-3x"></i> </div>

                        <div class="media-body">
                            <h5 class="mt-0">Easy Customization</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="media mb-5">
                        <div class="media-icon d-flex mr-3"> <i class="pe-7s-rocket pe-3x"></i> </div>

                        <div class="media-body">
                            <h5 class="mt-0">Super Fast</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="media mb-5">
                        <div class="media-icon d-flex mr-3"> <i class="pe-7s-piggy pe-3x"></i> </div>

                        <div class="media-body">
                            <h5 class="mt-0">Save Money</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="media mb-5">
                        <div class="media-icon d-flex mr-3"> <i class="pe-7s-cloud-upload pe-3x"></i> </div>

                        <div class="media-body">
                            <h5 class="mt-0">Cloud Upload</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="media mb-5">
                        <div class="media-icon d-flex mr-3"> <i class="pe-7s-science pe-3x"></i> </div>

                        <div class="media-body">
                            <h5 class="mt-0">Proven Technology</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="media mb-5">
                        <div class="media-icon d-flex mr-3"> <i class="pe-7s-like2 pe-3x"></i> </div>

                        <div class="media-body">
                            <h5 class="mt-0">100% Satisfaction</h5>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="section" id="features">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-8">
                    <div class="browser-window limit-height my-5 mr-0 mr-sm-5">
                        <div class="top-bar">
                            <div class="circles">
                                <div class="circle circle-red"></div>
                                <div class="circle circle-yellow"></div>
                                <div class="circle circle-blue"></div>
                            </div>
                        </div>
                        <div class="content" style="max-height: 220px;">
                            <img src="fe/images/dashboard.png" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="media">
                        <div class="media-body">
                            <div class="media-icon mb-3"> <i class="pe-7s-like2 pe-3x"></i> </div>
                            <h3 class="mt-0">Perfect Dashboard</h3>
                            <p> Manage your upsells and cross-sells with ease. Simple UI that covers all important aspects of your offers on the dashboard. Get the general insights on the fly.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mt-5">
                <div class="col-sm-4">
                    <div class="media">
                        <div class="media-body">
                            <div class="media-icon mb-3"> <i class="pe-7s-graph1 pe-3x"></i> </div>
                            <h3 class="mt-0">Charts, Diagrams & more</h3>
                            <p>Stats mean everything. Get to know your customer impressions on each offer. See how many times the offer was shown, accepted and added to cart. Compare your ATC and actual Checkouts.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <img src="fe/images/screen.jpg" alt="image" class="img-fluid cast-shadow my-5">
                </div>
            </div>
        </div>
    </div>

    <div class="section" style="display: none;">
        <div class="container">
            <div class="section-title text-center">
                <h3>What our users say</h3>
                <p>They love it. Read what our customers had to say!</p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="embed-tweet-item">
                        <blockquote class="twitter-tweet" data-cards="hidden" lang="en" data-width="550" data-link-color="#7642FF" data-align="center">
                            <a href="https://twitter.com/kmin/status/943914224329347072"></a>
                        </blockquote>
                    </div>

                </div>

                <div class="col-md-4">
                    <div class="embed-tweet-item">
                        <blockquote class="twitter-tweet" data-cards="hidden" lang="en" data-width="550" data-link-color="#7642FF" data-align="center">
                            <a href="https://twitter.com/halarewich/status/954224121784688640"></a>
                        </blockquote>
                    </div>

                </div>

                <div class="col-md-4">
                    <div class="embed-tweet-item">
                        <blockquote class="twitter-tweet" data-cards="hidden" lang="en" data-width="550" data-link-color="#7642FF" data-align="center">
                            <a href="https://twitter.com/scottbelsky/status/921417663859052544"></a>
                        </blockquote>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <section id="pricing">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card text-center">
                            <div class="title">
                                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                <h2>Free</h2>
                            </div>
                            <div class="price">
                                <h4><sup>$</sup>0</h4>
                            </div>
                            <div class="option">
                                <ul>
                                    <li> <i class="fa fa-check" aria-hidden="true"></i> 1 Offer Active </li>
                                    <li> <i class="fa fa-check" aria-hidden="true"></i> Limited Offer Conditions </li>
                                    <li> <i class="fa fa-times" aria-hidden="true"></i> x</li>
                                    <li> <i class="fa fa-times" aria-hidden="true"></i> x</li>
                                </ul>
                            </div>
                            <a href="/get_app">GET FREE </a>
                        </div>
                    </div>
                    <!-- END Col one -->
                    <div class="col-sm-4">
                        <div class="card text-center">
                            <div class="title">
                                <i class="fa fa-plane" aria-hidden="true"></i>
                                <h2>Sleek</h2>
                            </div>
                            <div class="price">
                                <h4><sup>$</sup>19.99</h4>
                            </div>
                            <div class="option">
                                <ul>
                                    <li> <i class="fa fa-check" aria-hidden="true"></i> 20 active offers </li>
                                    <li> <i class="fa fa-check" aria-hidden="true"></i> Manual/Custom offers </li>
                                    <li> <i class="fa fa-check" aria-hidden="true"></i> Extended offer conditioning </li>
                                    <li> <i class="fa fa-check" aria-hidden="true"></i> Reports </li>
                                </ul>
                            </div>
                            <a href="/get_app">7 DAYS FREE </a>
                        </div>
                    </div>
                    <!-- END Col two -->
                    <div class="col-sm-4">
                        <div class="card text-center">
                            <div class="title">
                                <i class="fa fa-rocket" aria-hidden="true"></i>
                                <h2>Premium</h2>
                            </div>
                            <div class="price">
                                <h4><sup>$</sup>59.99</h4>
                            </div>
                            <div class="option">
                                <ul>
                                    <li> <i class="fa fa-check" aria-hidden="true"></i> 500 offers </li>
                                    <li> <i class="fa fa-check" aria-hidden="true"></i> Automated offers included </li>
                                    <li> <i class="fa fa-check" aria-hidden="true"></i> Advanced Geo-Targetting </li>
                                    <li> <i class="fa fa-check" aria-hidden="true"></i> Live Support </li>
                                </ul>
                            </div>
                            <a href="/get_app">7 DAYS FREE </a>
                        </div>
                    </div>
                    <!-- END Col three -->
                </div>
            </div>
        </div>
    </section>

    <div class="section bg-light py-lg" style="display: none;">
        <div class="container">
            <div class="section-title text-center mt-0 mb-5">
                <h3>Choose your plan</h3>
                <p>Simple pricing. no hidden charges. Choose a plan fit your needs</p>
            </div>
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <div class="card pricing">
                        <div class="card-body">
                            <small class="text-muted">SLEEK</small>
                            <h5 class="card-title">$19.99</h5>
                            <p class="card-text">
                            <ul class="list-unstyled">
                                <li>Unlimited Upsells and Cross-sells</li>
                                <li>Advanced Geo-targetting</li>
                                <li>Analytics &amp; Reports</li>
                                <li>Visual &amp; Logical customizations</li>
                            </ul>
                            </p>
                            <a href="/get_app" class="btn btn-xl btn-primary">Choose this plan</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4"></div>
            </div>
        </div>
    </div>


    <div class="section" id="signup">
        <div class="container">
            <div class="section-title text-center">
                <h3>Start your free trial</h3>
                <p>Signup now. Its free and takes less than 3 minutes</p>
            </div>
            <div class="row justify-content-md-center">
                <div class="col col-md-5">
                    <form action="/install">
                        <input type="hidden" name="authenticity_token" value="<?php echo sha1(md5('nehN7kwK9YR++yH5VIG2I0C2wMNMYReLqtJAuhRimoqM3wmzPwV24KDKaOy1aGnKPBYeWoiDOuldhtvdcA73Ww==')); ?>">
                        <div class="form-group">
                            <input style="text-align: center;" id="shop" name="shop" type="text" placeholder="example.myshopify.com" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-xl btn-block btn-primary">START 7 DAYS FREE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="section bg-light mt-4" id="footer" style="margin-top: 0px !important;">
        <div class="container">
            <div class=" text-center mt-4"> <small class="text-muted">Copyright ©
                    <script type="text/javascript">
                        document.write(new Date().getFullYear());
                    </script>
                    All rights reserved. Sleek Upsell
                </small></div>
        </div>

    </div>


    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/605a987cf7ce182709333d6e/1f1gu7ac3';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->



    <script src="fe/js/global/jquery-3.2.1.min.js"></script>

    <script src="fe/js/global/bootstrap.bundle.min.js"></script>

    <script src="fe/js/script.js"></script>

</body>

</html>