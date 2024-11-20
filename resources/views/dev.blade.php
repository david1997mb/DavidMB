@extends('layout.nav')
@section('tittle','Desarrollador')
    @section('content')
    <div data-bs-spy="scroll" data-bs-target="#BarraNavegacion" data-bs-root-margin="0px 0px -40%"
            data-bs-smooth-scroll="true" class="container mt-4 scrollspy-example bg-body-tertiary p-3 rounded-2"
            tabindex="0"><br><br>
            <div class="p-4" id="datos">
                <h2 class="h3">PROGRAMADOR: </h2>
                <div class="row">
                    <div class="col-10">
                        <dl class="row mt-4">
                            <dd class="mt-4 col-sm-9 h2">David Brandon</dd>
                            <dd class=" col-sm-9 h2">Mamani Barrientos</dd>
                            <dd class="mt-2 col-sm-9 h4">26 Años</dd>
                            <dd class="mt-2 col-sm-9 h4">Soltero</dd>
                            <dd class="mt-2 col-sm-9 h4">Quillacolleño</dd>
                        </dl>
                    </div>
                    <div class="col-2">
                        <img class="rounded float-end " src="{{asset('img/david.png')}}" alt="Imagen Personal" width="200">
                    </div>
                </div>
            </div>

    @endsection
