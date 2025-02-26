<x-layout title="Academy">
    <div class="bg-academy">
        <!-- header -->
        <div class="container pt-5">
            <div class="row pt-5">
                <div class="col-12 pt-5" data-aos="fade-up-right">
                    <h5><img src="/media/a2.png" width="70"> Explore Our Academy</h5>
                </div>
                <div class="col-12 col-md-7" data-aos="fade-up-left">
                    <p class="lead text-end fs-3">At Sanctuary Spa, we believe in the power of knowledge and personal growth. Our diverse range of courses is designed to enhance your well-being and deepen your understanding of beauty and relaxation techniques. Whether you're a beginner looking to explore new skills or a professional seeking to expand your expertise, we have the perfect course for you. Join us on this journey to wellness and empowerment, and discover how you can elevate your personal and professional life.</p>

                </div>
                <div class="col-12 col-md-3 abstract-academy d-md-block d-none" data-aos="fade-left">
                    <img src="/media/absract4.png" width="500">
                </div>
                <x-next />
            </div>
        </div>

        <!-- card classes generate dinamicamente -->
        <div class="container pt-5">
            <div class="col-12">
                <div class="row">
                    @foreach ($teachers as $teacher)
                    <div class="col-12 col-md-6">
                        <div class="card mb-5 border-0" data-aos="{{$loop->first ? 'zoom-in' : 'zoom-in-up'}}">
                            <h6 class="card-header"><i class="fa-solid fa-heart"></i> Class {{ $teacher['id'] }}</h6>
                            <div class="card-body">
                                <h5 class="card-title fs-1">{{ $teacher['subject'] }}</h5>
                                <p class="card-text fs-5">{{ $teacher['class-desc'] }}</p>
                                <a href="{{ route('teacher-show', $teacher['id']) }}" class="btn btn-dark fs-5">Dettagli</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <x-staff />

        <x-slider />

    </div>

</x-layout>