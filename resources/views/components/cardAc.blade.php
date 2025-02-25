<div class="card mb-5 border-0" data-aos="{{$loop->first ? 'zoom-in' : 'zoom-in-up'}}">
    <h6 class="card-header"><i class="fa-solid fa-heart"></i> Corso {{ $teacher['id'] }}</h6>
    <div class="card-body">
        <h5 class="card-title fs-1">{{$subject}</h5>
        <p class="card-text fs-5">{{ $teacher['description'] }}</p>
        <a href="{{ route('academy.show', $teacher['id']) }}" class="btn btn-dark fs-5">Dettagli</a>
    </div>
</div>