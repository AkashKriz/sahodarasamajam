<html>
<head>
<body>


<table border="10">
<tr>

<th>Name</th>
<th>Designation</th>
</tr>
@foreach ($member as $member)
<tr><td>{{$member->firstname}}</td>
<td>{{$member->designation}}</td></tr>
<a href="members/{{ $member->id }}/edit">edit</a>
@endforeach
</table>

</body>
</html>