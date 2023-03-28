<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container p-2">
        <div class="row"><div class="col-md-6 text-end"><a href="{{route('customer.create')}}" title="Add new Entry" class="btn btn-success"> Add New</a></div>  <div class="col-md-6 text-end"><a href="{{route('customer.trashed')}}" title=" View Trashed Items" class="btn btn-success"> View Trashed Items</a></div></div>
        <p>@if(session()->has('success'))
            {{session()->get('success')}} 
            
           @endif
<table class="table">
    <thead>
        <tr>
        <th>Image</th>
        <th>Customer ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Gender</th>
        <th>Action</th>
        </tr>
    </thead>
    <tbody>

           @foreach($customers as $customer)
           <tr>{{$customer['fimage']}}
            <td><img src="{{ asset('/storage/uploads/'. $customer['fimage']) }}" width="80" height="70"/></td>
            <td>{{$customer['id']}}</td>
            <td>{{$customer['name']}}</td>
            <td>{{$customer['email']}}</td>
            <td>{{$customer['address']}}</td>
            <td>{{$customer['phone']}}</td>
            <td>
                @if($customer['gender']=='M')
                 Male
                 @elseif($customer['gender']=='F')
                 Female
                 @else
                 Other
                 @endif

            </td>
            <td>

                <a href="{{route('customer.trash',['id' => $customer['id']])}}" title="Trash" class="btn-danger">Trash</a>
            <a href="{{route('customer.edit',$customer['id'])}}" title="Edit" class="btn-success">Edit</a></td>
            </tr>
           @endforeach

    </tbody>
</table>       

    </div><!-- end container -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>