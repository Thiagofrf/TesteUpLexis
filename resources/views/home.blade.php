@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mt-5">
            <h1 class="dashboard-text">Seja bem-vindo, {{ Auth::user()->name }}! O que deseja fazer?</h1>
        </div>
        <div class="col-md-6 mt-5">
            <a class="cardHover" href="{{ url('/search') }}">
                <div class="card shadow-lg cardBorderSearch">
                    <div class="card-body p-5">
                        <h5 class="card-title text-center searchTitle">Pesquisar veículos</h5>
                        <p class="text-center searchIcon"><i class="fas fa-search"></i></p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6 mt-5">
            <a class="cardHover" href="{{ url('/myvehicles') }}">
                <div class="card shadow-lg cardBorderVehicle">
                    <div class="card-body p-5">
                        <h5 class="card-title text-center myVehicleTitle">Ver meus veículos</h5>
                        <p class="text-center carIcon"><i class="fas fa-car"></i></p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
