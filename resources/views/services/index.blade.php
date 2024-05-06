<x-layout>
    @include('partials._search')
    
        <!-- ***** Products Area Starts ***** -->
        <section class="section" id="products">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-heading">
                            <h2>Our Latest Products and Services</h2>
                            <span>Check out all of our products and Services.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="pagination justify-center ">
                    {{$services->links()}}
                </div>
            </div>

            <div class="container">
                <div class="row">
                    @unless (count($services)==0)          
                    @foreach ($services as $service)
                        <x-service-card :service="$service" />
                    @endforeach
            
                    @else
                        <p>No Listings found.</p>
                    @endunless
                </div>
            </div>

            <div class="col-lg-12">
                <div class="pagination  justify-center ">
                    {{$services->links()}}
                </div>
            </div>

        </section>
        <!-- ***** Products Area Ends ***** -->
    
</x-layout>