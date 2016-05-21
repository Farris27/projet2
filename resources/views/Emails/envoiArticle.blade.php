<?php $message->to('test@mail.com'); ?>

<h1>Nouvel Article</h1>

<p>Titre :{{ $titre }}</p>
<p>Prenom :{{ $auteur }}</p>
<p>Fichier :{{ $fichier->getClientOriginalName() }}</p>
