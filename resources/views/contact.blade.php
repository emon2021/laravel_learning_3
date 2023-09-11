<h1>This is Contact Page.</h1><hr>

<ul>
    <li><a href="{{route('bariJa')}}">Home</a></li>
    <li><a href="{{route('about-us')}}">About</a></li>
</ul>

<form action="{{route('student-store')}}" method="post">
    @csrf
    <input type="text" placeholder="Name: " name="name" id="">
    <input type="text" placeholder="Email: " name="email" id="">
    <input type="text" placeholder="Password: " name="pwd" id="">
    <input type="submit" value="Submit">
</form>