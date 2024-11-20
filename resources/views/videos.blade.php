@extends('layout.nav')
@section('tittle','Videos')
@section('content')
    <div class="container mb-4">
        <h2 class="mt-2 p-2">Amor por el futbol</h2>
        <div class="ratio ratio-16x9 mt-2">
            <video controls src="{{asset('video/lastgame.mp4') }} " class="object-fit-contain" autoplay></video>
        </div>
    </div>
@endsection