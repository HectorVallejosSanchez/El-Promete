<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
<div class="contact">
	<div class="container">
		 <div class="container">
	            <p><br></p>
	            <div class="row">
	                <div class="col-md-2"></div>
	                <div class="col-md-8">
	                    <div class="panel panel-default">
	                        <div class="panel-body">
	                            {!!Form::open(['route'=>'candidato.store','method'=>'POST'])!!}
	                                     <div class="page-header text-center">
			                                <h2>Registro de Candidato</h2>
			                            </div>

	                                    <div class="form-group col-md-6">
	                                        <label for="exampleInputEmail1">Nombre</label>
	                                        <div class="input-group">
	                                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
	                                            <input type="text" name="nombre" class="form-control" placeholder="Nombre" aria-describedby="basic-addon1">
	                                        </div>
	                                    </div>
	                                    <div class="form-group col-md-6">
	                                        <label for="exampleInputEmail1">Fecha de Nacimiento</label>
	                                        <div class="input-group">
	                                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
	                                            <input type="date" name="fecha_nacimiento" class="form-control" placeholder="Fecha de Nacimiento" aria-describedby="basic-addon1">
	                                        </div>
	                                    </div>
	                                    <div class="form-group col-md-6">
	                                        <label for="exampleInputEmail1">Edad</label>
	                                        <div class="input-group">
	                                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
	                                            <input type="number" name="edad" class="form-control" placeholder="Edad" aria-describedby="basic-addon1">
	                                        </div>
	                                    </div>
	                                    <div class="form-group col-md-6">
	                                        <label for="exampleInputEmail1">Número de Gobiernos</label>
	                                        <div class="input-group">
	                                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-flag"></span></span>
	                                            <input type="number" name="numero_gobiernos" class="form-control" placeholder="Numero de Gobiernos" aria-describedby="basic-addon1">
	                                        </div>
	                                    </div>
	                
	                                    <div class="form-group col-md-6">
	                                        <label for="exampleInputEmail1">Nombre de Partido</label>
	                                        <div class="input-group">
	                                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
	                                            <input type="text" name="nombre_partido" class="form-control" placeholder="Nombre de Partido" aria-describedby="basic-addon1" >
	                                        </div>
	                                    </div>

	                                   	<div class="form-group col-md-6">
	                                        <label for="exampleInputEmail1">Ocupación</label>
	                                        <div class="input-group">
	                                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
	                                            <input type="text" name="ocupacion" class="form-control" placeholder="Ocupacion" aria-describedby="basic-addon1" >
	                                        </div>
	                                    </div> 
	                                    
	                                   <div class="form-group col-md-6">
										    <label for="exampleInputFile">Seleccione Foto</label>
										    <input type="file" id="exampleInputFile" name="url_foto">
										    <p class="help-block">Foto de Candidato</p>
										  </div>
										 <div class="form-group col-md-6">
	                                        <label for="exampleInputEmail1">Indicador</label>
	                                        <div class="input-group">
	                                            <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
	                                            <input type="text" name="indicador" class="form-control" placeholder="Nombre de Partido" aria-describedby="basic-addon1" >
	                                        </div>
	                                    </div> 
	                                   	 <div class="form-group col-md-12">
  											<label for="comment">Descripción</label>
  											<textarea maxlength="255" class="form-control" rows="3" id="comment" name="descripcion"></textarea>
										</div>

										 <div class="text-center col-md-12">	                                         
	                                     
	                                         <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-floppy-saved"></span> Registrar</button>
	    
	                                    </div>
	                                  	
	                                {!!Form::close()!!}
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-2"></div>
	            </div>
	    </div>
	</div>
</div>

</body>
</html>