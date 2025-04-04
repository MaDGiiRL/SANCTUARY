   <!-- Navbar -->
   <nav class="navbar navbar-expand-lg navbar-light bg-trasparent fixed-top pb-5" id="mainNav">
       <div class="container">
           <a class="navbar-brand" href="{{route('home')}}">Sanctuary SPA</a>
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
               <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarNav">
               <ul class="navbar-nav ms-auto">
                   <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>
                   <li class="nav-item"><a class="nav-link" href="{{route('academy')}}">Academy</a></li>
                   <li class="nav-item"><a class="nav-link" href="{{route('services')}}">Services</a></li>
                   <li class="nav-item"><a class="nav-link" href="{{route('booking')}}">Book Now</a></li>
               </ul>
           </div>
       </div>
   </nav>

   <!-- {{Route::currentRouteName() == 'book-now' ? 'active' : ''}} -->