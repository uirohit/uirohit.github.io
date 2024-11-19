<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
    <title>Fortune Data Center - Elevate Your Growth with Us</title>

  <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- <link rel="stylesheet preload" href="assets/css/vendor/bootstrap.min.css" as="style"> -->
    
    <!-- fontawesome css -->
    <link rel="stylesheet preload" href="assets/css/plugins/fontawesome.min.css" as="style">
    <!-- swiper css -->
    <!-- <link rel="stylesheet preload" href="assets/css/plugins/swiper.min.css" as="style"> -->
    <!-- magnific popup css -->
    <!-- <link rel="stylesheet preload" href="assets/css/plugins/magnific-popup.css" as="style"> -->
    <!-- aos css -->
    <!-- <link  rel="stylesheet preload" href="assets/css/plugins/aos.min.css" as="style"> -->
    <link rel="stylesheet preload" href="assets/css/plugins/sal.min.css" as="style">
    <!-- nice select css -->
    <link rel="stylesheet preload" href="assets/css/plugins/nice-select.css" as="style">
    <!-- metismenu css -->
    <!-- <link rel="stylesheet preload" href="assets/css/plugins/metismenu.css" as="style"> -->
    <!-- Custom css -->
    <link rel="stylesheet preload" href="assets/css/style2.css" as="style">


<!-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet"> -->

<link rel="preconnect" href="https://rsms.me/">
<link rel="stylesheet" href="https://rsms.me/inter/inter.css">

  <!-- THEME PRELOADER START -->
  
    <!-- THEME PRELOADER END -->
<style>
 /* styles.css */
/*.preload1 .element {
  -webkit-transition: none !important;
  -moz-transition: none !important;
  -ms-transition: none !important;
  -o-transition: none !important;
  transition: none !important;
}

.element {
  opacity: 0;
  transform: translateY(20px);
  transition: opacity 1s ease-out, transform 1s ease-out;
}

.element.visible {
  opacity: 1;
  transform: translateY(0);
}
*/

 /* Element to animate from the center */
        .center-element {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 150px; /* Adjust the size as needed */
            height: 150px; /* Adjust the size as needed */
            background-color: rgba(255, 255, 255, 1);

            display: flex;
            justify-content: center;
            align-items: center;
            color: black;
            font-size: 1.2em;
            border-radius: 50%;
            opacity: 0;
            animation: appearFromCenter 1s forwards;
            animation-delay: 2.0s; /* Delay of 1 second */

        }

        /* Animation keyframes for element coming from the center */
        @keyframes appearFromCenter {
            0% {
                transform: translate(-50%, -50%) scale(0);
                opacity: 0;
            }
            100% {
                transform: translate(-50%, -50%) scale(1);
                opacity: 1;
            }
        }





</style>

<style type="text/css">
 /*   .rts-hero__four {
    opacity: 1; 
}
*/

     .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #f8f9fa;
      padding: 10px 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .navbar-brand img {
      width: 30px;
      height: 30px;
    }
    .menu {
      display: flex;
      list-style: none;
      padding: 0;
      margin: 0;
    }
    .menu-item {
      margin: 0 15px;
      position: relative;
    }
    .menu-item a {
      text-decoration: none;
      color: #000;
      padding: 10px;
    }
    .menu-item a:hover {
    /*  background-color: #e2e6ea;
      border-radius: 5px;*/
    }
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
      z-index: 1;
      min-width: 200px;
      border-radius: 5px;
    }
    .dropdown-content a {
      padding: 10px;
      text-decoration: none;
      display: block;
      color: #000;
    }
    .dropdown-content a:hover {
          background-color: #0f5ca7;
    color: #fff;
    }
    .menu-item:hover .dropdown-content {
      display: block;
    }
    .navbar-button {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      cursor: pointer;
    }
    .navbar-button:hover {
      background-color: #0056b3;
    }
</style>


<script>
//     window.addEventListener('load', function() {
//     var hero = document.getElementById('hero2');
//     var centerelement = document.getElementById('hero3');
//     hero.classList.add('rts-hero-four');
//     hero.classList.add('rts-hero__four');
//     centerelement.classList.add('center-element');
// });

</script>

<!-- <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js?ver=3.3.2'>
$(window).on('load', function() {
  $('body').removeClass('preload1');
  $('.element').addClass('visible');
});
</script> -->


<body class="">




    <!-- HEADER AREA -->
    <header class="rts-header style-six header__default">
        <div class="container">
            <div class="row">
                <div class="rts-header__wrapper">
                    <!-- FOR LOGO -->
                    <div class="rts-header__logo">
                        <a href="index.php" class="site-logo">
                            <img src="assets/images/logo/logo-5.svg" alt="FDC">
                        </a>
                    </div>
                    <!-- FOR NAVIGATION MENU -->

                    <nav class="rts-header__menu mb" id="mobile-menu">
                        <div class="FDC-menu">
                            <ul class="list-unstyled FDC-desktop-menu">
                              
                                <li class="menu-item"><a href="index.php" class="FDC-dropdown-main-element">Home</a></li>
                                <li class="menu-item"><a href="index.php#solutions" class="FDC-dropdown-main-element">Solutions</a></li>
                                  <li class="menu-item">
        <a href="#">Services <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor"><path d="M11.9999 13.1714L16.9497 8.22168L18.3639 9.63589L11.9999 15.9999L5.63599 9.63589L7.0502 8.22168L11.9999 13.1714Z"></path></svg></a>
        <div class="dropdown-content">
          <a href="colocation.php">Colocation </a>
          <a href="edge-computing.php">Edge Computing </a>
          <a href="network-cloud-solutions.php">Network & Cloud </a>
          <a href="disaster-recovery-backup.php">Disaster Recovery </a>
          <a href="managed-it-services.php">Managed IT Services</a>
        </div>
      </li>


                             
                                <li class="menu-item"><a href="about.php" class="FDC-dropdown-main-element">About</a></li>
                                <li class="menu-item"><a href="index.php#contact" class="FDC-dropdown-main-element">Contact</a></li>

                                    
         

                               
                                
                            </ul>

                        </div>

                    </nav>
                    <!-- FOR HEADER RIGHT -->
                    <div class="rts-header__right" >
                        <div class="button-area">
                            <!-- <a href="#" class="login__btn"><i class="fa-regular fa-user"></i>Login</a> -->
                            <a href="contact-us.php" class="get-started__btn" style="text-transform: uppercase;">Get in Touch </a>

                        </div>
                        <button id="menu-btn" class="mobile__active menu-btn"><i class="fa-sharp fa-solid fa-bars"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER AREA END -->


</head>