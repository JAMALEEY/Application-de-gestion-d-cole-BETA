<?php require APPROOT . '/views/inc/header.php'; ?>

<!-- start navbar -->
<nav class="navbar navbar-expand-lg navbar-mainbg">
    <a class="navbar-brand navbar-logo" href="#"><i class="fas fa-school"></i> GeeSchool</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars text-white"></i>
    </button>
    <!-- bootstrap navbar -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- MARGIN LEFT FOR MENU TO THE RIGHT -->
        <ul class="navbar-nav ml-auto">
            <div class="hori-selector">
                <!-- <div class="left"></div>
                <div class="right"></div> -->
            </div>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT; ?>/pages/dashboard"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT; ?>/pages/home"><i class="fas fa-home"></i>Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT; ?>/pages/about"><i class="fa fa-clone"></i>About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT; ?>/pages/stats"><i class="fas fa-chart-bar"></i>Stats</a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="<?php echo URLROOT; ?>/admins/login"><i class="fas fa-user"></i>Sign-in</a>
            </li>

        </ul>
    </div>
</nav>

<!-- end navbar -->

<!doctype HTML>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue-deep_purple.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link href="fonts/fontello/css/fontello.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/bootstrap-offset-right.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Material Design Login Template</title>
    <style>
        .mdl-textfield__label {
            margin-bottom: 0;
            color: #d7dbdc;
            font-weight: normal;
        }

        .mdl-textfield--floating-label.is-focused .mdl-textfield__label,
        .mdl-textfield--floating-label.is-dirty .mdl-textfield__label {
            text-transform: uppercase
        }

        .has-feedback label~.form-control-feedback {
            top: 15px;
        }

        .mdl-textfield {
            width: 100%;
        }

        .mdl-checkbox__label {
            cursor: text;
            font-size: 13px;
            float: left;
            color: #b0b3b4;
            font-weight: normal;
        }

        .mdl-checkbox__box-outline {
            border: 1px solid #b0b3b4;
        }

        .mdl-textfield__input {
            border: none;
            border-bottom: 1px solid rgba(0, 0, 0, .12);
            display: block;
            font-size: 16px;
            margin: 0;
            padding: 4px 0;
            width: 100%;
            background: 0 0;
            text-align: left;
            color: inherit;
            font-weight: bold;
        }

        .mdl-switch__label {
            float: left;
            font-weight: normal;
            color: #b0b3b4;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="center-block">
            <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-12 col-xs-12 no-padding" style="z-index:1">
                <!-- Slider -->

                <div class="mlt-carousel">
                    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img class="img-responsive center-block" src="img/step1.png" alt="step1">
                                <div class="item-content">
                                    <h3>Lorem ipsum dolor sit amet</h3>
                                    <p>Consectetur adipiscing elit</p>
                                    <p>Phasellus orci dolor</p>
                                    <p>dapibus suscipit quam</p>
                                </div>
                            </div>
                            <div class="item">
                                <img class="img-responsive center-block" src="img/step2.png" alt="step2">
                                <div class="item-content">
                                    <h3>Pellentesque tincidunt</h3>
                                    <p>Laoreet placerat justo congue vulputate</p>
                                    <p>Diam felis dapibus nulla</p>
                                    <p>Phasellus molestie</p>
                                </div>
                            </div>
                            <div class="item">
                                <img class="img-responsive center-block" src="img/step3.png" alt="step3">
                                <div class="item-content">
                                    <h3> Proin sed leo sodales</h3>
                                    <p>ultricies posuere leo</p>
                                    <p>Phasellus orci dolor</p>
                                    <p>dapibus suscipit quam</p>
                                </div>
                            </div>
                        </div>
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                    </div>
                    <!--mlt-carousel-->
                </div>
                <!-- Slider -->
            </div>
            <!-- Login -->

            <div class="col-lg-6 col-lg-offset-right-1 col-md-6 col-md-offset-right-1 col-sm-12 col-xs-12 no-padding">
                <div class="mlt-content">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#register" data-toggle="tab">Register</a></li>
                        <li><a href="#login" data-toggle="tab">Login</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane fade in active" id="register">
                            <!--register form-->

                            <form form data-feedback='{"success": "fa-check", "error": "fa-times"}'>
                                <div class="col-lg-10 col-lg-offset-1 col-lg-offset-right-1 col-md-10 col-md-offset-1 col-md-offset-right-1 col-sm-12 col-xs-12 pull-right ">

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-group has-feedback">
                                        <input type="text" name="fname" id="fname" class="mdl-textfield__input" />
                                        <label class="mdl-textfield__label " for="fullName ">Full Name</label>
                                        <span class="form-control-feedback" aria-hidden="true" id="fname1"></span>
                                    </div>
                                    <!--
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input " type="text" id="fullName ">
                                        <label class="mdl-textfield__label " for="fullName ">Full Name</label>
                                    </div>-->
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ">
                                        <input class="mdl-textfield__input " type="text " id="emailAddress ">
                                        <label class="mdl-textfield__label " for="emailAddress ">Email Address</label>
                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ">
                                        <input class="mdl-textfield__input " type="text " pattern="-?[0-9]*(\.[0-9]+)? " id="mobileNumber ">
                                        <label class="mdl-textfield__label " for="mobileNumber ">Mobile Number</label>
                                        <span class="mdl-textfield__error ">Input is not a number!</span>
                                    </div>

                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ">
                                        <input class="mdl-textfield__input " type="password " id="SetPassword ">
                                        <label class="mdl-textfield__label " for="SetPassword ">Set Password</label>
                                    </div>

                                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect termsLabel" for="ageFlag">
                                        <input type="checkbox" id="ageFlag" class="mdl-checkbox__input " checked>
                                        <span class="mdl-checkbox__label ">I herby certify that I am atleast 18 years of age</span>
                                    </label>

                                    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="termsFlag">
                                        <input type="checkbox" id="termsFlag" class="mdl-checkbox__input ">
                                        <span class="mdl-checkbox__label ">I have read and accept the <a href="# ">Terms of Use</a> and <a href="# ">Privacy Policy</a></span>
                                    </label>

                                    <button class="btn lt-register-btn " formaction="# ">register now <i class="icon-right pull-right "></i></button>
                                </div>
                            </form>
                            <!--register form-->
                        </div>
                        <div class="tab-pane fade" id="login">
                            <!--login form-->
                            <form>

                                <div class="col-lg-10 col-lg-offset-1 col-lg-offset-right-1 col-md-10 col-md-offset-1 col-md-offset-right-1 col-sm-12 col-xs-12 pull-right ">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" id="emailAddress">
                                        <label class="mdl-textfield__label" for="emailAddress">Email Address</label>
                                    </div>
                                </div>

                                <div class="col-lg-10 col-lg-offset-1 col-lg-offset-right-1 col-md-10 col-md-offset-1 col-md-offset-right-1 col-sm-12 col-xs-12 pull-right ">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="password" id="password">
                                        <label class="mdl-textfield__label" for="password">Password</label>
                                    </div>
                                </div>

                                <div class="col-lg-10 col-lg-offset-1 col-lg-offset-right-1 col-md-10 col-md-offset-1 col-md-offset-right-1 col-sm-12 col-xs-12 pull-right ">
                                    <div class="row">
                                        <br>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="rememberPass">
                                                <input type="checkbox" id="rememberPass" class="mdl-switch__input">
                                                <span class="mdl-switch__label">Remember</span>
                                            </label>

                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style=" text-align:right;">
                                            <a href="#">Reset Password</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-10 col-lg-offset-1 col-lg-offset-right-1 col-md-10 col-md-offset-1 col-md-offset-right-1 col-sm-12 col-xs-12 pull-right ">
                                    <button class="btn lt-register-btn">login <i class="icon-right "></i></button>
                                </div>
                            </form>
                            <!--login form-->
                        </div>
                    </div>
                </div>
                <!--Login-->
            </div>
            <!--center-block-->
        </div>
        <!--container-->
    </div>







    <script src="node_modules/jquery/dist/jquery.min.js "></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js "></script>
    <script src="libs/mdl/material.min.js "></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js "></script>

    <script>
        //Google analytics.
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-79865537-1', 'auto');
        ga('send', 'pageview');
    </script>

    <script>
        //Form validation.
        $('form').validate({
            rules: {
                fname: {
                    minlength: 3,
                    maxlength: 15,
                }
            },
            errorPlacement: function(error, element) {},
            highlight: function(element) {
                var id_attr = "#" + $(element).attr("id") + "1";
                $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
                $(id_attr).removeClass('icon-ok-circled2').addClass('icon-cancel-circled2');
            },
            unhighlight: function(element) {
                var id_attr = "#" + $(element).attr("id") + "1";
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
                $(id_attr).removeClass('icon-cancel-circled2').addClass('icon-ok-circled2');
            },
        });
    </script>

</body>

</html>


<?php require APPROOT . '/views/inc/footer.php'; ?>