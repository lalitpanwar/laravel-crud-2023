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
    <div class="container">
        
        <h1>Customer Entry Form</h1>
        <form action="{{$url}}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Enter Name</label>
            <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Enter Name" value="{{ isset($customer) ? $customer['name'] : '' }}" />
        </div><!-- end input field div -->
        <div class="mb-3">  
            <label for="formGroupExampleInput" class="form-label">Enter Email</label>
            <input type="email" name="email" class="form-control" id="formGroupExampleInput" placeholder="Enter Email" value="{{isset($customer) ? $customer['email'] : ''}}" />
        </div><!-- end input field div -->
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Enter Address</label>
            <input type="text" name="address" class="form-control" id="formGroupExampleInput" placeholder="Enter Address" value="{{isset($customer) ? $customer['address'] : ''}}" />
        </div><!-- end input field div -->
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Enter Phone</label>
            <input type="text" name="phone" class="form-control" id="formGroupExampleInput" placeholder="Enter Phone" value="{{isset($customer) ? $customer['phone'] : ''}}" />
        </div><!-- end input field div -->
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Male</label>
            <input type="radio" name="gender" class="form-check-input" id="formGroupExampleInput" value="M"  
            {{@$customer['gender'] == "M" ? "checked" : ""}} />
        </div><!-- end input field div -->
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Female</label>
            <input type="radio" name="gender" class="form-check-input" id="formGroupExampleInput" value="F" 
                {{@$customer['gender'] == "F" ? "checked" : ""}}>
        </div><!-- end input field div -->
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Other</label>
            <input type="radio" name="gender" class="form-check-input" id="formGroupExampleInput" value="O" 
             {{@$customer['gender'] == "O" ? "checked" : ""}} />
        </div><!-- end input field div -->
        <div class="mb-3">  
            <label for="formGroupExampleInput" class="form-label">Upload File</label>
            <input type="file" name="fimage" class="form-control" id="formGroupExampleInput"  value="{{isset($customer) ? $customer['fimage'] : ''}}" />
        </div><!-- end input field div -->
        <div class="mb-3">
           
            <input type="submit" name="save" value="Save Data" class="btn btn-outline-secondary">
        </div><!-- end input field div -->
        </form>
        <div class="row"><div class="col text-end"><a href="{{route('customer.view')}}" title="View All Data" class="btn btn-primary"> View All Data</a></div></div>
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