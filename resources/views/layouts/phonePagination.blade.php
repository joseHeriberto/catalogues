<div class="content" style="display: flex;margin: 0px auto">

    <a href="{{url('/phone/brand')}}">
        <div class="card" style="width: 18rem;  margin-left: 20.5rem;">
            <img src="{{asset('images/marca.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">Phone brand.</p>
            </div>
        </div>
    </a>

    <a href="{{url('/phone/camera')}}">
        <div class="card" style="width: 18rem;margin:center; margin-right: 2.5rem; margin-left: 2.5rem;">
        <img src="{{asset('images/camara.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Camera Phone.</p>
        </div>
        </div>
    </a>

      
</div>

<div class="nav" style="margin: 10px auto">
    <nav aria-label="Page navigation example"style="margin-left: 38rem;">
    <ul class="pagination">    
        <li class="page-item"><a class="page-link" href="{{url('/phone')}}">1</a></li>
        <li class="page-item"><a class="page-link" href="{{url('/phoneSo')}}">2</a></li>    
    </ul>
    </nav>
</div>
