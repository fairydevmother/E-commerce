<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Project</title>

    <!-- Latest compiled and minified CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <!-- Latest compiled and minified JavaScript -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}


</body>
 <style>
    @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet');
    @import url('https://fonts.googleapis.com/css2?family=Koulen&display=swap" rel="stylesheet" rel="stylesheet');
    html,body{
        margin:0 auto;
        background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
    }
    .search-box{
        width:500px   !important;
        
    }
    .custom-login{
        height: 600px;
        padding-top:100px;
    }
    .custom-product{


    }
    .navbar-brand{
        font-family: 'Fredoka One', cursive;
        font-size:22px;
      
    }
    .cart{
        font-weight:600;
    }
    h3{
        color:#9339fb;
        font-size:30px;
        font-family: 'Koulen', cursive;
        
    }
    .carousel-control {
     background-image:none !important;
     filter:none !important;
    }
    img.slider-img{
      height:400px !important;
      margin-left:195px;
      border-radius:55px;
    }
    .carousel-caption{
        margin-left:480px;
        margin-bottom:67px;
    }
   
    .carousel-inner{
       border-radius: 55px; 
       background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);
    }
     img.trending-image{
        height:100px;
    }
    .trending-item{
        float:left;
        width:30%;

    }
    .trending-wrapper{
        padding-top:200px;
        
    }
    
 </style>
</html>
