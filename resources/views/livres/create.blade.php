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
        <h1 class="text-center">Create Book</h1>
        <form action="{{route('livres.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="id">ISBN:</label>
                <input type="text" class="form-control" id="nom" name="id">
            </div>
            <div class="form-group">
                <label for="nom">Title:</label>
                <input type="text" class="form-control" id="nom" name="nom">
            </div>
            <div class="form-group">
                <label for="auteur">Author:</label>
                <input type="text" class="form-control" id="auteur" name="auteur">
            </div>
            <div class="form-group">
                <label for="stock">Stock:</label>
                <input type="number" class="form-control" id="stock" name="stock">
            </div>
            <div class="form-group">
                <label for="date_publication">date de publication:</label>
                <input type="date" class="form-control" id="date_publication" name="date_publication">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>
