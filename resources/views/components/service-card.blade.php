@props(['service'])

    <div class="col-lg-4">
        <div class="item">
            <div class="thumb">
                <div class="hover-content">
                    <div class="inner">
                       {{$service->description}} 
                    </div>
                    
                    <ul>
                        <li><a href="/services/{{$service->id}}"><i class="fa fa-eye"></i></a></li>
                        <li><a href="/services/{{$service->id}}"><i class="fa fa-star"></i></a></li>
                        <li><a href="/services/{{$service->id}}" ><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                </div>
                <img src="{{$service->logo ? asset('storage/' . $service->logo) : asset('/images/no-image.png')}}" alt="">
            </div>
            <div class="down-content">
                <h4><a href="/services/{{$service->id}}" >{{$service->title}}</a></h4>
                <span><x-listing-tags :tagsCsv="$service->tags" /></span>
            </div>
        </div>
    </div>

