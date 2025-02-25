<x-layout>

    <!-- cards services -->
    <div class="container-fluid pt-5 bg-index ">
        <div class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-5">
                    <h2><img src="/media/a1.png" width="100"> Services</h2>
                    <p class="lead-services">By booking an appointment at Sanctuary Spa, you acknowledge and agree to these <a href="#">terms and conditions</a>. Thank you for choosing us for your beauty and wellness needs!</p>

                    <div class="d-flex justify-content-around">
                        <button class="btn btn-outline-dark rounded-pill">Book Now</button> <button class="btn btn-dark rounded-pill">More Info</button>
                    </div>

                </div>

                <!-- card generate dinamicamente -->
                @foreach($services as $service)
                <div class="col-6 mb-5">
                    <!-- card componenets -->
                    <x-card
                        title="{{$service['name']}}"
                        description="{{$service['description']}}"
                        target="{{$service['target']}}"
                        image="{{$service['image']}}" />
                </div>
                @endforeach
            </div>
        </div>
    </div>

     <!-- form -->
     <x-form />
     
    <!-- footer -->
    <x-footer />

    
</x-layout>