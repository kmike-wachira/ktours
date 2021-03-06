<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>KTOURS</title>
  <!-- MDB icon -->
  <link rel="icon" href="" type="image/x-icon">
  <!-- Font Awesome -->
  {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"> --}}
  <!-- offline fontawesome link -->
  <link rel="stylesheet" href="{{ asset('styling/fontawesome/css/all.css') }}"> 
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="{{ asset('styling/css/bootstrap.min.css') }}" media="screen">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="{{ asset('styling/css/mdb.min.css') }}">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="{{ asset('styling/css/style.css') }}">
  <meta property="og:site_name" content="The freeCodeCamp Forum" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:image" content="https://discourse-user-assets.s3.dualstack.us-east-1.amazonaws.com/original/3X/2/0/206c254cf9e405bcddf6caea7f882dca146dcd3c.png" />
  <meta property="og:image" content="https://discourse-user-assets.s3.dualstack.us-east-1.amazonaws.com/original/3X/2/0/206c254cf9e405bcddf6caea7f882dca146dcd3c.png" />
  <meta property="og:url" content="https://www.freecodecamp.org/forum/t/typeerror-cannot-read-property-0-of-undefined/257636/7" />
  <meta name="twitter:url" content="https://www.freecodecamp.org/forum/t/typeerror-cannot-read-property-0-of-undefined/257636/7" />
  <meta property="og:title" content="TypeError: Cannot read property &#39;0&#39; of undefined" />
  <meta name="twitter:title" content="TypeError: Cannot read property &#39;0&#39; of undefined" />
  </head>
  <body>

  @include('layouts.navbar')
  @yield('body')
  @include('layouts.footer')



  <!-- jQuery -->
  <script type="text/javascript" src="{{ asset('styling/js/jquery.min.js') }}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{ asset('styling/js/popper.min.js') }}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{ asset('styling/js/bootstrap.min.js') }}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{ asset('styling/js/mdb.min.js') }}"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
</html>
