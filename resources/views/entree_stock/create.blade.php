<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Book</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <h1 class="text-center">Create Entree Stock</h1>
        <form action="{{route('entree_stocks.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="id">Id:</label>
                <input type="text" class="form-control" id="nom" name="id">
            </div>
            <div class="form-group">
                <label for="date_entree">date_entree:</label>
                <input type="date" class="form-control" id="date_entree" name="date_entree">
            </div>
            <div class="form-group">
                <label for="quantite">quantite:</label>
                <input type="text" class="form-control" id="quantite" name="quantite">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>
