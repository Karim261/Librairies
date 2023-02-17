<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>EntreeStocks</title>
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center">Liste des entree_stocks</h1>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Date d'entrée</th>
                    <th>Quantité</th>
                    
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($entree_stocks as $entree_stock)
                <tr>
                <th scope="row">{{ $entree_stock->id }}</th>
                    <td>{{ $entree_stock->date_entree }}</td>
                    <td>{{ $entree_stock->quantite }}</td>
                    <td>
                    <a href="{{ route('entree_stocks.edit', $entree_stock->id) }}" class="btn btn-primary btn-sm">Modifier</a>
          <form action="{{ route('entree_stocks.destroy', $entree_stock->id) }}" method="POST" style="display:inline-block">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
          </form>
        </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('entree_stocks.create') }}" class="btn btn-success btn-sm">Créer un entree_stock</a>
    </div>
</body>
</html>