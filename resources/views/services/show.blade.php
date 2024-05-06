<x-layout>

    <!-- ***** Product Area Starts ***** -->
    <section class="section" style="margin-top: 150px;" id="product">
        <div class="container">
            <div class="row">
            <div class="col-lg-8">
                <div class="left-images">
                    <img src="{{$service->logo ? asset('storage/' . $service->logo) : asset('/images/no-image.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="right-content">
                    <h4>{{$service->title}}</h4>
                    <span class="price">{{$service->tags}}</span>
                    <ul class="stars">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                    <span>{{$service->description}}</span>
                    <div class="quote">
                        <i class="fa fa-quote-left"></i><p>{{$service->company}}</p>{{$service->location}}
                    </div>
                    <div class="quantity-content">
                        <div class="left-content">
                            <h6>No. of Orders</h6>
                        </div>
                        <div class="right-content">
                            <div class="quantity buttons_added">
                                <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
                            </div>
                        </div>
                    </div>
                    <div class="total">
                        <h4>Total: $210.00</h4>
                        <div class="main-border-button"><a href="#">Add To Cart</a></div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- ***** Product Area Ends ***** -->

</x-layout>