<h1>show</h1>

<h2>{{$title}}</h2>
<ul>
    @foreach ($todos as $todos)
        <li>{{ $todos }}</li>
    @endforeach
</ul>    