<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">

    <meta name="apple-mobile-web-app-title" content="CodePen">

    <!-- td -->
    <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111" />
     <title>Featured products</title>
    <!-- form -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> --}}
    <style>
/* Global */
/* body {
    background: #3399cc;
    padding: 40px;
}   */

img { max-width:100%; }

a {
	-webkit-transition: all 150ms ease;
	-moz-transition: all 150ms ease;
	-ms-transition: all 150ms ease;
	-o-transition: all 150ms ease;
	transition: all 150ms ease; 
	}
    a:hover {
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)"; /* IE 8 */
        filter: alpha(opacity=50); /* IE7 */
        opacity: 0.6;
        text-decoration: none;
    }


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
.caption h4 {
    font-size: 1rem;
    color: #444;
    }
    .caption p {
        font-size: 0.75rem;
        color: #ffffff;
        }
        .btn.btn-mini {
            font-size: 0.63rem;
            }


/* Carousel Control */
.control-box {
    text-align: right;
    width: 100%;
    }
    
.carousel-control{
    background: #666;
    border: 0px;
    border-radius: 0px;
    display: inline-block;
    font-size: 34px;
    font-weight: 200;
    line-height: 18px;
    opacity: 0.5;
    padding: 4px 10px 0px;
    position: static;
    height: 30px;
    width: 15px;
    }



/* Mobile Only */
@media (max-width: 767px) {
    .page-header, .control-box {
    text-align: center;
    } 
}
@media (max-width: 479px) {
    .caption {
    word-break: break-all;
    }
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
        <h3>Featured products</h3>
        {{-- <p>Demo</p> --}}
    </div>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="https://avatar-ex-swe.nixcdn.com/slideshow/2023/03/24/1/d/5/b/1679644266077_org.jpg" alt="First slide" width= 2000px , height= 500px>
          </div>
    </div>
    
    {{-- <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="https://avatar-ex-swe.nixcdn.com/slideshow/2023/03/24/1/d/5/b/1679644266077_org.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://avatar-ex-swe.nixcdn.com/slideshow/2023/04/05/4/8/7/f/1680683734315_org.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="https://avatar-ex-swe.nixcdn.com/slideshow/2023/03/28/5/4/c/0/1679989124264_org.jpg" alt="Third slide">
          </div>
        </div>
      </div> --}}
        
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


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> 
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/js/bootstrap.min.js'></script>
<script id="rendered-js" >

// Carousel Auto-Cycle
$(document).ready(function () {
  $('.carousel').carousel({
    interval: 3000 });

});
{{-- //# sourceURL=pen.js
    </script>
</body>

</html>