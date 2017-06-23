@extends('layouts.app')

@section('content')

	<div class="row">

		{{-- <div class=" col s12">
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
 --}}
		

		{{-- LISTA REGISTROS --}}
		<div class="col s12">
			<ul id="issues-collection" class="collection">
				<li class="collection-item avatar">
					<i class="material-icons circle red accent-2">room</i>
					<span class="collection-header"><h5>Salas</h5></span>
					<p>{{ $rooms->count() }} registros</p>
					<a href="#" class="secondary-content">+ Novo cadastro</a>
				</li>

				@foreach($rooms as $room)

					@include('modals.rooms_register', ['room' => $room])

					<a href="#modal{{ $room->id }}" class="collection-item">
						<div class="row grey-text text-darken-3" style="margin-bottom: 0;">
							<div class="col s12">
								<p><strong>#{{ $room->id }}</strong> {{ $room->name }}</p>
							</div>
							<div class="col s6 grey-text text-darken-1"><i class="material-icons left grey-text text-darken-1">apps</i> {{ $room->place->name }}</div>
							<div class="col s6 grey-text text-darken-1"><i class="material-icons left grey-text text-darken-1">airline_seat_recline_normal</i> {{ $room->chairs }} lugares</div>	
						</div>
					</a>

				@endforeach

			</ul>
		</div>

	</div>
	
@endsection

@push('scripts')
<script type="text/javascript">
	
	function updateRoom(id) {
			
		var $form 		= $('#form'+id);
		var name  		= $('input[name="name"]', $form).val()
		var place 		= $('select[name="place"]', $form).val()
		var description = $('textarea[name="name"]', $form).val()
		var chairs 		= $('select[name="chairs"]', $form).val()

		var data = $form.serializeArray();

		// console.log(name);
		// console.log(place);
		// console.log(description);
		// console.log(chairs);

		console.log(data);

		$.ajax({
			url: '{{ route('room_register') }}',
			type: 'post',
			data: data,
			dataType: 'json'
		})
		.done(function( response ) {

			console.log(response);

		})
		.fail(function() {

			console.log('falhou');

		});

	}

</script>
@endpush