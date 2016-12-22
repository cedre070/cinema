<!DOCTYPE html>
<html>

<head>
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>AbsoluteAdmin - A Responsive Bootstrap 3 Admin Dashboard Template</title>
  <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
  <meta name="description" content="AbsoluteAdmin - A Responsive HTML5 Admin UI Framework">
  <meta name="author" content="AbsoluteAdmin">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font CSS (Via CDN) -->
  <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>

  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="{{asset('skin/default_skin/css/theme.css')}}">

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

</head>

<body class="blank-page">

  <!-- Start: Main -->
  <div id="main">

@include ('partial/_header')

@include ('partial/_sidebar')





    <section id="content_wrapper">
        @section ('content')
        @show


      </section>
      <!-- End: Content -->
</div>
      <!-- jQuery -->
      <script src="{{asset('vendor/jquery/jquery-1.11.1.min.js')}}"></script>
      <script src="{{asset('vendor/jquery/jquery_ui/jquery-ui.min.js')}}"></script>

      <!-- Theme Javascript -->
      <script src="{{asset('js/utility/utility.js')}}"></script>
      <script src="{{asset('js/demo/demo.js')}}"></script>
      <script src="{{asset('js/main.js')}}"></script>
      <script type="text/javascript">
      jQuery(document).ready(function() {

        "use strict";

        // Init Theme Core
        Core.init();


      });
      </script>
      <!-- END: PAGE SCRIPTS -->

      </body>

      </html>
