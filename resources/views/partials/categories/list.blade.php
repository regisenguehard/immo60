
<ul>
    @foreach ($categories as $categorie)
        <li>{{ $categorie->nom }}</li>
    @endforeach
</ul>