<x-layout title="Teacher">
    <div class="pb-5 mb-5">
        <div class="container-fluid pt-5">
            <div class="row pt-5 mt-5 ps-5 pe-5">
                <div class="col-12 col-md-6 p-5 scroll">
                    <h5 class="text-end"></i> {{ $teacher['subject'] }}</h5>
                    <p class="lead fs-3 text-end"><span class="fw-bold">Teacher:</span> {{ $teacher['name'] }} {{ $teacher['surname'] }}</p>
                    <p class="lead"><i class="fa-solid fa-heart"></i> <span class="fw-bold">The Course:</span> {{ $teacher['description'] }}</p>
                    <p class="lead"><i class="fa-solid fa-heart"></i> <span class="fw-bold">The Program:</span> {{ $teacher['program'] }}</p>
                    <p class="lead"><i class="fa-solid fa-heart"></i> <span class="fw-bold">Certification:</span> {{ $teacher['qualification'] }}</p>
                    <p class="lead"><i class="fa-solid fa-heart"></i> <span class="fw-bold">Method of Learning:</span> {{ $teacher['method'] }}</p>
                    <p class="lead"><i class="fa-solid fa-heart"></i> <span class="fw-bold">Schedule:</span> {{ $teacher['schedule'] }}</p>
                    <p class="lead"><i class="fa-solid fa-heart"></i> <span class="fw-bold">Supplies:</span> {{ $teacher['supplies'] }}</p>

                    <a href="{{ route('academy') }}" class="btn btn-outline-dark fs-5">Torna indietro</a>
                </div>
                <!-- image -->
                <div class="col-12 col-md-6 img-fluid">
                    <img src="{{ $teacher['image'] }}" alt="img" class="img-fluid">
                </div>
            </div>
        </div>
        <!-- slider -->
        <x-slider />
    </div>
    <x-next />
    <!-- form -->
    <x-form />
</x-layout>