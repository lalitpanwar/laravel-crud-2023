<h1>This is News Page</h1>
Last Page: {{URL::previous()}}
{{URL::full()}}
<a href="{{URL::to('/blog')}}" >Blog</a> ||
<a href="{{URL::to('/about')}}" >About</a>
<a href="{{URL::to('/welcome')}}">Welcome</a>
<a href="{{URL::to('/')}}">Home</a>