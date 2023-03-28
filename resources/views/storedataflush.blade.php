@if(session('user'))
<h1>Data for {{session('user')}} Saved Successfully</h1>
@endif
<form action="storecontroller" method="POST">
    @csrf
    <input type="text" name="user" placeholder="Enter Name" />
    <input type="email" name="email" placeholder="Enter Email" />
    <input type="submit" name="storedata" value="Store Data" />
</form>