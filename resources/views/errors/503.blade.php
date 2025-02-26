<x-layout title="Error 503">

    <div id="notfound" class="error-section">
        <div class="notfound">
            <div class="notfound-error">
                <h1>503 Service Unavailable</h1>
            </div>
            <h2>The server is temporarily unavailable (maintenance or overload).</h2>
            <form class="notfound-search">
                <input type="text" placeholder="Search...">
                <button type="button" class="btn btn-dark">Search</button>
            </form>
            <a href="{{route('home')}}">Return to Homepage</a>
        </div>
    </div>

</x-layout>