@extends('layouts.app')

@section('content')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!------ Include the above in your HEAD tag ---------->

<div class="container">
	<div class="row">
		<div class=" col-md-12 col-lg-12">
    	 <div class="well profile">
            <div class="col-sm-12">
			
                <div class="col-xs-12 col-sm-4 text-center">
                    <figure>
                        <img src="https://www.searchpng.com/wp-content/uploads/2019/02/Men-Profile-Image-715x657.png" alt="" class="img-circle img-responsive">
                        
                    </figure>
                </div>
                <div class="col-xs-12 col-sm-8">
                    <h2>{{$professor[0]->nome}}</h2>
                    <p><strong>About: </strong> Web Designer / UI. </p>
                    <p><strong>Hobbies: </strong> {{$professor[0]->habilidade}} </p>                    
					<p><strong>Telefone: </strong>{{$professor[0]->telefone}} </p>
					<p><strong>Endereço: </strong>{{$professor[0]->endereco}}</p>
                </div> 
            </div>            
            <div class="col-xs-12 divider text-center">
                <div class="col-xs-12 col-sm-6 emphasis">
                    <h2><strong> 20 </strong></h2>                    
                    <p><small>Convites</small></p>
					<a  href="{{route('aluno.formConvite', $professor[0]->id)}}">
                    <button  class="btn btn-success btn-block"><span class="fa fa-plus-circle"></span> Enviar convite </button>
					</a>
                </div>
                <div class="col-xs-12 col-sm-6 emphasis">
                    <h2><strong>12</strong></h2>                    
                    <p><small>convites</small></p>
                    <button class="btn btn-info btn-block"><span class="fa fa-user"></span> Dar nota</button>
                </div>			
            </div>
    	 </div>                 
		</div>
	</div>
</div>

<style>
@import url(http://fonts.googleapis.com/css?family=Lato:400,700);
body
{
    font-family: 'Lato', 'sans-serif';
    }
.profile 
{
    min-height: 355px;
    display: inline-block;
    }
figcaption.ratings
{
    margin-top:20px;
    }
figcaption.ratings a
{
    color:#f1c40f;
    font-size:11px;
    }
figcaption.ratings a:hover
{
    color:#f39c12;
    text-decoration:none;
    }
.divider 
{
    border-top:1px solid rgba(0,0,0,0.1);
    }
.emphasis 
{
    border-top: 4px solid transparent;
    }
.emphasis:hover 
{
    border-top: 4px solid #1abc9c;
    }
.emphasis h2
{
    margin-bottom:0;
    }
span.tags 
{
    background: #1abc9c;
    border-radius: 2px;
    color: #f5f5f5;
    font-weight: bold;
    padding: 2px 4px;
    }

</style>



@endsection