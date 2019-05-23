
<!DOCTYPE html>
<html>
<head>
	<title>TEste</title>
</head>
<body>


	<div class="flex-center position-ref full-height">
    <table>
        <thead>
					<th>Cod</th>
					<th>Nome</th>

					<th>Pass</th>
					<th>Status</th>

				</thead>
				@foreach ($agent as $ag)
				<tr>
					<td>{{ $ag->number}}</td>
					<td>{{ $ag->name}}</td>
					<td>{{ $ag->password}}</td>
					<td>{{ $ag->estatus}}</td>


				</tr>

				@endforeach
    </table>
</body>
</html>
