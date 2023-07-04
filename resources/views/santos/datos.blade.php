@extends('layouts.app')

@section('content')
    <div id="container">
        <div class="datos_personales">

            <div class="item-1 datos">
                <label for="">Nombre</label>
                <input type="text" value="santos.first_name">
            </div>
            <div class="item-2 datos">
                <label for="">Apellido</label>
                <input type="text" value="santos.last_name">
            </div>
            <div class="item-3 datos">
                <label for="">Nacimiento</label>
                <input type="text" value="santos.nacimiento">
            </div>
            <div class="item-4 datos">
                <label for="">Pais</label>
                <input type="text" value="santos.country">
            </div>
            <div class="item-5 datos">
                <label for="">Capital</label>
                <input type="text" value="santos.capital">
            </div>
            <div class="item-6 datos">
                <label for="">Localidad</label>
                <input type="text" value="santos.localidad">
            </div>
            <div class="item-7 datos">
                <label for="">Longitud</label>
                <input type="text" value="santos.logintud">
            </div>
            <div class="item-8 datos">
                <label for="">Latitud</label>
                <input type="text" value="santos.latitud">
            </div>
        </div>
    </div>
@endsection
