<?php
session_start();

if(!isset($_SESSION['email']))
{
    header('location:login.php');
}
?>   
<?php

include 'connection.php';

$email = $_SESSION['email'];

$selectquery = "select * from studentdata where email = '$email'";

$query = mysqli_query($con,$selectquery);

$result = mysqli_fetch_assoc($query);

?>          
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Flow-Web Dashboard</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/vendor.css">

    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script defer src="js/fontawesome/all.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

</head>
<style>
   ::-webkit-scrollbar
  {
  width: 10px;
  background-color: #14171b;
  height: 20px;
  }
  ::-webkit-scrollbar-thumb
  {
  background: linear-gradient(#14171b,#d9083c);
  border-radius: 10px;
  }
</style>

<body id="top">


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- header
    ================================================== -->
    <header class="s-header" style="padding: -10px;">

        <div class="s-header__logo">
            <a href="index.php">
               <div style="margin-top: -50px;"><h3 style="color:  #d9083c;">Flow</h3></div>
            </a>
        </div>

        <div class="s-header__content">
    
            <nav class="s-header__nav-wrap">
                <ul class="s-header__nav">
                    <li><a  href="index.php" title="Intro">Home</a></li>
                    <li><a  href="about.html" title="About">About</a></li>
                    <li><a  href="index.php" title="Services">Services</a></li>
                    <li><a  href="index.php" title="Works">Works</a></li>
                </ul>
            </nav> <!-- end s-header__nav-wrap -->

            <a href="register.php" class="btn btn--primary btn--small">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M24 0l-6 22-8.129-7.239 7.802-8.234-10.458 7.227-7.215-1.754 24-12zm-15 16.668v7.332l3.258-4.431-3.258-2.901z"/></svg>
                LOGOUT
            </a>

        </div> <!-- end header-content -->

        <a class="s-header__menu-toggle" href="#0"><span>Menu</span></a>

    </header> <!-- end s-header -->


    <!-- hero
    ================================================== -->
    <section id="hero" class="s-hero target-section">

        <div class="s-hero__bg" style="background-image: url('pu.png'); background-color:  #1e272b;">
            <div class="gradient-overlay"></div>
        </div>

        <div class="row s-hero__content">
            <div class="column">

                <h1 style="font-size: 80px;">WLCM<span style="color: white;">.</span></h1>

                <div class="s-hero__content-about">
                  <h3><?php echo $result['studentname']; ?></h3>
                    <p>
                   To flow web design<br> <span style="color: #d9083c">scroll to </span>payment.
                    </p>
                <a class="btn btn--primary h-small-width" href="logout.php" style="margin-top: -20px;">LOGOUT</a>
                    <footer>
                        <div class="s-hero__content-social">
                            <a href="#0"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                            <a href="#0"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                            <a href="#0"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                            <a href="#0"><i class="fab fa-dribbble" aria-hidden="true"></i></a>
                        </div>
                    </footer>
                </div>

            </div>
        </div>

        <div class="s-hero__scroll">
            <a href="#about" class="s-hero__scroll-link smoothscroll">
                Scroll Down
            </a>
        </div>

    </section>

    <!--payment section--->

 <section id="about" class="s-about" style="padding: 40px;">
        <div class="horizontal-line"></div>

            <div class="row block-large-1-2 block-tab-full s-about__process item-list">
            <div class="column item item-process" data-aos="fade-up">
                <h3 class="item-title">Your Details</h3>
                <br><br>
                <p style="color: white; font-size: 22px;">
                Your Name : <span style="color: #d9083c"><?php echo $result['studentname']; ?></span>
                <br><br>
                Your Number : <span style="color: #d9083c"><?php echo $result['number']; ?></span>
                <br><br>
                Your Email : <span style="color: #d9083c"><?php echo $result['email']; ?></span>
                <br><br>
                Your College : <span style="color: #d9083c"><?php echo $result['college']; ?></span>
                <br><br>
                Project name : <span style="color: #d9083c"><?php echo $result['project']; ?></span>
                <br><br>

                </p>
            </div>
            <div class="column item item-process" data-aos="fade-up">
                <h3 class="item-title">QR Code for payment</h3>
                <p style="color: red;font-weight: bolder;margin-top: 25px;margin-bottom: -10px;">*****  PAYMENT THROUGH QR-CODE NOT REFLECT CHANGES TO PAYMENT STATUS  *****</p>
                <p style="text-align: center;">
                	<br><br>
             <img src="qr.jpeg" height="250px" width="250px">
             <br><br>
             <p style="color: white;text-align: center;">********** OR **********</p>
             <a target="new" class="btn btn--primary h-full-width" href="https://rzp.io/l/uXmPUAU">GO FOR PAYMENT</a>
                </p>
            </div>

            <div class="column item item-process" data-aos="fade-up" style="margin-top: 20px;">
                <h3 class="item-title">Payment status</h3>
                <p>
                   
                	
                	    <h2 ><?php if($result['payment'] == 'a'){ echo '<h2 style="color:red;">Payment Pending </h2>';}
                        else{
                            echo '<h2 style="color:green;">Payment Successfull </h2>';
                            
                        }?></h2>
                </p>
            </div>
                    <div class="column item item-process" data-aos="fade-up" style="margin-top: 20px;">
                <h3 class="item-title">After Payment</h3>
                
               <p style="color: white">
               <!--image-->

                 After payment we will contact you within 1 hour . If we not please contact in given number <a href="tel:9304984077">9304984077</a>.
               <!--img end-->
                </p>
            </div>
        </div>

    </section>

    <!--end payment---->
  <!-- contact
    ================================================== -->
    <section class="s-contact">

        <div class="row narrower s-contact__top h-text-center">
            <div class="column" >
                <h3 class="h6" style="margin-top:-110px;">Get In Touch</h3>
                <h1 class="display-1">
                Have an idea or an epic project in mind? Talk to
                us. Let us know. We will help you to achieve you idea into website.
                </h1>
            </div>
        </div> <!-- s-footer__top -->

        <div class="row h-text-center">
            <div class="column">
                <p class="s-contact__email" style="margin:-60px 0">
                    <a href="mailto:#0" style="font-size: 30px;">flowwebat@gmail.com</a>
                </p>
            </div>
        </div>

    </section>  <!-- end s-contact -->


    <!-- footer
    ================================================== -->
    <footer class="s-footer" style="text-align: center;">
        <div class="row row-y-top">

            <div class="column large-8 medium-12">
                <div class="row">
                    <div class="column large-7 tab-12 s-footer__block">
                        <h4 class="h6">Where to Find Us</h4>
        
                        <p>
                        834005 Ranchi <br>
                        Ratu Road, Jharkhand <br>
                         IN <br>
                        <a href="tel:6201760843">+91-6201760843</a><br>
                        <a href="tel:9304984077">+91-9304984077</a><br>
                        <a href="tel:7493820347">+91-7493820347</a><br>
                        </p>
                    </div>
        
                    <div class="column large-5 tab-12 s-footer__block">
                        <h4 class="h6">Follow Us</h4 class="h6">
        
                        <ul class="s-footer__list">
                            <li><a target="new" href="https://www.facebook.com/FlowWeb-108132431554206">Facebook</a></li>
                            <li><a target="new" href="#0">Whatsapp</a></li>
                            <li><a target="new" href=" https://www.instagram.com/invites/contact/?i=103puopx2pz0e&utm_content=m07kf58">Instagram</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>

            <div class="column large-4 medium-12 s-footer__block--end">
                <a href="mailto:#0" class="btn h-full-width">Let's Talk</a>

                <div class="ss-copyright" >
                    <span>Copyright Flow 2021</span> 
                    <span>Design by <a href="">Flow Web Cooking</a></span>
                </div>
            </div>

            <div class="ss-go-top">
                <a class="smoothscroll" title="Back to Top" href="#top">
                    top
                </a>
            </div> <!-- end ss-go-top -->

        </div>
    </footer>
    

    <!-- photoswipe background
    ================================================== -->
    <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div> <!-- end photoSwipe background -->


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
    	function ss()
    	{
    		alert('Currently unavilable');
    	}
    </script>
</body>

</html>