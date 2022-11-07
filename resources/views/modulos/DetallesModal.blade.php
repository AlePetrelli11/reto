<?php
	
	$exp = explode("/", $_SERVER["REQUEST_URI"]);

?>


@if($exp[3] == "Detalles")
	<div id="Detalles" class="modal fade">
	
	<div class="modal-dialog">
		
		<div class="modal-content">
			
			<form method="post">

				@csrf
				
				<div class="modal-body">
					
					<div class="box-body">

						@php

						$fecha_nac = new DateTime($historia->fecha_nac);

					    $hoy = new DateTime(date("d/m/Y"));

					    $diferencia = $hoy->diff($fecha_nac);
					    $edad = $diferencia->format("%y");

						if($historia->sexo == 'Masculino'){
							$u = 'un';
						}
						else{
							$u = 'una';
						}

						$v1 = 0;
						$v2 = 1;

						for ($i=1; $i < $historia->estatura; $i++) {

							$temp = $v1;

							$v1 = $v2;

							$v2 = $temp + $v1;

							if($v2 < $historia->estatura){

								$fib = $v2;

							}
						}

						if($historia->peso < 30){
							$m = 'menos';
						}else{
							$m = 'más';
						}


						$rest = substr($historia->fecha_nac, -2);
						$raiz = sqrt($rest);
						$red = round($raiz, 2); 
						$fin = number_format($red, 2, ',', '.');


						@endphp

						@if($edad < 18)

							<h3>Hola {{ $historia->nombre }} eres {{ $u }} joven muy saludable, te recomiendo salir a jugar al aire libre durante {{$fib}} horas diarias.</h3>
							
						@else

							<h3>Hola {{ $historia->nombre }} eres una persona muy saludable, te recomiendo comer {{$m}} y salir a correr {{$fin}} km diarios</h3>

						@endif


					</div>

				</div>

				<div class="modal-footer">
					
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>

				</div>

			</form>

		</div>

	</div>

</div>
@endif