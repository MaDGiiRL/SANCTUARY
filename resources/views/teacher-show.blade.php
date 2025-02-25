<x-layout>
    <div class="bg-academy">
        <div class="container pt-5">
            <div class="row pt-5">
                <div class="col-12">
                    <h3>{{ $teacher['subject'] }} - Dettagli</h3>
                    <p><strong>Nome:</strong> {{ $teacher['name'] }} {{ $teacher['surname'] }}</p>
                    <p><strong>Descrizione:</strong> {{ $teacher['description'] }}</p>
                    <p><strong>Orari:</strong> {{ $teacher['schedule'] }}</p>
                    <p><strong>Attrezzature:</strong> {{ $teacher['supplies'] }}</p>
                    <a href="{{ route('academy') }}" class="btn btn-secondary">Torna indietro</a>
                </div>
            </div>

        </div>


    </div>

    <!-- form -->
    <x-form />

    <!-- footer -->
    <x-footer />

</x-layout>