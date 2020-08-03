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

  <script src="https://code.jquery.com/jquery-latest.min.js"></script>
  

 
  
  
  
  
  
  <!--[if IE]>
  <![endif]-->

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




#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
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


<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
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
                     
                        
                      <img src="{{asset('images/hu9.jpg')}}"  alt="motorola" style="width:100%;" class="zoom"id="myImg">
                          
                    </div>

                    <div class="item">
                    
                      <img  src="{{asset('images/hu8.jpg')}}"  alt="samsung" style="width:100%;"class="zoom"id="myImg">
                      
                    </div>
                  
                    <div class="item">
                    
                      <img src="{{asset('images/hu7.jpg')}}" alt="huawei" style="width:100%;  "class="zoom"id="myImg2">
                     
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
                <td>Huawei y5</td>
              </tr>
              <tr>
                <td>Description: </td>
                <td>SmartPhone</td>
              </tr>
              <tr>
                <td>Weight: </td>
                <td>6.8'</td>
              </tr>
              <tr>
                <td>Category: </td>
                <td>Phone</td>
              </tr>
              <tr>
                <td>Retail price: </td>
                <td>67789</td>
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
                      <img  id="myImg" src="{{asset('images/hu1.jpg')}}"  alt="motorola" style="width:100%;"class="zoom">
                    </div>

                    <div class="item">
                      <img src="{{asset('images/hu2.jpg')}}"  alt="samsung" style="width:100%;"class="zoom">
                    </div>
                  
                    <div class="item">
                      <img src="{{asset('images/hu3.jpg')}}" alt="huawei" style="width:100%;"class="zoom">
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
                <td>Huawei y6</td>
              </tr>
              <tr>
                <td>Description: </td>
                <td>SmartPhone</td>
              </tr>
              <tr>
                <td>Weight: </td>
                <td>6.8'</td>
              </tr>
              <tr>
                <td>Category: </td>
                <td>Phone</td>
              </tr>
              <tr>
                <td>Retail price: </td>
                <td>67789</td>
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
                      <img src="{{asset('images/hu4.jpg')}}"  alt="motorola" style="width:100%;"class="zoom">
                    </div>

                    <div class="item">
                      <img src="{{asset('images/hu5.jpg')}}"  alt="samsung" style="width:100%;"class="zoom">
                    </div>
                  
                    <div class="item">
                      <img src="{{asset('images/hu6.jpg')}}" alt="huawei" style="width:100%;"class="zoom">
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
                <td>Huawei</td>
              </tr>
              <tr>
                <td>Description: </td>
                <td>SmartPhone</td>
              </tr>
              <tr>
                <td>Weight: </td>
                <td>6.8'</td>
              </tr>
              <tr>
                <td>Category: </td>
                <td>Phone</td>
              </tr>
              <tr>
                <td>Retail price: </td>
                <td>67789</td>
              </tr>
            </table>
        </div>
        </div>
    

        
</div>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>
</body>
</html>