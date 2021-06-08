<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Oaks & Pines Landscaping Ltd.</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>


    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>


  <!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="/storage/engine1/style.css" />
<script type="text/javascript" src="/storage/engine1/jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->

{{-- favicon --}}
<link rel='icon' href='/storage/Images/favicon.ico' type='image/x-icon'/>

<style>


.bgimg-1, .bgimg-2, .bgimg-3 {
  position: relative;
  /* opacity: 0.85; */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image: url("/storage/data1/images/images.jpg");
  min-height: 100%;
}

.bgimg-2 {
  background-image: url("/storage/Images/fountain.gif");
  min-height: 400px;
}

.bgimg-3 {
  background-image: url("/storage/Images/sunflower.gif");
  min-height: 400px;
}

.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  text-align: center;
}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
  }
}

 .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 400px;
  margin: auto;
  text-align: center;
  font-family: arial;
}


.container1 {
  position: relative;
  width: 100%;
  max-width: 800px;
}

.image {
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute; 
  bottom: 0; 
  background: rgb(0, 0, 0);
  background: rgba(0, 0, 0, 0.5); /* Black see-through */
  color: #f1f1f1; 
  width: 100%;
  transition: .5s ease;
  opacity:0;
  color: white;
  font-size: 20px;
  padding: 20px;
  text-align: center;
}

.container1:hover .overlay {
  opacity: 1;
}

</style>
  
</head>
<body>
        @include('inc.header')
        @include('inc.navbar')
                @include('inc.messages')
                @yield('content')      
              

    <script src="//cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
      <script>
        CKEDITOR.replace( 'article-ckeditor' );

    </script>


@include('inc.footer')
</body>
</html>
