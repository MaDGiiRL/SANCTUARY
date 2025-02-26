<x-layout title="Book Now">

    <x-form />

    <!-- messaggio invio form -->
    @if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <!-- errore invio form -->
    @if (session('emailError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('emailError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

</x-layout>