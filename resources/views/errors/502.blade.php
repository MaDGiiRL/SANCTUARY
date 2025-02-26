<x-layout title="Error 502">

    <div id="notfound" class="error-section">
        <div class="notfound">
            <div class="notfound-error">
                <h1>502 Bad Gateway</h1>
            </div>
            <h2>The server received an invalid response from another server.</h2>
            <form class="notfound-search">
                <input type="text" placeholder="Search...">
                <button type="button" class="btn btn-dark">Search</button>
            </form>
            <a href="{{route('home')}}">Return to Homepage</a>
        </div>
    </div>

</x-layout>