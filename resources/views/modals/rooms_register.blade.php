<!-- MODAL -->
<div id="modal{{ $room->id }}" class="modal modal-fixed-footer">
	<div class="modal-content" style="padding: 0; background: #fff;">
		<div class="row">
			<div class="col s12 red accent-2 white-text" style="padding-top: 20px"><h4>#{{ $room->id }} {{ $room->name }}</h4></div>
			<div class="col s12 red accent-2">
				<ul class="tabs red accent-2 tabs-fixed-width">
					<li class="tab"><a href="#data{{ $room->id }}" class="white-text active">Dados</a></li>
					<li class="tab"><a href="#schedule{{ $room->id }}" class="white-text">Horários</a></li>
				</ul>
			</div>

			{{-- Dados --}}
			<div id="data{{ $room->id }}" class="col s12 active">
				<div class="row" style="margin-top: 20px;">
					<form id="form{{ $room->id }}">
						<input type="hidden" name="id" value="{{ $room->id or 0 }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="input-field col m6 s12">
							<input type="text" name="name" value="{{ $room->name or null }}" class="validate">
							<label>Nome da sala</label>
						</div>

						<div class="input-field col m6 s12">
							<select name="place">
								<option disabled selected>Selecione o local</option>
								@foreach($places as $place)
									<option value="{{ $place->id }}" {{ ($place->id == $room->place_id) ? "selected" : null }}>{{ $place->name }}</option>
								@endforeach
							</select>
							<label>Local</label>
						</div>

						<div class="input-field col s12">
							<textarea name="description" class="materialize-textarea">{{ $room->description or null }}</textarea>
							<label>Descrição</label>
						</div>

						<div class="input-field col m4 s6">
							<input name="chairs" type="text" value="{{ $room->chairs or null }}" class="validate">
							<label>lugares</label>
						</div>
					</form>
				</div>
			</div>

			{{-- Horários --}}
			<div id="schedule{{ $room->id }}" class="col s12">
				<div class="row" style="min-height: 300px; margin-top: 20px;">
					<div class="col s12">
						<ul class="collapsible z-depth-0" data-collapsible="accordion">

							@foreach($weekdays as $day)

								<li>
									<div class="collapsible-header"><i class="material-icons">today</i>{{ $day->name }}</div>
									<div class="collapsible-body" style="padding: 10px;">
										<table>
											<tbody>
												@foreach($schedules as $schedule)

													<tr><td style="padding: 15px 0; border-bottom: solid 1px #ededed" class="grey-text text-darken-1";">{{ $schedule->name }}</td>
														<td style="padding: 15px 0; border-bottom: solid 1px #ededed; text-align: right;"><div class="switch">
															<label><input type="checkbox" {{ $room->times()->OfRoom($room->id, $day->id, $schedule->id)->count() == 1 ? 'checked' : null }}><span class="lever "></span></label></div>
														</td>
													</tr>

												@endforeach
											</tbody>
										</table>
									</div>
								</li>

							@endforeach
						</ul>
					</div>
				</div>
			</div>

		</div>
	</div>
	<div class="modal-footer">
		<a href="javascript:void(0);" class="waves-effect waves-red btn-flat btn-submit" onclick="updateRoom({{ $room->id }});"><i class="material-icons right">done</i>salvar</a>
	</div>
</div>
{{-- /MODAL --}}

