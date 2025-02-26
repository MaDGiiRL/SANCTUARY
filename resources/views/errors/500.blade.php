<x-layout title="Error 500">

    <div id="notfound" class="error-section">
        <div class="notfound">
            <div class="notfound-error">
                <h1>500 Internal Server Error</h1>
            </div>
            <h2>Generic server error, often due to a bug in the code.</h2>
            <form class="notfound-search">
                <input type="text" placeholder="Search...">
                <button type="button" class="btn btn-dark">Search</button>
            </form>
            <a href="{{route('home')}}">Return to Homepage</a>
        </div>
    </div>

</x-layout>