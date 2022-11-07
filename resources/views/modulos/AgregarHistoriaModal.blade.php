<div id="AgregarHistoria" class="modal fade">
	
	<div class="modal-dialog">
		
		<div class="modal-content">
			
			<form method="post" action="{{ url('welcome') }}">

				@csrf
				
				<div class="modal-body">
					
					<div class="box-body">


						<div class="form-group">
							
							<h2>Nombre del Paciente:</h2>

							<input type="text" class="form-control input-lg" name="nombre" value="" required>

						</div>

						
						<div class="form-group">

							<div class="col-md-8">
								<h2>Fecha de Nacimiento:</h2>

								<input type="text" class="form-control input-lg" name="fecha_nac" value="" required  data-inputmask="'alias': 'dd-mm-yyyy'" data-mask>
								
							</div>


							<div class="col-md-4">
								<h2>Sexo:</h2>

								<select class="form-control input-lg" name="sexo" required="">
									<option value="Femenino">Femenino</option>
									<option value="Masculino">Masculino</option>
								</select>
							</div>

						</div>

						<div class="form-group">

							<div class="col-md-6">
								<h2>Estatura:</h2>

								<input type="text" class="form-control input-lg" name="estatura" value="" required>
							</div>

							<div class="col-md-6">
								<h2>Peso:</h2>

								<input type="text" class="form-control input-lg" name="peso" value="" required>
							</div>

							
							
						</div>


					</div>

				</div>

				<div class="modal-footer">
					
					<button type="submit" class="btn btn-primary">Agregar Historia</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>

				</div>

			</form>

		</div>

	</div>

</div>