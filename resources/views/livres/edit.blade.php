<form action="{{ route('livres.update', $livre->id) }}" method="post">
    @csrf
    @method('PUT')
    <label for="titre">Titre</label>
    <input type="text" name="titre" id="titre" value="{{ $livre->titre }}">
    <label for="isbn">ISBN</label>
    <input type="text" name="isbn" id="isbn" value="{{ $livre->isbn }}">
    <label for="auteur">Auteur</label>
    <input type="text" name="auteur" id="auteur" value="{{ $livre->auteur }}">
    <label for="editeur">Editeur</label>
    <input type="text" name="editeur" id="editeur" value="{{ $livre->editeur }}">
    <button type="submit">Enregistrer</button>
</form>
