<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

   
</head>
<body>


<div class="content" style="display: flex;margin: 0px auto">

<a href="{{url('/console/xbox')}}">
    <div class="card" style="width: 18rem;  margin-left: 22.5rem;">
        <img src="{{asset('images/xbox.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Xbox.</p>
        </div>
    </div>
</a>
<a href="{{url('/console/ps')}}">
    <div class="card" style="width: 18rem;margin:center; margin-right: 2.5rem; margin-left: 2.5rem;">
    <img src="{{asset('images/play.png')}}" class="card-img-top" alt="...">
    <div class="card-body">
        <p class="card-text">PlayStation.</p>
    </div>
    </div>
</a>

  
</div>
    
</body>
</html>