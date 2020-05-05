<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
   
</head>
<body>
<div class="content" style="display: flex;margin: 0 auto">

    <a href="{{url('/phone/brand/huawei')}}">
        <div class="card" style="width: 18rem;  margin-left: 9.5rem;">
            <img src="{{asset('images/huawei.jpg')}}" class="card-img-top" alt="..." >
            <div class="card-body">
                <p class="card-text">Here you can find many items of cell phones brand Huawei.</p>
            </div>
        </div>
    </a>

    <a href="{{url('/phone/brand/samsung')}}">
        <div class="card" style="width: 18rem;margin:0 auto; margin-right: 2.5rem; margin-left: 2.5rem;">
        <img src="{{asset('images/samsung.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Here you can find many items of cell phones brand Samsung.</p>
        </div>
        </div>
    </a>
    <a href="{{url('/phone/brand/motorola')}}">
        <div class="card" style="width: 18rem;margin:center; margin-right: 2.5rem; margin-left: 2.5rem;">
        <img src="{{asset('images/mootorola.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Here you can find many items of cell phones brand Motorola.</p>
        </div>
        </div>
    </a>

        
</div>


</body>
</html>