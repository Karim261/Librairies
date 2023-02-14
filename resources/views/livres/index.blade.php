<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Livres</title>
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center">Liste des livres</h1>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Stock</th>
                    <th>Année de publication</th>
                    
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($livres as $livre)
                <tr>
                <th scope="row">{{ $livre->id }}</th>
                    <td>{{ $livre->nom }}</td>
                    <td>{{ $livre->auteur }}</td>
                    <td>{{ $livre->stock }}</td>
                    <td>{{ $livre->date_publication }}</td>
                    <td>
                    <a href="{{ route('livres.edit', $livre->id) }}" class="btn btn-primary btn-sm">Modifier</a>
          <form action="{{ route('livres.destroy', $livre->id) }}" method="POST" style="display:inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
          </form>
        </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('livres.create') }}" class="btn btn-success btn-sm">Créer un livre</a>
    </div>
</body>
</html>