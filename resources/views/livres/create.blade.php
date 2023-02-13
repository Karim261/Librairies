<form action="{{ route('livres.store') }}" method="post">
    @csrf
    <label for="titre">Titre</label>
    <input type="text" name="titre" id="titre">
    <label for="isbn">ISBN</label>
    <input type="text" name="isbn" id="isbn">
    <label for="auteur">Auteur</label>
    <input type="text" name="auteur" id="auteur">
    <label for="editeur">Editeur</label>
    <input type="text" name="editeur" id="editeur">
    <button type="submit">Créer</button>
</form>
