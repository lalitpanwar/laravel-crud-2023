<table>
<tr><th>ID</th>
<th>email</th>
<th>Full Name</th>
<tr><th>avatar</th></tr>

@foreach($data as $item)
<tr><td>{{$item['id']}}</td>
<td>{{$item['email']}}</td>
<td>{{$item['first_name']}} {{$item['last_name']}}</td>
<td><img src="{{$item['avatar']}}" /> </td></tr>
@endforeach

</table>

<br/>
