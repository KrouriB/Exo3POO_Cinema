<h1>Exercice 3</h1>

<p>III.Cinéma<br>

	<br><strong>Vous avez en charge de gérer différentes entités autour de la thématique du cinéma.</strong><br>

	<br>Les films seront caractérisés par leur titre, leur date de sortie en France, leur durée (en minutes) ainsi que leur réalisateur (unique, avec nom, prénom, sexe et date de naissance). Un résumé du film (synopsis) pourra éventuellement être renseigné. Chaque film est caractérisé par un seul genre cinématographique (science-fiction, aventure, action, ...).<br>

	<br>Votre application devra recenser également les acteurs de chacun des films. On désire connaître le nom, le prénom, le sexe et la date de naissance de l’acteur ainsi que le rôle (nom du personnage) joué par l’acteur dans le(s) film(s) concerné(s).<br>

	<br>Il serait intéressant d'utiliser la notion d'héritage entre classes dans cet exercice. A vous de le mettre en place correctement !<br>

	<br><strong>Attention</strong>, le rôle (par exemple James Bond) ne doit être instancié qu'une seule fois (dans la mesure où ce rôle a été incarné par plusieurs acteurs.)<br>

	<br>On doit pouvoir :

	<li>Lister la liste des acteurs ayant incarné un rôle précis (ex: les acteurs ayant joué le rôle de Batman : Michael Keaton, Val Kilmer, George Clooney, ...)</li>


	<li>Lister le casting d'un film (dans le film Star Wars Episode IV, Han Solo a été incarné par Harrison Ford, Luke Skywalker a été incarné par Mark Hamill, ...)</li>

	<li>Lister les films par genre (exemple : le genre SF est associé à X films : Star Wars, Blade Runner, ...)</li>

	<li>Lister la filmographie d'un acteur (dans quels films a-t-il joué ?)</li>

	<li>Lister la filmographie d'un réalisateur (quels sont les films qu'a réalisé ce réalisateur ?)</li>
</p>

<h2>Résultat</h2>

<?php

spl_autoload_register(function ($class_name) {
	require_once $class_name . '.php';
});

$real1 = new Realisateur("John", "Doe", "Type A", "15-11-1962");
$genre1 = new Genre("générique");
$film1 = new Film("Pas d'idées", "17-02-1980", 153, $real1, $genre1);
$acteur1 = new Acteur("Jane", "Doe", "Type B", "29-02-1968");
$role1 = new Role("Generico");
$cast1 = new Casting($film1, $acteur1, $role1);
$leformat = new IntlDateFormatter('fr_FR', IntlDateFormatter::SHORT, IntlDateFormatter::NONE);

// img url des affiche a implanter :

?>