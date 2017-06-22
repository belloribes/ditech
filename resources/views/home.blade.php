@extends('layouts.app')

@section('content')
	{{-- <div class="container"> --}}


	    <div class="row">
	    	

			<div class="col s6 m6 l6 xl3">
				<div class="card">
					<div class="card-content">
						<span class="card-title right"><i class="material-icons" style="font-size: 2em;">place</i></span>
						<p style="font-size: 1.6em;">34</p>
						<small>Salas</small>
					</div>
				</div>
			</div>

			<div class="col s6 m6 l6 xl3">
				<div class="card">
					<div class="card-content">
						<span class="card-title right"><i class="material-icons" style="font-size: 2em;">apps</i></span>
						<p style="font-size: 1.6em;">23</p>
						<small>Locais</small>
					</div>
				</div>		
			</div>

			<div class="col s6 m6 l6 xl3">
				<div class="card">
					<div class="card-content">
						<span class="card-title right"><i class="material-icons" style="font-size: 2em;">perm_identity</i></span>
						<p style="font-size: 1.6em;">40</p>
						<small>Usuários</small>
					</div>
				</div>
			</div>
	            
	        <div class="col s6 m6 l6 xl3">
				<div class="card">
					<div class="card-content">
						<span class="card-title right"><i class="material-icons" style="font-size: 2em;">person_pin_circle</i></span>
						<p style="font-size: 1.6em;">354</p>
						<small>Reservas</small>
					</div>
				</div>
			</div>


			{{-- <div class="container">  --}}

				<ul id="tabs-swipe-demo" class="tabs">
					<li class="tab col s3"><a class="active" href="#test-swipe-1">RESERVAS</a></li>
					<li class="tab col s3"><a href="#test-swipe-2">SALAS</a></li>
					{{-- <li class="tab col s3"><a href="#test-swipe-3">Test 3</a></li> --}}
				</ul>
				<div id="test-swipe-1" class="col s12 white">
					
					<table class="responsive-table">
				        <thead>
				          <tr>
				              <th>SALA</th>
				              <th>DIA</th>
				              <th>HORÁRIO</th>
				              <th>USUÁRIO</th>
				          </tr>
				        </thead>

				        <tbody>
				          <tr>
				            <td>Sala 1</td>
				            <td>Quinta</td>
				            <td>14pm</td>
				            <td>Gabriel</td>
				          </tr>
				          <tr>
				            <td>Sala 2</td>
				            <td>Sexta</td>
				            <td>16pm</td>
				            <td>Gabriel</td>
				          </tr>
				          <tr>
				            <td>Sala 3</td>
				            <td>Sexta</td>
				            <td>18pm</td>
				            <td>Gabriel</td>
				          </tr>
				        </tbody>
				      </table>

				</div>
				<div id="test-swipe-2" class="col s12 red">Test 2</div>
				{{-- <div id="test-swipe-3" class="col s12 green">Test 3</div> --}}

			{{-- </div> --}}

	    </div>
	    
	{{-- </div> --}}
@endsection
