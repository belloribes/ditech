@extends('layouts.app')

@section('content')

	<div class="row">

		<div class=" col s12">
			<div class="card">
				<div class="card-content">
					<span class="card-title activator grey-text text-darken-3">#11 Sala 134   <a class="right" href="#modal1"><i class="material-icons right">edit</i></a></span>
					<div class="row grey-text text-darken-3" style="margin-bottom: 0;">
						<div class="col s6"><i class="material-icons left grey-text text-darken-2">apps</i> 1º andar</div>
						<div class="col s6"><i class="material-icons left grey-text text-darken-2">airline_seat_recline_normal</i> 60 lugares</div>	
					</div>
				</div>
			</div>
		</div>

		<!-- MODAL -->
		<div id="modal1" class="modal modal-fixed-footer">
			<div class="modal-content">
				<div class="row">
					<div class="col s12"><h4>Modal Header</h4></div>

					<div class="col s12">
						<ul class="tabs">
							<li class="tab"><a class="active" href="#test1">Dados</a></li>
							<li class="tab"><a href="#test2">Horários</a></li>
						</ul>
					</div>
					<div id="test1" class="col s12">
						<form>
							<div class="input-field col m6 s12">
								<input placeholder="Placeholder" id="first_name" type="text" class="validate">
								<label for="first_name">Nome da sala</label>
							</div>

							<div class="input-field col m6 s12">
								<select>
									<option value="" disabled selected>Selecione o local</option>
									<option value="1">Térreo</option>
									<option value="2">1º andar</option>
									<option value="3">2º andar</option>
								</select>
								<label>Local</label>
							</div>

							<div class="input-field col s12">
								<textarea id="textarea1" class="materialize-textarea"></textarea>
								<label for="textarea1">Descrição</label>
							</div>

							<div class="input-field col m4 s6">
								<input placeholder="Placeholder" id="lugares" name="lugares" type="number" class="validate">
								<label for="password">lugares</label>
							</div>
						</form>
					</div>
					<div id="test2" class="col s12">Test 2</div>
				</div>

			</div>
			<div class="modal-footer">
				<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
			</div>
		</div>
		{{-- /MODAL --}}

		{{-- LISTA REGISTROS --}}
		<div class="col s12">
			<ul id="issues-collection" class="collection">
				<li class="collection-item avatar">
					<i class="material-icons circle red accent-2">room</i>
					<span class="collection-header"><h5>Salas</h5></span>
					<p>13 registros</p>
					<a href="#" class="secondary-content">+ Novo cadastro</a>
				</li>
				<a href="#modal1" class="collection-item">
					<div class="row grey-text text-darken-3" style="margin-bottom: 0;">
						<div class="col s12">
							<p><strong>#102</strong> Sala 105</p>
						</div>
						<div class="col s6 grey-text text-darken-1"><i class="material-icons left grey-text text-darken-1">apps</i> 1º andar</div>
						<div class="col s6 grey-text text-darken-1"><i class="material-icons left grey-text text-darken-1">airline_seat_recline_normal</i> 60 lugares</div>	
					</div>
				</a>
				<a href="#!" class="collection-item">
					<div class="row grey-text text-darken-3" style="margin-bottom: 0;">
						<div class="col s12">
							<p><strong>#102</strong> Sala 105</p>
						</div>
						<div class="col s6 grey-text text-darken-1"><i class="material-icons left grey-text text-darken-1">apps</i> 1º andar</div>
						<div class="col s6 grey-text text-darken-1"><i class="material-icons left grey-text text-darken-1">airline_seat_recline_normal</i> 60 lugares</div>	
					</div>
				</a>
				<a href="#!" class="collection-item">
					<div class="row grey-text text-darken-3" style="margin-bottom: 0;">
						<div class="col s12">
							<p><strong>#102</strong> Sala 105</p>
						</div>
						<div class="col s6 grey-text text-darken-1"><i class="material-icons left grey-text text-darken-1">apps</i> 1º andar</div>
						<div class="col s6 grey-text text-darken-1"><i class="material-icons left grey-text text-darken-1">airline_seat_recline_normal</i> 60 lugares</div>	
					</div>
				</a>
				<a href="#!" class="collection-item">
					<div class="row grey-text text-darken-3" style="margin-bottom: 0;">
						<div class="col s12">
							<p><strong>#102</strong> Sala 105</p>
						</div>
						<div class="col s6 grey-text text-darken-1"><i class="material-icons left grey-text text-darken-1">apps</i> 1º andar</div>
						<div class="col s6 grey-text text-darken-1"><i class="material-icons left grey-text text-darken-1">airline_seat_recline_normal</i> 60 lugares</div>	
					</div>
				</a>
				<a href="#!" class="collection-item">
					<div class="row grey-text text-darken-3" style="margin-bottom: 0;">
						<div class="col s12">
							<p><strong>#102</strong> Sala 105</p>
						</div>
						<div class="col s6 grey-text text-darken-1"><i class="material-icons left grey-text text-darken-1">apps</i> 1º andar</div>
						<div class="col s6 grey-text text-darken-1"><i class="material-icons left grey-text text-darken-1">airline_seat_recline_normal</i> 60 lugares</div>	
					</div>
				</a>
				<a href="#!" class="collection-item">
					<div class="row grey-text text-darken-3" style="margin-bottom: 0;">
						<div class="col s12">
							<p><strong>#102</strong> Sala 105</p>
						</div>
						<div class="col s6 grey-text text-darken-1"><i class="material-icons left grey-text text-darken-1">apps</i> 1º andar</div>
						<div class="col s6 grey-text text-darken-1"><i class="material-icons left grey-text text-darken-1">airline_seat_recline_normal</i> 60 lugares</div>	
					</div>
				</a>
				<a href="#!" class="collection-item">
					<div class="row grey-text text-darken-3" style="margin-bottom: 0;">
						<div class="col s12">
							<p><strong>#102</strong> Sala 105</p>
						</div>
						<div class="col s6 grey-text text-darken-1"><i class="material-icons left grey-text text-darken-1">apps</i> 1º andar</div>
						<div class="col s6 grey-text text-darken-1"><i class="material-icons left grey-text text-darken-1">airline_seat_recline_normal</i> 60 lugares</div>	
					</div>
				</a>
				<a href="#!" class="collection-item">
					<div class="row grey-text text-darken-3" style="margin-bottom: 0;">
						<div class="col s12">
							<p><strong>#102</strong> Sala 105</p>
						</div>
						<div class="col s6 grey-text text-darken-1"><i class="material-icons left grey-text text-darken-1">apps</i> 1º andar</div>
						<div class="col s6 grey-text text-darken-1"><i class="material-icons left grey-text text-darken-1">airline_seat_recline_normal</i> 60 lugares</div>	
					</div>
				</a>
				<a href="#!" class="collection-item">
					<div class="row grey-text text-darken-3" style="margin-bottom: 0;">
						<div class="col s12">
							<p><strong>#102</strong> Sala 105</p>
						</div>
						<div class="col s6 grey-text text-darken-1"><i class="material-icons left grey-text text-darken-1">apps</i> 1º andar</div>
						<div class="col s6 grey-text text-darken-1"><i class="material-icons left grey-text text-darken-1">airline_seat_recline_normal</i> 60 lugares</div>	
					</div>
				</a>
			</ul>
		</div>

	</div>
	



@endsection