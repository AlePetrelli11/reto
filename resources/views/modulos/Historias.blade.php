
<table class="table table-bordered table-hover table-striped">
					
	<thead>
		<tr>
			
			<th>Nombre</th>
			<th>Fecha Nacimiento</th>
			<th>Sexo</th>
			<th>Peso</th>
			<th>Estatura</th>

			<th></th>

		</tr>
	</thead>

	<tbody>

		@foreach($historias as $historia)

			<tr>
				
				<td>{{ $historia->nombre }}</td>

				<td>{{ $historia->fecha_nac }}</td>
				<td>{{ $historia->sexo }}</td>
				<td>{{ $historia->peso }}</td>
				<td>{{ $historia->estatura }}</td>

				<td>

					<a href="{{ url('Detalles/'.$historia->id) }}">
						
						<button class="btn btn-success"><i class="fa fa-list"></i> Ver Detalles</button>

					</a>
					
					<button class="btn btn-danger EliminarHistoria" Hid="{{$historia->id}}" Paciente="{{$historia->nombre}}"><i class="fa fa-trash"></i></button>

				</td>

			</tr>

		@endforeach
		
	</tbody>

</table>