@extends('layouts.app')

@section('content')

@if(Auth::guard('professor')->check())
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Professor Logado, Aguardando convites de alunos para ensinar !!!</div>
            </div>
        </div>
    </div>
</div>
@else
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Logue para acessar as informações dessa página</div>
            </div>
        </div>
    </div>
</div>

@endif

@endsection