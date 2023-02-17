<!-- edit.blade.php -->

<!-- Utilisez un framework CSS tel que Bootstrap pour améliorer l'apparence du formulaire -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<div class="container my-5">
    <h1 class="text-center">Modifier le entree_stock</h1>
    <form action="{{ route('entree_stocks.update', $entree_stock->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Affichez les champs pour entrer les informations sur le entree_stock -->
        <div class="form-group">
            <label for="date_entree">Date d'entrée</label>
            <input type="date" class="form-control" id="date_entree" name="date_entree" value="{{ $entree_stock->date_entree }}">
        </div>
        <div class="form-group">
            <label for="quantite">Quantité</label>
            <input type="text" class="form-control" id="quantite" name="quantite" value="{{ $entree_stock->quantite }}">
        </div>
        

        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>