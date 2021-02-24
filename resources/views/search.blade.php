@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 mt-5">
                <h1 class="dashboard-text">{{ Auth::user()->name }}, faça uma busca por um termo que buscaremos veículos para você.</h1>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-12">
                <form action="{{ url('/product') }}" method="post">
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <input type="text" class="form-control" id="product" name="product">
                        <div id="emailHelp" class="form-text">Busque por termos como marca, combustível, cor, entre outros.</div>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Buscar</button>
                </form>
            </div>
        </div>
    </div>

@endsection
    
        
