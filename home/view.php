<!-- Delete Later -->
<!DOCTYPE html>
<html lang="en">

<head>
    <title>BCA History Conference</title>
    <link rel=icon href=../static/img/favicon.png>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous">
    </script>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <link rel="stylesheet" href="../static/css/styles.css">
</head>

<body>
<!-- Delete Later -->

    <nav role="navigation">
        <div class="nav-wrapper container">
            <a href="#" class="brand-logo">
                <img id="logo-img" src="../static/img/bcahistlogow.png">
            </a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#" id="nav-link0" style="color: white;">Home</a></li>
                <li><a href="#theme" id="nav-link1" style="color: white;">About</a></li>
                <li><a href="#workshops" id="nav-link2" style="color: white;">Topics</a></li>
                <li><a href="#workshops" id="nav-link3" style="color: white;">Speakers</a></li>
                <li><a href="#theme" id="nav-link4" style="color: white;">Schedule</a></li>
                <li><a href="#theme" id="nav-link5" style="color: white;">Contact Us</a></li>
            </ul>

            <ul id="nav-mobile" class="sidenav">
                <li><a href="#">Navbar Link</a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>


    <script>
        $(document).ready(function(){
            $('.sidenav').sidenav();
        });
    </script>

    <section>
        <div class="section no-pad-bot" style="padding-top: 8%">
            <div class="container">
                <br><br>
                <h1 class="header center teal-text text-lighten-2">2019 BCA History Conference</h1>
                <div class="row center">
                    <h5 class="header col s12 light white-text">April 12, 2019 (1:30-6 PM) at the Bergen County Academies</h5>
                </div>
                <div class="row center">
                    <a href="../controller" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Register Now!</a>
                </div>
                <br><br>

            </div>
        </div>
    </section>

    <!-- script -->


    <script>

        $(document).ready(function(){

            $(window).scroll(function(){

                if($(window).scrollTop()>100){
                    $('nav').addClass('white');
                    $('#logo-img').prop("src", "../static/img/bcahistlogo.png");
                    $('#nav-link0').css("color", "#444");
                    $('#nav-link1').css("color", "#444");
                    $('#nav-link2').css("color", "#444");
                    $('#nav-link3').css("color", "#444");
                    $('#nav-link4').css("color", "#444");
                    $('#nav-link5').css("color", "#444");

                } else{
                    $('nav').removeClass('white');
                    $('#logo-img').prop("src", "../static/img/bcahistlogow.png");
                    $('#nav-link0').css("color", "white");
                    $('#nav-link1').css("color", "white");
                    $('#nav-link2').css("color", "white");
                    $('#nav-link3').css("color", "white");
                    $('#nav-link4').css("color", "white");
                    $('#nav-link5').css("color", "white");

                }

            });

        });

    </script>


    <div class="container blue-grey lighten-5 home-container" id="theme">
        <div class="section">

            <div class="row">
                <div class="col s12 center" style="font-family: Playfair Display !important; ">
                    <h3><i class="mdi-content-send brown-text"></i></h3>
                    <h4>The theme for this year's conference is:</h4>
                    <h2 class="center-align light" style="font-weight: bold;">World War II<h2/>
                </div>
            </div>

        </div>
    </div>


    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                </div>
            </div>
        </div>
        <div class="parallax"><img src="../static/img/naval.jpg" alt="Unsplashed background img 2"></div>
    </div>

    <div class="container blue-grey lighten-5 home-container" id="workshops">
        <div class="section ">

            <div class="row">
                <div class="col s12 center">
                    <h3><i class="mdi-content-send brown-text"></i></h3>
                    <h4 style="color: rgb(36, 103, 141) !important; font-weight: bold; font-family: Playfair Display !important;">Workshop Topics</h4>
                    <div style="color: rgb(36, 103, 141); font-weight: 400; font-size: 150%; font-family: Playfair Display !important;">
                        <p class="center-align">1941: The Pivotal Year of WWII and the Shaping of the 20th Century</p>
                        <p class="center-align">Five Things You'd Want to Know in Explaining Japan's Decision to Surrender in 1945</p>
                        <p class="center-align">How World War II Became a Nuclear War</p>
                        <p class="center-align">Victory Through Air Power? Strategic Bombing in WWII</p>
                        <p class="center-align">D-Days of the Pacific: Amphibious Assaults in the War Against Japan</p>
                        <p class="center-align">The Eugenics Movement</p>
                        <p class="center-align">​The Red Army</p>
                        <p class="center-align">Refugee & Migration Policy after the Holocaust</p>
                        <p class="center-align">Franklin D. Roosevelt</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                </div>
            </div>
        </div>
        <div class="parallax"><img src="../static/img/ground.jpg" alt="Unsplashed background img 3"></div>
    </div>

<style>
    nav{
        z-index: 1000;
        position: fixed;
        background: rgba(0, 0, 0, 0);
        padding:0px 20px;
        font-family: 'Montserrat', sans-serif;
    }

    section {
        background-image: url(../static/img/homebackground.jpg);
        background-size: cover;
        width: 100%;
        height: 600px;
        margin: auto;
    }

</style>

<script>
    (function($){
        $(function(){

            $('.sidenav').sidenav();
            $('.parallax').parallax();

        }); // end of document ready
    })(jQuery); // end of jQuery name space

</script>

<?php include '../view/footer.php'; ?>