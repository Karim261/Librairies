<table>
    <thead>
        <tr>
            <th>Titre</th>
            <th>ISBN</th>
            <th>Auteur</th>
            <th>Stock</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($livres as $livre)
        <tr>
            <td>{{ $livre->titre }}</td>
            <td>{{ $livre->isbn }}</td>
            <td>{{ $livre->auteur }}</td>
            <td>{{ $livre->stock }}</td>
            <td>
                <a href="{{ route('livres.show', $livre->id) }}">Afficher</a>
                <a href="{{ route('livres.edit', $livre->id) }}">Modifier</a>
                <form action="{{ route('livres.destroy', $livre->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="{{ route('livres.create') }}">Ajouter un livre</a>

