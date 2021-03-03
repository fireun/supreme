@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="{{ asset('css/index.css') }}" rel="stylesheet">
       
    </head>
    <body>
        <main role="main">

            <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:-1.25%;">
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('images/supreme1.jpg')}}" >
                  <div class="container">
                    <div class="carousel-caption text-left">
                      <h1>Supreme</h1>
                      <p>Supreme is an American skateboarding shop and clothing brand established in New York City in April 1994. The brand caters to the skateboarding and hip hop cultures as well as to youth culture in general. The brand produces clothes and accessories and also manufactures skateboards.</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item" >
                    <img src="{{asset('images/supreme2.jpg')}}" >
                  <div class="container">
                    <div class="carousel-caption" style="color:black;">
                      <h1>Quality</h1>
                      <p>Quality that we always provide it and produce quality product to all customers.</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                    <img src="{{asset('images/supreme3.jpg')}}" >
                  <div class="container">
                    <div class="carousel-caption text-right">
                      <h1>Worldwide product and service</h1>
                      <p>Supreme is very famous in many country include United State of America, Europe and Asia.</p>
                    </div>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <div class="container marketing" style="margin-top:3%;">
              <div class="row">
                <div class="col-lg-4">
                    <a href="{{ route('products') }}"><img src="{{asset('images/shirt.jpg')}}" width="140" height="140" class="bd-placeholder-img rounded-circle"></a>
                  <h2 style="margin-top:10%;">T-Shirt</h2>
                  <p>A T-shirt, or tee shirt, is a style of fabric shirt named after the T shape of its body and sleeves. Traditionally it has short sleeves and a round neckline, known as a crew neck, which lacks a collar. T-shirts are generally made of a stretchy, light and inexpensive fabric and are easy to clean.</p>
                  <p><a class="btn btn-secondary btn-danger" href="{{ route('products') }}" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <a href="{{ route('products') }}"><img src="{{asset('images/hoodie1.png')}}" width="140" height="140" class="bd-placeholder-img rounded-circle"></a>
                  <h2 style="margin-top:10%;">Hoodie</h2>
                  <p>A hoodie (also spelt hoody, and alternatively known as a hooded sweatshirt) is a sweatshirt with a hood. Hoodies often include a muff sewn onto the lower front, and (usually) a drawstring to adjust the hood opening.The word hood derives ultimately of the same root as an English hat.</p>
                  <p ><a class="btn btn-secondary btn-danger" href="{{ route('products') }}" role="button" style="margin-top:3px;">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <a href="{{ route('products') }}"><img src="{{asset('images/pants.png')}}" width="140" height="140" class="bd-placeholder-img rounded-circle"></a>
                  <h2 style="margin-top:10%;">Pants</h2>
                  <p>Pants is an outer garment covering the lower half of the body from the waist to the ankles and divided into sections to cover each leg separately. Outside North America, the word pants generally means underwear and not trousers. Shorts are similar to trousers</p><br/>
                  <p><a class="btn btn-secondary btn-danger" href="{{ route('products') }}" role="button">View details &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
              </div><!-- /.row -->
          
          
              <!-- START THE FEATURETTES -->
          
              <hr class="featurette-divider">
          
              <div class="row featurette">
                <div class="col-md-7">
                  <h2 class="featurette-heading">What is <span class="text-danger">Supreme?</span></h2>
                  <p class="lead">The brand was founded by James Jebbia. Although he was born in the United States, he lived in England until he was 19. Jebbia was originally the manager of Stussy in New York in the early 1990s.</p>
                </div>
                <div class="col-md-5">
                    <img src="{{asset('images/logo.png')}}" width="500" height="500" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto">
                </div>
              </div>
          
              <hr class="featurette-divider">
          
              <div class="row featurette">
                <div class="col-md-7 order-md-2">
                  <h2 class="featurette-heading">What the Trademarks of <span class="text-danger">Supreme</span></h2>
                  <p class="lead">Supreme has been granted trademarks in many countries including countries in North America, Europe and Asia. Supreme lost a lawsuit in an Italian court, and the European Union refused to register its trademark, so "Supreme" items not manufactured by Supreme can readily be sold in Italy and Spain, and Samsung was able to sign a promotion agreement with a European "Supreme" (not Supreme).</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="{{asset('images/logo2.png')}}" width="500" height="500" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto">
                </div>
              </div>
          
              <hr class="featurette-divider">
          
              <div class="row featurette">
                <div class="col-md-7">
                  <h2 class="featurette-heading">Awards of <span class="text-danger">Supreme</span></h2>
                  <p class="lead">In 2018, Supreme was awarded the Council of Fashion Designers of America's Menswear Designer of the Year Award.</p>
                </div>
                <div class="col-md-5">
                    <img src="{{asset('images/supreme4.jpg')}}" width="500" height="500" class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto">
                </div>
              </div>
          
              <hr class="featurette-divider">
            </div>
          </main>
    </body>
</html>
@endsection