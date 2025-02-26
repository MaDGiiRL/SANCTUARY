<x-layout title="Error 400">

    <div id="notfound" class="error-section">
        <div class="notfound">
            <div class="notfound-error">
                <h1>400 Bad Request</h1>
            </div>
            <h2>The client's request is incorrect or malformed.</h2>
            <form class="notfound-search">
                <input type="text" placeholder="Search...">
                <button type="button" class="btn btn-dark">Search</button>
            </form>
            <a href="{{route('home')}}">Return to Homepage</a>
        </div>
    </div>

</x-layout>