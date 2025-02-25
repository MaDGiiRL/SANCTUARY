<x-layout>
    <div class="container">
        <h1>{{ $teacher['subject'] }} - Dettagli</h1>
        <p><strong>Nome:</strong> {{ $teacher['name'] }} {{ $teacher['surname'] }}</p>
        <p><strong>Età:</strong> {{ $teacher['age'] }}</p>
        <p><strong>Descrizione:</strong> {{ $teacher['description'] }}</p>
        <p><strong>Orari:</strong> {{ $teacher['schedule'] }}</p>
        <p><strong>Attrezzature:</strong> {{ $teacher['supplies'] }}</p>
        <a href="{{ route('academy.index') }}" class="btn btn-secondary">Torna indietro</a>
    </div>
</x-layout>