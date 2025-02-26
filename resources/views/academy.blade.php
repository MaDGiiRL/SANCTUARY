<x-layout  title="Academy">
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
                <div class="col-12 text-center pb-5" data-aos="fade-down-right">
                    <h5>Next course starting on <em>September 2025</em></h5>
                </div>
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

        <!-- teachers -->
        <div class="container pt-5">
            <div class="row">
                <div class="col-12 pt-5 " data-aos="fade-up-right">
                    <h5>Our Specialist <img src="/media/a1.png" width="70"></h5>
                </div>
                <div class="col-12 col-md-3 pb-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="card profile-card-1">
                        <img src="/media/tec1.png" alt="profile-image" class="profile" />
                        <div class="card-content">
                            <h2>Sophia Smith<small>Make-up Artist</small></h3>
                                <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 pb-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="card profile-card-1">
                        <img src="/media/tec2.png" alt="profile-image" class="profile" />
                        <div class="card-content">
                            <h2>Olivia Johnson<small>Skin Care Specialist</small></h2>
                            <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 pb-5" data-aos="fade-up" data-aos-delay="300">
                    <div class="card profile-card-1">
                        <img src="/media/tec3.png" alt="profile-image" class="profile" />
                        <div class="card-content">
                            <h2>Emma Williams<small>Onicothecnician</small></h2>
                            <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 pb-5" data-aos="fade-up" data-aos-delay="400">
                    <div class="card profile-card-1">
                        <img src="/media/tec4.png" alt="profile-image" class="profile" />
                        <div class="card-content">
                            <h2>Ava Brown<small>Hairdresser</small></h2>
                            <div class="icon-block"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"> <i class="fa fa-twitter"></i></a><a href="#"> <i class="fa fa-google-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-layout>