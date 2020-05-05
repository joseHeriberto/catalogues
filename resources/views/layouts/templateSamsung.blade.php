<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<style>
img.zoom {
  width: 350px;
  height: 200px;
  -webkit-transition: all .2s ease-in-out;
  -moz-transition: all .2s ease-in-out;
  -o-transition: all .2s ease-in-out;
  -ms-transition: all .2s ease-in-out;
}

.transition {
  -webkit-transform: scale(1.8); 
  -moz-transform: scale(1.8);
  -o-transform: scale(1.8);
  transform: scale(1.8);
}
</style>


</head>
<body>

<script>
$(document).ready(function(){
  $('.zoom').hover(function() {
      $(this).addClass('transition');
  }, function() {
      $(this).removeClass('transition');
  });
});
</script>
<div class="content" style="display: flex;margin: 0px auto">
    
        <div class="card" style="width: 20%;margin:10 auto;margin-left:20.5rem;">
        <div id="myCarousel" class="carousel slide;" data-ride="carousel" style="width:93%; margin: 10px auto">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <img src="{{asset('images/s1.jpg')}}"  alt="motorola" style="width:100%;"class="zoom">
                    </div>

                    <div class="item">
                      <img src="{{asset('images/s2.jpg')}}"  alt="samsung" style="width:100%;"class="zoom">
                    </div>
                  
                    <div class="item">
                      <img src="{{asset('images/s3.jpg')}}" alt="huawei" style="width:100%;"class="zoom">
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
             
            <div class="card-body">
            <table class="egt" style="text-align: left;">
            <tr>
                <td>Name: </td>
                <td>{{$products[3]->name}}</td>
              </tr>
              <tr>
                <td>Description: </td>
                <td>{{$products[3]->description}}</td>
              </tr>
              <tr>
                <td>Weight: </td>
                <td>{{$products[3]->weight}}</td>
              </tr>
              <tr>
                <td>Category: </td>
                <td>{{$products[3]->category}}</td>
              </tr>
              <tr>
                <td>Retail price: </td>
                <td>{{$products[3]->price}}</td>
              </tr>
            </table>
            </div>
        </div>
    

    
        <div class="card" style="width: 20%; margin:10 auto; margin-left: 2.5rem;">
                <div id="myCarousel1" class="carousel slide;" data-ride="carousel" style="width:93%; margin: 10px auto">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel1" data-slide-to="1"></li>
                    <li data-target="#myCarousel1" data-slide-to="2"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <img src="{{asset('images/s4.jpg')}}"  alt="motorola" style="width:100%;"class="zoom">
                    </div>

                    <div class="item">
                      <img src="{{asset('images/s5.jpg')}}"  alt="samsung" style="width:100%;"class="zoom">
                    </div>
                  
                    <div class="item">
                      <img src="{{asset('images/s6.jpg')}}" alt="huawei" style="width:100%;"class="zoom">
                    </div>
                  </div>

                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel1" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
             
        <div class="card-body">
             <table class="egt" style="text-align: left;">
             <tr>
                <td>Name: </td>
                <td>{{$products[4]->name}}</td>
              </tr>
              <tr>
                <td>Description: </td>
                <td>{{$products[4]->description}}</td>
              </tr>
              <tr>
                <td>Weight: </td>
                <td>{{$products[4]->weight}}</td>
              </tr>
              <tr>
                <td>Category: </td>
                <td>{{$products[4]->category}}</td>
              </tr>
              <tr>
                <td>Retail price: </td>
                <td>{{$products[4]->price}}</td>
              </tr>
            </table>
        </div>
        </div>
    
   
        <div class="card" style="width: 20%; margin:10 auto; margin-left: 2.5rem;">
        <div id="myCarousel2" class="carousel slide;" data-ride="carousel" style="width:93%; margin: 10px auto">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel2" data-slide-to="1"></li>
                    <li data-target="#myCarousel2" data-slide-to="2"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                      <img src="{{asset('images/s7.jpg')}}"  alt="motorola" style="width:100%;"class="zoom">
                    </div>

                    <div class="item">
                      <img src="{{asset('images/s8.jpg')}}"  alt="samsung" style="width:100%;"class="zoom">
                    </div>
                  
                    <div class="item">
                      <img src="{{asset('images/s9.jpg')}}" alt="huawei" style="width:100%;"class="zoom">
                    </div>
                  </div>

                  <!-- Left and right controls -->
                  <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel2" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
             
        <div class="card-body">
        <table class="egt" style="text-align: left;">
        <tr>
                <td>Name: </td>
                <td>{{$products[6]->name}}</td>
              </tr>
              <tr>
                <td>Description: </td>
                <td>{{$products[6]->description}}</td>
              </tr>
              <tr>
                <td>Weight: </td>
                <td>{{$products[6]->weight}}</td>
              </tr>
              <tr>
                <td>Category: </td>
                <td>{{$products[6]->category}}</td>
              </tr>
              <tr>
                <td>Retail price: </td>
                <td>{{$products[6]->price}}</td>
              </tr>
            </table>
        </div>
        </div>
    

        
</div>

</body>
</html>