<h1>Our cafes</h1>

<ul>
    @foreach ($cafes as $cafe)
        <li><a href="{{ route('cafes.show', $cafe->id) }}">{{ $cafe->name }}</a></li>
    @endforeach
</ul>