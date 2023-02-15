<!-- edit.blade.php -->

<!-- Utilisez un framework CSS tel que Bootstrap pour améliorer l'apparence du formulaire -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class="container my-5">
    <h1 class="text-center">Modifier le livre</h1>
    <form action="{{ route('livres.update', $livre->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Affichez les champs pour entrer les informations sur le livre -->
        <div class="form-group">
            <label for="nom">Titre</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{ $livre->nom }}">
        </div>
        <div class="form-group">
            <label for="auteur">Auteur</label>
            <input type="text" class="form-control" id="auteur" name="auteur" value="{{ $livre->auteur }}">
        </div>
        <div class="form-group">
            <label for="date_publication">Année de publication</label>
            <input type="date" class="form-control" id="date_publication" name="date_publication" value="{{ $livre->date_publication }}">
        </div>
        <div class="form-group">
            <label for="stock">Stock</label>
            <input type="number" class="form-control" id="stock" name="stock" value="{{ $livre->stock }}">
        </div>

        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>