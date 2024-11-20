@extends('layout.main')
@section('nav')
<nav class="navbar navbar-expand navbar-light bg-body-tertiary">
    <div class="nav navbar-nav mx-2">
    <button onclick="cambiarTema()" class=" mx-2 btn rounded-fill">
        <i id="dl-icon" class="bi bi-moon-fill"></i>
    </button>
        <a class="nav-item nav-link active mx-4" href="/" aria-current="page"
            >Home <span class="visually-hidden">(current)</span></a
        >
        <a class="nav-item nav-link active mx-4" href="{{route('imagenes')}}" aria-current="page"
            >Imagenes <span class="visually-hidden">(current)</span></a
        >
        <a class="nav-item nav-link active mx-4" href="{{route('videos')}}" aria-current="page"
            >Video <span class="visually-hidden">(current)</span></a
        >
        <a class="nav-item nav-link active mx-4" href="{{route('developer')}}" aria-current="page"
            >Developer <span class="visually-hidden">(current)</span></a
        >
    </div>
</nav>

@endsection
@section('foot')
<div class="container-fluid mt-4">
    <div class="text-start">
        <a href="index.html" class="link-opacity-75-hover">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" width="30"
                viewBox="0 0 640 512">
                <path fill="#62c91d"
                    d="M392.8 1.2c-17-4.9-34.7 5-39.6 22l-128 448c-4.9 17 5 34.7 22 39.6s34.7-5 39.6-22l128-448c4.9-17-5-34.7-22-39.6zm80.6 120.1c-12.5 12.5-12.5 32.8 0 45.3L562.7 256l-89.4 89.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l112-112c12.5-12.5 12.5-32.8 0-45.3l-112-112c-12.5-12.5-32.8-12.5-45.3 0zm-306.7 0c-12.5-12.5-32.8-12.5-45.3 0l-112 112c-12.5 12.5-12.5 32.8 0 45.3l112 112c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256l89.4-89.4c12.5-12.5 12.5-32.8 0-45.3z" />
            </svg>
            <span class="lead">Dev. David Mamani</span>
        </a>
        <ul class="list-unstyled">
            <li>
                <a href="" class="link-opacity-50-hover">72782719</a>
            </li>
            <li>
                <a href="#" class="link-opacity-50-hover">david1997mb@gmail.com</a>
            </li>
        </ul>
    </div>
    <hr class="border border-primary border-3 opacity-75" />
    <div class="text-center">
        <span class="text-center">© 2024 <a href="https://flowbite.com/" class="hover:underline">David™</a>.
            Derechos Reservados.</span>
    </div>
</div>
@endsection