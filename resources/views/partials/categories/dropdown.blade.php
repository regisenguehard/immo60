
<select name="categorie_id" id="categorie_id">
    @foreach ($categories as $categorie)
        <option value="{{ $categorie->id }}">{{ $categorie->nom }}</option>
    @endforeach
</select>