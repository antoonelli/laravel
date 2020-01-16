<h1>insercao de restaurante</h1>

<hr>
<form method="post" action="{{route('restaurant.edit', ['id' => $restaurant->id])}}" >
	{{csrf_field()}}
	<p>
		<label>Nome do restaurante</label><br>
		<input type="text" name="name" value="{{$restaurant->name}}">
	</p>
	<p>
		<label>Endereço</label><br>
		<input type="text" name="address" value="{{$restaurant->address}}">
	</p>
	<p>
		<label>fale sobre o restaurante</label><br>
		<textarea name="description" id="" cols="30" rows="10" >{{$restaurant->description}}</textarea>
	</p>
	<input type="submit" value="Cadastrar">
</form>