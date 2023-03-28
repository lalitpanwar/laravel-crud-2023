<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Date</th>
            <th>Link</th>
            <th>type</th>

        </tr>
    </thead>
    <tbody>

    @foreach($collection as $dta)
    @php
        $date = date_create($dta['date']);
        @endphp
        <tr>
            <td>{{$dta['id']}}</td>
            <td>{{$dta['title']['rendered']}}</td>
            <td>{{date_format($date,"D, M Y h:i:s")}} || {{$dta['date']}}</td>
            <td>{{$dta['link']}}</td>
            <td>{{$dta['type']}}</td>

        </tr>
        @endforeach
    </tbody>
</table>

