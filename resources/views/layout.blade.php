<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title') | Made Coding</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset("public/devlop/img/icon.png")}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset("public/devlop/css/custom.css")}}">
    <link rel="stylesheet" href="{{asset("public/devlop/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("public/devlop/css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("public/devlop/css/magnific-popup.css")}}">
    <link rel="stylesheet" href="{{asset("public/plugins/fontawesome/css/fontawesome.css")}}">
    <link rel="stylesheet" href="{{asset("public/plugins/fontawesome/css/brands.css")}}">
    <link rel="stylesheet" href="{{asset("public/plugins/fontawesome/css/solid.css")}}">
    <link rel="stylesheet" href="{{asset("public/devlop/css/themify-icons.css")}}">
    <link rel="stylesheet" href="{{asset("public/devlop/css/nice-select.css")}}">
    <link rel="stylesheet" href="{{asset("public/devlop/css/flaticon.css")}}">
    <link rel="stylesheet" href="{{asset("public/devlop/css/gijgo.css")}}">
    <link rel="stylesheet" href="{{asset("public/devlop/css/animate.css")}}">
    <link rel="stylesheet" href="{{asset("public/devlop/css/slicknav.css")}}">
    <link rel="stylesheet" href="{{asset("public/devlop/css/style.css")}}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
  <header>
    @include('component.navbar')
  </header>

  @yield('content')

      <!-- footer_start  -->
  <footer class="footer">
    @include('component.footer')
  </footer>

  <script src="{{asset("public/devlop/js/vendor/modernizr-3.5.0.min.js")}}"></script>
  <script src="{{asset("public/devlop/js/vendor/jquery-1.12.4.min.js")}}"></script>
  <script src="{{asset("public/devlop/js/popper.min.js")}}"></script>
  <script src="{{asset("public/devlop/js/bootstrap.min.js")}}"></script>
  <script src="{{asset("public/devlop/js/owl.carousel.min.js")}}"></script>
  <script src="{{asset("public/devlop/js/isotope.pkgd.min.js")}}"></script>
  <script src="{{asset("public/devlop/js/ajax-form.js")}}"></script>
  <script src="{{asset("public/devlop/js/waypoints.min.js")}}"></script>
  <script src="{{asset("public/devlop/js/jquery.counterup.min.js")}}"></script>
  <script src="{{asset("public/devlop/js/imagesloaded.pkgd.min.js")}}"></script>
  <script src="{{asset("public/devlop/js/scrollIt.js")}}"></script>
  <script src="{{asset("public/devlop/js/jquery.scrollUp.min.js")}}"></script>
  <script src="{{asset("public/devlop/js/wow.min.js")}}"></script>
  <script src="{{asset("public/devlop/js/nice-select.min.js")}}"></script>
  <script src="{{asset("public/devlop/js/jquery.slicknav.min.js")}}"></script>
  <script src="{{asset("public/devlop/js/jquery.magnific-popup.min.js")}}"></script>
  <script src="{{asset("public/devlop/js/plugins.js")}}"></script>
  <script src="{{asset("public/devlop/js/gijgo.min.js")}}"></script>
  <!--contact js-->
  <script src="{{asset("public/devlop/js/contact.js")}}"></script>
  <script src="{{asset("public/devlop/js/jquery.ajaxchimp.min.js")}}"></script>
  <script src="{{asset("public/devlop/js/jquery.form.js")}}"></script>
  <script src="{{asset("public/devlop/js/jquery.validate.min.js")}}"></script>
  <script src="{{asset("public/devlop/js/mail-script.js")}}"></script>

  <script src="{{asset("public/devlop/js/main.js")}}"></script>

</body>

</html>