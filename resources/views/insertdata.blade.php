<form action="adddatacontroller" method="POST" enctype="multipart/form-data">
    @csrf
<input type="text" name="name" value="" />
<input type="email" name="email" value="" />
<input type="phone" name="phone" value="" />
<!--<input type="file" name="upload" /> -->
<input type="submit" name="submit" value="Submit Data" /> 
</form>