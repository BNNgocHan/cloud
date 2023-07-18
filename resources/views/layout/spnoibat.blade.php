<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">

    <meta name="apple-mobile-web-app-title" content="CodePen">

    <!-- td -->
    <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111" />
     <title></title>
    <!-- form -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> --}}
    <style>
/* Global */
/* body {
    background: #3399cc;
    padding: 40px;
}   */

/* img { max-width:100%; } */




/* Container */
/* .container-fluid {
    background: #5a4b4b;
    margin: 40px auto 10px;
    padding: 20px 40px 0;
    max-width: 960px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
} */


/* Page Header */
/* .page-header {
    background: #f9f9f9;
    margin: -30px -40px 40px;
    padding: 20px 40px;
    border-top: 4px solid #ccc;
    color: #999;
    text-transform: uppercase;
    }
    .page-header h3 {
        line-height: 0.88rem;
        color: #000;
        } */



/* Thumbnail Box */



/* Mobile Only */
/* @media (max-width: 767px) {
    .page-header, .control-box {
    text-align: center;
    } 
}
@media (max-width: 479px) {
    .caption {
    word-break: break-all;
    }
}

* {box-sizing:border-box} */

/* Slideshow container */

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}



</style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
</head>

<body translate="no">
  <div class="container-fluid">
<div class="row-fluid">
<div class="span12">

    <div class="page-header">
        <h3></h3>
        {{-- <p>Demo</p> --}}
    </div>

    <!-- Slideshow container -->
<div class="slideshow-container">

    {{-- <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="https://www.xtmobile.vn/vnt_upload/news/07_2019/tt-sale-locdaunam-17-2.jpg" alt="First slide" width= 1500px , height= 400px>
          </div>
    </div>
     --}}
    {{-- <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="https://laptopmy.vn/image/lenovo/laptop-lenovo-banner-laptopmyvn.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://cdn.tgdd.vn/Files/2022/09/30/1473177/cau-hinh-iphone-14-pro-max-2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://mpics.mgronline.com/pics/Images/564000008078101.JPEG" alt="Third slide">
          </div>
        </div>
    </div> --}}


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  {{-- <h2>Carousel Example</h2>   --}}
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="https://www.greycom.com.cy/image/catalog/Front%20Banner/AppleWatchSEBan.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="https://m.media-amazon.com/images/S/aplus-media-library-service-media/a47a3b1a-34e3-44e9-a667-c22e2c66b501.__CR0,0,1464,600_PT0_SX1464_V1___.png" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="https://www.sunmobile.com.hk/TDWorld/r/cms/www/iPhone14_Web_Banner/iPhone_14_Pro_Web_Banner_eng.jpg?v=0909" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


        
    {{-- <div class="carousel slide" id="myCarousel">
        <div class="carousel-inner">
            <div class="item active">
                    <ul class="thumbnails">
                    @foreach($products as $product)
                        <li class="span3">
                            <div class="thumbnail">
                                <a href="#"><img src="{{ asset('image/product/'.$product->image) }}" alt="" style="width: 200px;"></a>
                            </div>
                            <div class="caption">
                                <h4>{{ $product->name }}</h4>
                				<p>{{ $product->singer }}</p>
                                <a class="btn btn-mini" href="#">&raquo; See more</a>
                            </div>
                        </li>
                        
                        @endforeach
                    </ul>
              </div><!-- /Slide1 --> 
            
        </div> --}}
        
        {{-- <div class="control-box">                            
            <a data-slide="prev" href="#myCarousel" class="carousel-control left">‹</a>
            <a data-slide="next" href="#myCarousel" class="carousel-control right">›</a>
        </div><!-- /.control-box -->    --}}
                              
    </div><!-- /#myCarousel -->
        
</div><!-- /.span12 -->          
</div><!-- /.row --> 
</div><!-- /.container -->

                              
</div>


{{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> 
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/js/bootstrap.min.js'></script>
<script id="rendered-js" ></script> --}}
</body>

</html>