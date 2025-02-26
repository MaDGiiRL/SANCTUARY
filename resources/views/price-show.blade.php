<x-layout class="Prices">
    <div class="container mt-5">
        <h2 class="text-center mb-4">Our Services</h2>
        <div class="row">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ $service['image'] }}" class="img-fluid rounded shadow" alt="{{ $service['name'] }}">
                    </div>
                    <div class="col-md-6">
                        <h2>{{ $service['name'] }} - Prices</h2>
                        <p class="lead">Here you can find the pricing details for <strong>{{ $service['name'] }}</strong>.</p>
                        <a href="{{ route('services') }}" class="btn btn-secondary">Back to Services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>