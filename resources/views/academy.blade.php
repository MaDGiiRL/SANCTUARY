<x-layout>

<div class="container">
    <div class="row">
        @foreach ($teachers as $teacher)
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">{{ $teacher['subject'] }}</h5>
                    <p class="card-text">{{ $teacher['description'] }}</p>
                    <p class="card-text"><strong>Orari:</strong> {{ $teacher['schedule'] }}</p>
                    <p class="card-text"><strong>Attrezzature:</strong> {{ $teacher['supplies'] }}</p>
                    <a href="{{ route('academy.show', $teacher['id']) }}" class="btn btn-primary">Dettagli</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

</x-layout>