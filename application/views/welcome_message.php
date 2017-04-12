<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Welcome to CodeIgniter</title>

    <link rel="stylesheet" type="text/css" href="./assets/css/frontend/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/frontend/reset.css">
    <style type="text/css">
    .banner {
    height: calc(100vh - 100px);
}


.background video {
    position: fixed;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -100;
    -ms-transform: translateX(-50%) translateY(-50%);
    -moz-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
    background-size: cover;
    filter: blur(0px) saturate(1) hue-rotate(0deg) brightness(1.33) contrast(1) invert(0) sepia(0);
}

@import url(http://fonts.googleapis.com/css?family=Arvo:700);
@import url(http://fonts.googleapis.com/css?family=Seaweed+Script);
body {
  background-color: #222;
}
.plate {
  margin: 10% auto;
}
.shadow {
  color: #f72f2f;
  font-family: Arvo;
  font-weight: bold;
  text-shadow:
    -3px -3px 0 #eee,
    3px -3px 0 #eee,
    -3px 3px 0 #eee,
    3px 3px 0 #eee,
    4px 4px 0 #f72f2f,
    5px 5px 0 #f72f2f,
    6px 6px 0 #f72f2f,
    7px 7px 0 #fff;
  line-height: 1em;
  letter-spacing: 0.1em;
  font-size: 6em;
  margin:0;
  margin-top: 1vh;
  text-align: center;
}
.script {
  font-family: "Seaweed Script";
  color: #f72f2f;
  text-align: center;
  font-size: 80px;
  position: relative;
  margin:0;
}
.script span {
  background-color: #eee;
  border-radius: 1em;
  padding: 0 0.3em;
}
p:first-child.script:before {
  content:"";
  display: block;
  position: absolute;
  z-index:-1;
  top: 50%;
  width: 100%;
  border-bottom: 3px solid #fff;
}

.landingTitle1 {
    font-family: "Comic Sans MS";
    font-size: 8vh;
    font-weight: bold;            
    line-height: 8vh;
    color: #df272c;
    text-shadow: 1px 5px 15px rgba(0,0,5,0.9);
    margin-top: 10vh;
    margin-bottom: 5vh;
}

.landingTitle2 {
    font-family: "Comic Sans MS";
    font-size: 10vh;
    font-weight: bold;
    line-height: 10vh;
    color: #df272c;
    text-shadow: 1px 5px 15px rgba(0,0,5,0.9);
    margin-bottom: 5vh;
}

.underline {            
    text-decoration: underline;
}

.applink{
    position: absolute;
    bottom: 20px;
    right: 20px;
}

button.link{
    width: 17.2vw;
    height: 5.2vw;
    max-width: 172px;
    max-height: 52px;
    border: none;
    border-radius: 10px;
    overflow: none;
    background-repeat: no-repeat;
    background-size: 100%;
}

.googlePlay {
    background-image: url("./assets/img/toGooglePlay.png");
}

.appStore {
    margin-top: 1vh;
    background-image: url("./assets/img/toAppStore.png");
}

.vcenter {
    position: relative;
    top: 50%;
    transform: translateY(-60%);
}

.advertise {
    background-color: #faa020;
    padding-top: 10px;
    padding-bottom: 10px;
    width: 100%;
}

.advertise p{
    margin: 0;
}

.main {
    margin-left: 0px;
    margin-right: 0px;
    background-color: white;
    font-size: 18px;
}

.main .row{
    padding: 50px 0 20px 0;
}

.row .col-sm-4 img {
    width: 250px;
    height: 250px;
    object-fit: contain;
}

.socialicon{
    width: 45px;
    height: 45px;
    display: inline-block;
    margin: 10px;
    background: url("./assets/img/social-link.png");
}

.facebook-1 {
    background-position: 0px 0px;
}

.facebook-1:hover {
    background-position: 0px -90px;
    transition: 0.3s fade-in;
}

.twitter-1 {
    background-position: -45px 0px;
}

.twitter-1:hover {
    background-position: -45px -90px;
    transition: 0.3s fade-in;
}

.instagram {
    background-position: -90px 0px;
}

.instagram:hover {
    background-position: -90px -90px;
    transition: 0.3s fade-in;
}

.googleplus {
    background-position: 0px -45px;
}

.googleplus:hover {
    background-position: 0px -135px;
    transition: 0.3s fade-in;
}

.youtube {
    background-position: -45px -45px;
}

.youtube:hover {
    background-position: -450px -135px;
    transition: 0.3s fade-in;
}

.linkedin-1 {
    background-position: -90px -45px;
}

.linkedin-1:hover {
    background-position: -90px -135px;
    transition: 0.3s fade-in;
}

.subtitle {
    color: #f79724; line-height: 50px
}

footer {
    width: 100%;
    padding: 0;
    margin-left: 0!important;
    margin-right: 0!important;
    background-color: white;
}

footer>div:first-child{
    background-color: #feecd3;
}</style>
    <script type="text/javascript" async="" src="https://widget.intercom.io/widget/piubev82"></script>
    <script async="" src="https://www.google-analytics.com/analytics.js"></script>    
    <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
    <script type="text/javascript" src="./assets/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="./assets/js/bootstrap.js"></script>    
</head>
<body>

    <section class="banner clear">
        <header>
            <div class="container">
              <div class="row">
                <div class="col-xs-12 col-sm-3">
                  <a class="logo" href="https://efynch.com/">
                    <img src="./assets/img/logo.png">
                  </a>
                  <a class="burger-menu"><i></i></a>
                </div>
                <div class="col-xs-12 col-sm-9 mobmenu p0-xs">
                  <ul class="menu">
                    <li><a class="menulist" href="https://efynch.com/">How we work</a></li>
                    <li><a class="" href="">Sign Up</a></li>
                    <li><a class="menu_login" href="">Login</a></li>                                 
                  </ul>
              </div>
              <div>
            </div>
          </div></div></header>
        <div class="background">
            <video preload="preload" id="videoBackground" autoplay="autoplay" loop="loop">
                <source src="./assets/video/vBackground-2.mp4" type="video/mp4">
            </video>
        </div> 
        <div class="container-fluid clear">
          <div class="container align-middle" style="text-align: center;">
            <div class="plate">
              <p class="script"><span>Because</span></p>
              <p class="shadow">Pay Per Lead</p>
              <p class="shadow">SUCKS!</p>
              <p class="script"><a class="bannerbutton" href="#contractor">Start Here</a></p>
            </div>
          </div>
          <div class="container-fluid applink clear">
            <button class="link googlePlay float-right"><a href="https://play.google.com/store"></a></button><br>
            <button class="link appStore float-right"><a href="https://itunes.apple.com/"></a></button>
          </div>
        </div>
    </section>
    <section class="advertise clear">
        <p class="text-center font35 col-fff">No Upfront Fees<br>A Community for Getting Work!</p>
    </section>
    <section class="main clear section-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 ">
                    <h3>
                        Are you looking for Projects, Side or Filler work?<br>
                        EFynch is the Pay-Per-Lead Alternative.<br>
                        We have a simple job board that lists project information and allows you to evaluate and bid.<br><br><span class='col-xs-12 text-center'>AT NO COST</span><br><br>
                        <a>You only pay if you win the project.</a> <br>There is no up front risk- we share the benefits. Our rates can be as low as 2%<br>
                    </h3>
                </div>
                <div class="col-sm-5 col-sm-offset-1"><img class="col-xs-12" src="./assets/img/land-pic-1.png"></div>
            </div>          
            <div class="row"><img src="https://efynch.com/img/logo.png" style="margin-left: calc(50% - 87px);"></div>
            <div class="row">
                <div class="col-sm-5"><img class="col-xs-12" src="./assets/img/land-pic-2.png"></div>
                <div class="col-sm-6 col-sm-offset-1">
                    <h2 class="underline">
                        Top Features:
                    </h2>
                    <h3>
                        - Custom Personal Profiles.<br>
                        - Payment Processing.<br>
                        - Built In, Transparent Fee Calculators.<br>
                        - Easy Chat and Customer Scheduling.<br>
                        - Multiple categories and skill levels are welcome.
                    </h3>
                </div>              
            </div>  
            <div class="row"><h2 class="col-sm-12 text-center underline">How EFynch Works:</h2></div>   
            <div class="row">
                <div class="col-sm-4 text-center">
                    <img class="row" src="./assets/img/land-pic-3.png"><br>
                    <p class="col-sm-12 text-center underline">
                        Browse:
                    </p>
                    <p>
                        Use our website 
                        or your smartphone to view projects. Sort by location or job type.
                    </p>
                </div>
                <div class="col-sm-4 text-center">
                    <img class="row" src="./assets/img/land-pic-4.png">
                    <p class="col-sm-12 text-center underline">
                        Bid:
                    </p>
                    <p>
                        Provide an estimate, bid, or ask questions. Your information and profile are sent to the Owner to express interest.
                    </p>
                </div>
                <div class="col-sm-4 text-center">
                    <img class="row" src="./assets/img/land-pic-5.png">
                    <p class="col-sm-12 text-center underline">
                        Hire:
                    </p>
                    <p>
                        Once hired, we collect and hold your payment in Escrow. No waiting for payments or worrying about collections. 1 pushes of a button and funds are deposited directly to your account.
                    </p>
                </div>
            </div>
            <div class="row">
                <h2 class="underline col-sm-12 text-center">
                Whether you are a Licensed Pro or just looking for side-work,
                EFynch connects you with the homeowner that is seeking expertise and work.
                . . . And we don’t “sell leads”- that is for Chumps!
                </h2>
            </div>
            <div class="row">
                <p class="underline col-sm-12 text-center font50">
                    What is being said:
                </p>
            </div>
            <div class="row text-center testimonials">
                <div class="col-sm-4 text-center">
                    <img class="row" src="./assets/img/land-pic-6.png">
                    <p class="col-sm-12 text-center">
                        “Essentially, without having to pay for advertising or other middle-man services for finding jobs, contractors can afford to lower their prices.”- 10/12/16
                    </p>
                </div>
                <div class="col-sm-4 text-center">
                    <img class="row" src="./assets/img/land-pic-7.png">
                    <p>
                        “So glad to find your services. Fantastic! Million Thanks” 3/8/17
                    </p>
                    <p>
                        Resident, Roger’s Forge<br>
                        (Baltimore)
                    </p>
                </div>
                <div class="col-sm-4 text-center">
                    <img class="row" src="./assets/img/land-pic-8.png">
                    <p>
                        “It’s designed to contain everything needed for a competitive bidding process for homeowners’ jobs.” -1/12/17
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 text-center">
                    <img class="row" src="./assets/img/land-pic-9.png">
                    <p class="col-sm-12">
                        “On my last Project- EFynch helped me find the right guy who was already working close by. We both thought it was a great deal.” 3/8/17
                    </p>
                    <p class="col-sm-12 text-center">
                        Resident, Columbia
                    </p>
                </div>
                <div class="col-sm-4 text-center">
                    <img class="row" src="./assets/img/land-pic-10.png">
                    <p>
                        “I will definitely recommend EFynch. So easy, thanks!”
                    </p>
                    <p>
                        Resident,Columbia<br>
                        (Maryland)
                    </p>
                </div>
                <div class="col-sm-4 text-center">
                    <img class="row" src="./assets/img/land-pic-11.png">
                    <p>
                        “There is no greater service, I can’t say anything better!” 3/8/17
                    </p>
                    <p>
                        Handyman,Baltimore<br>
                        (Maryland)
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 text-center">
                    <h3 class="col-sm-12 underline text-center font30 subtitle">Also available on your phone:</h3>                    
                    <div class="row">
                        <div class="col-xs-12 col-sm-5 text-center"><img src="./assets/img/symbolic-icon.png" style="border-radius: 10px; border: 1px solid #999; padding: 10px; max-height: 11.4vw;"></div>
                        <div class="col-xs-12 col-sm-7 text-center">
                            <button class="link googlePlay float-right"><a href="https://play.google.com/store"></a></button>
                            <button class="link appStore float-right"><a href="https://itunes.apple.com/"></a></button>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h3 class="col-sm-12 underline text-center font30 subtitle">Follow us:</h3>                 
                    <div class="row">                       
                        <div class="col-xs-12 text-center">
                            <div class="col-sm-12">
                                <a class="socialicon facebook-1" href="https://www.facebook.com/efynch" target="_blank"></a>
                                <a class="socialicon twitter-1" href="https://twitter.com/Efynch" target="_blank"></a>
                                <a class="socialicon instagram" href="https://twitter.com/Efynch" target="_blank"></a>
                            </div>
                            <div class="col-sm-12">
                                <a class="socialicon googleplus" href="https://www.facebook.com/efynch" target="_blank"></a>
                                <a class="socialicon youtube" href="https://twitter.com/Efynch" target="_blank"></a>
                                <a class="socialicon linkedin-1" href="https://twitter-1.com/Efynch" target="_blank"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>      
    </section>
    <footer class="row clear">
        <div class="col-sm-12 text-center">
            <div class="col-xs-12 col-sm-3">
                <p class="col-xs-12 col-sm-12 subtitle underline">Service</p>
                <a>Weekly Deals</a><br>
                <a>Escrow</a><br>
                <a>Guarantee</a><br>
                <a>Scheduling</a><br>
                <a>Bidding</a><br><br>
            </div>
            <div class="col-xs-12 col-sm-3">
                <p class="col-xs-12 col-sm-12 subtitle underline">More Info</p>
                <a>Tips for Hiring</a><br>
                <a>Licensing</a><br>
                <a>Terms and Conditions</a><br>
                <a>Verification process</a><br>
                <a>FAQ</a><br>
                <a>Contact</a><br><br>
            </div>
            <div class="col-xs-12 col-sm-3">
                <p class="col-xs-12 col-sm-12 subtitle underline">Company</p>
                <a>About Us</a><br>
                <a>Careers</a><br>
                <a>Press</a><br>
                <a>Blog</a><br><br>
            </div>
        </div>
        <div class="col-sm-12 text-center">
            <div class="row">
                <div class="col-xs-12 col-sm-12"><p class="subtitle col-sm-3 col-xs-12">Services</p></div>
                <div class="col-xs-12 col-sm-3">
                    <a>Handyman</a><br>
                    <a>Laborer</a><br>
                    <a>Plumber</a><br>
                    <a>Electrician</a><br>
                    <a>Roofer</a><br>
                    <a>Landscaper</a><br>
                    <a>Lawn Mowing</a><br>
                    <a>HVAC</a><br><br>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <br>
                    <a>Painting</a><br>
                    <a>Drywall</a><br>
                    <a>Gutters</a><br>
                    <a>Garden</a><br>
                    <a>Moving</a><br>
                    <a>Windows and Siding</a><br>
                    <a>Snow Removal</a><br>
                    <a>Asphalt</a><br><br>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <br>
                    <a>Contractors</a><br>
                    <a>Handyman</a><br>
                    <a>Professionals</a><br>
                    <a>Licensed Pro</a><br>
                    <a>Amateurs</a><br>
                    <a>Side-Workers</a><br>
                    <a>Even Local College Students</a><br><br>
                </div>
                <div class="col-xs-12 col-sm-3">
                    <br><br><br>
                    <p class="align-middle">ALL MUST REGISTER AND PASS A VERIFICATION TEST.</p>
                </div>
            </div>            
        </div>
        <div class="container text-center">
            <p class="col-xs-12 text-center font28">
                <br><br><br>
                Made with pride to serve Maryland, Washington D.C and Virginia<br><br>
                copyright 2017 <a href="https://efynch.com">EFYNCH.COM</a> 101 W.DICMAN ST.SUITE 300, BALTIMORE MD 21230<br><br>
            </p>
            <p class="col-xs-12 font20">
                Full Terms of Service can be found here. EFynch is not a licensed contractor and is only providing software to facilitate communications. From time to time <a href="https://efynch.com">EFynch.com</a> will provide general information or conversations regarding home improvement issues. This is for entertainment purposes only. EFynch makes no representations or guarantees to the quality, status, pricing, practices, of the work or individuals beyond what is covered in our Terms of Service. Testimonials are accurate however pictures of individuals may not be the actual author for security reasons.<br><br>
            </p>
        </div>    
    </footer>

    <script type="text/javascript">
      $(document).ready(function(){
        $(".burger-menu").click(function(event){
          $('.burger-menu').toggleClass('menuclose');
          $('.mobmenu').slideToggle();
          event.stopPropagation();
        });
        if($(window).width() <= 767) {
          $('html').click(function() {
            $('.mobmenu').slideUp();
            $('.burger-menu').removeClass('menuclose');
          });
        }

        $("input, textarea").focusin(function(){
            $(this).parent().siblings('.box-title').css("color", "#f79724");
            $(this).parent().addClass('active');
        });
        $("input, textarea").focusout(function(){
            $(this).parent().siblings('.box-title').css("color", "#d0d0d0");
            $(this).parent().removeClass('active');
        });

        var homhyt = $('#homeowner').height();
        var conthyt = $('#contractor').height();
        $('.homeownerfixed').css("height",homhyt);
        $('.contractorfixed').css("height",conthyt);

        videoPopupClick();
        function videoPopupClick(){
            $('.video-thumb').click(function(){
                $('.videopopup').modal('show')
                var videoframe = $(this).attr('data-video');
                var videoname = $(this).attr('data-name');
                $("#myModalLabel").html(videoname);
                $("#videowrapper").html(videoframe);
            });
            $('.videopopup').on('hidden.bs.modal', function (e) {
                $("#videowrapper").html('');
            })
        }

        //Smoothscroll script
          $(function() {
          var headhyt = $('header').height();
          $('a[href*="#"]:not([href="#"])').click(function() {
            if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
              if (target.length) {
                $('html, body').animate({
                  scrollTop: target.offset().top - headhyt
                }, 1000);
                return false;
              }
            }
          });

        });

      });
    </script>


</body>
</html>