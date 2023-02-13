<h1>{{ $livre->titre }}</h1>
<p>ISBN: {{ $livre->isbn }}</p>
<p>Auteur: {{ $livre->auteur }}</p>
<p>Editeur: {{ $livre->editeur }}</p>
<a href="{{ route('livres.index') }}">Retour à la liste</a>
