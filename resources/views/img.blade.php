@extends('layout.nav')
@section('tittle','Imagenes')
    @section('content')
        <div class="mt-4 container" id="hobies">
                <h3>Sus Hobies son</h3>
                <div id="carouselExampleFade" class="carousel slide carousel-fade">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('img/futbol.jpg')}}" class="d-block w-100" alt="futbol">
                            <div class="carousel-caption d-none d-md-block">
                                <h2 class="text-white">Futbol</h2>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('img/volley.jpg')}}" class="d-block w-100" alt="volleyball">
                            <div class="carousel-caption d-none d-md-block">
                                <h2 class="text-dark">VolleyBall</h2>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('img/prgramar.jpg')}}" class="d-block w-100" alt="programar">
                            <div class="carousel-caption d-none d-md-block">
                                <h2 class="text-white">Programacion</h2>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
    @endsection

