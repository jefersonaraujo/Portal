

<!-- CSS Code: Place this code in the document's head (between the 'head' tags) -->
<style>
table.GeneratedTable {
  width: 100%;
  background-color: #ffffff;
  border-collapse: collapse;
  border-width: 2px;
  border-color: #000000;
  border-style: solid;
  color: #000000;
}

table.GeneratedTable td, table.GeneratedTable th {
  border-width: 2px;
  border-color: #000000;
  border-style: solid;
  padding: 3px;
}

table.GeneratedTable thead {
  background-color: #35e497;
}
</style>

<h3>
Relatorio Agentes
</h3><table class="GeneratedTable">

  <thead>
    <tr>
			<th>Cod</th>
			<th>Nome</th>
			<th>Pass</th>
			<th>Status</th>
    </tr>
  </thead>
  <tbody>
		@foreach ($agent as $ag)
		<tr>
			<td>{{ $ag->number}}</td>
			<td>{{ $ag->name}}</td>
			<td>{{ $ag->password}}</td>
			<td>{{ $ag->estatus}}</td>


		</tr>

		@endforeach
  </tbody>
</table>
<!-- Codes by Quackit.com -->
