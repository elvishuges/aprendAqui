@extends('layouts.app')

@section('content')
<section class="container mt-4 mb-4">
<div class="container">
	<div class="row mb-1">


	@forelse ($professores as $professor)
		<div class="col-md-6">
			<div class="d-flex flex-row border rounded">
	  			<div class="p-0 w-25">
	  			    <img src="https://www.searchpng.com/wp-content/uploads/2019/02/Men-Profile-Image-715x657.png" class="img-thumbnail border-0" />
	  				
	  			</div>
	  			<div class="pl-3 pt-2 pr-2 pb-2 w-75 border-left">
	  					<h4 class="text-primary">{{$professor->nome}}</h4>
	  					<h5 class="text-info">email:{{$professor->email}}</h5>
	  					<ul class="m-0 float-left" style="list-style: none; margin:0; padding: 0">
	  						<li><i class="fab fa-facebook-square"></i> Facebook</li>
	  						<li><i class="fab fa-twitter-square"></i> Instagram</li>
	  					</ul>
						<p class="text-right m-0"><a  href="{{route('aluno.perfilProfessor', $professor->id)}}"  class="btn btn-primary"><i class="far fa-user"></i> Visualizar perfil</a></p>
				</div>
			</div>
		</div>
	@empty
			<p>Não há professores cadastrados</p>
	@endforelse	
		
	</div>

</div>
</section>
@endsection