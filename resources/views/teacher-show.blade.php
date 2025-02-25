<x-layout>
    <div class="bg-academy">
        <div class="container-fluid pt-5">
            <div class="row pt-5 mt-5 ps-5 pe-5">
                <div class="col-12 col-md-6 bg-pink p-5">
                    <h5>{{ $teacher['subject'] }}</h5>
                    <p class="lead fs-3"><span class="fw-bold">Teacher:</span> {{ $teacher['name'] }} {{ $teacher['surname'] }}</p>
                    <p class="lead"><span class="fw-bold">The Course:</span> {{ $teacher['description'] }}</p>
                    <p class="lead"><span class="fw-bold">The Program:</span> {{ $teacher['program'] }}</p>
                    <p class="lead"><span class="fw-bold">Certification:</span> {{ $teacher['qualification'] }}</p>
                    <p class="lead"><span class="fw-bold">Method of Learning:</span> {{ $teacher['method'] }}</p>
                    <p class="lead"><span class="fw-bold">Schedule:</span> {{ $teacher['schedule'] }}</p>
                    <p class="lead"><span class="fw-bold">Supplies:</span> {{ $teacher['supplies'] }}</p>

                    <a href="{{ route('academy') }}" class="btn btn-outline-dark fs-5">Torna indietro</a>
                </div>
                <!-- image -->
                <div class="col-12 col-md-6">
                    <img src="{{ $teacher['image'] }}" alt="img" class="img-fluid">
                </div>
            </div>
        </div>

    </div>
    <div class="col-12 text-center pt-md-0 pt-5" data-aos="fade-down-right">
        <h5>Next course starting on <em>September 2025</em></h5>
    </div>
    <x-form />
</x-layout>