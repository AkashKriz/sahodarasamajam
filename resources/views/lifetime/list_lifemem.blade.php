<html>
<head>
<body>
<table border="20">
<tr><th>name</th>
<th>email</th>
<th>age</th>
<th>mobileno</th></tr>
<th>designation</th></tr>
@foreach ($lifemem as $lifemem)
<tr><td>{{$lifemem->firstname}}</td>
<td>{{$lifemem->email}}</td>
<td>{{$lifemem->age}}</td>
<td>{{$lifemem->designation}}</td>
<td>{{$lifemem->mobileno}}</td></tr>
<td><a href='LifeTime/{{ $lifemem->id }}/edit' class='btn btn-primary btn-block'>change to non lifetime</a></td>
@endforeach
</table>

</body>
</html>