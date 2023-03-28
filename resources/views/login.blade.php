<form action="/sescontroller" method="POST">
    @csrf
<input type="text" name="user" placeholder="Enter User Name" />
<input type="email" name="email" placeholder="Enter Email"/>
<input type="submit" name="storedata" value="Store Data" />
</form>