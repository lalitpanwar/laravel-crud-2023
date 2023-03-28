<h1>Hello</h1>
@foreach($namy as $nam)
@if($nam=='anil')
hi {{$nam}}
@elseif($nam=="rahul")
hi {{$nam}}
@else
unknown user
@endif
@endforeach