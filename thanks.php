<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   

  <title>  Thank you for your application!</title>
  <!--===============================================================================================-->
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
  <!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <!--===============================================================================================-->
</head>
<body class="animsition">

<!-- Header -->
<header class="header-v4">
  <!-- Header desktop -->
  <div class="container-menu-desktop">
    <!-- Topbar -->

    <div class="wrap-menu-desktop how-shadow1">
      <nav class="limiter-menu-desktop container">

        <!-- Logo desktop -->
        <a href="index.php" class="logo">
          Quality
        </a>

        <!-- Menu desktop -->
        <div class="menu-desktop">
          <ul class="main-menu">
            <li class="current"><a href="index.php">Main</a></li>
            <li><a href="blog.php">Articles</a></li>


            <li><a href="contact.php">Contacts</a></li>
            <li><a href="policy.php">Privacy policy</a></li>
            <li><a href="terms.php">Terms and conditions</a></li>
          </ul>
        </div>

        <!-- Icon header -->
      </nav>
    </div>
  </div>

  <!-- Header Mobile -->
  <div class="wrap-header-mobile">
    <!-- Logo moblie -->
    <div class="logo-mobile">
      <a href="index.php">
        Quality
      </a>
    </div>

    <!-- Icon header -->

    <!-- Button show menu -->
    <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
    </div>
  </div>


  <!-- Menu Mobile -->
  <div class="menu-mobile">


    <ul class="main-menu-m">
      <li class="current"><a href="index.php">Main</a></li>
      <li><a href="blog.php">Articles</a></li>


      <li><a href="contact.php">Contacts</a></li>
      <li><a href="policy.php">Privacy policy</a></li>
      <li><a href="terms.php">Terms and conditions</a></li>
    </ul>
  </div>

  <!-- Modal Search -->
</header>

<!-- Cart -->


<!-- Title page -->


<!-- Content page -->
<section class="bg0 p-t-62 p-b-60">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-lg-12 p-b-80">
        <div class="p-r-45 p-r-0-lg row">

          <div class="col-12 p-b-63">
<p>
  Thank you for your application!
</p>

          </div>
        </div>


      </div>
    </div>

  </div>
  </div>
</section>


<!-- Footer -->
<footer class="bg3 p-t-75 p-b-32">
  <div class="container">

    <div class="p-t-40">

      <p class="stext-107 cl6 txt-center">
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
        All rights reserved

      </p>
    </div>
  </div>
</footer>


<!-- Back to top -->
<div class="btn-back-to-top" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="zmdi zmdi-chevron-up"></i>
		</span>
</div>
<div class='cookie-banner'>
  <p>
    The site uses cookies. They allow us to recognize you and get information about your user experience.By continuing to browse the site, I agree to the use of cookies by the site owner in accordance with  <a target="_blank" href="https://en.wikipedia.org/wiki/HTTP_cookie">Cookie policy</a>
  </p>
  <button class='close-cookie'>&times;</button>
</div>

<!-- Scroll To Top -->

<script>
  window.onload = function () {
    $('.close-cookie').click(function () {
      $('.cookie-banner').fadeOut();
    })
  }
</script>
<script>
  let elems = document.querySelectorAll('.server-name');
  elems.forEach((elem) => {
    elem.innerHTML = window.location.hostname
  })
</script>

<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<script>
  $(".js-select2").each(function () {
    $(this).select2({
      minimumResultsForSearch: 20,
      dropdownParent: $(this).next('.dropDownSelect2')
    });
  })
</script>
<!--===============================================================================================-->
<script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script>
  $('.js-pscroll').each(function () {
    $(this).css('position', 'relative');
    $(this).css('overflow', 'hidden');
    var ps = new PerfectScrollbar(this, {
      wheelSpeed: 1,
      scrollingThreshold: 1000,
      wheelPropagation: false,
    });

    $(window).on('resize', function () {
      ps.update();
    })
  });
</script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>