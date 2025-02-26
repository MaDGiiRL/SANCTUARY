<x-layout title="Error 409">

    <div id="notfound" class="error-section">
        <div class="notfound">
            <div class="notfound-error">
                <h1>409 Conflict</h1>
            </div>
            <h2>Conflict in the request, often due to duplicate data or concurrent updates.</h2>
            <form class="notfound-search">
                <input type="text" placeholder="Search...">
                <button type="button" class="btn btn-dark">Search</button>
            </form>
            <a href="{{route('home')}}">Return to Homepage</a>
        </div>
    </div>

</x-layout>