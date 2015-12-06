@foreach($datos as $dato)
	<tr>
		<td>{{$dato->id}}</td>
		<td>{{$dato->nombre}}</td>
		<td>{{$dato->edad}}</td>
	</tr>
@endforeach	

