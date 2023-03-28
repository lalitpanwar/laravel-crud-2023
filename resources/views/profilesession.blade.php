@if(session('user'))
<h1>Hi {{session('user')}} you ar now Logged in</h1>
<br/>
If you Want to Logout then Click on <a href="{{URL::to('/logout')}}">Logout Button</a>
@else
<h1 style="color:red">You are not log in. Go to <a href="{{URL::to('/login')}}">Login Page</a></h1>
@endif