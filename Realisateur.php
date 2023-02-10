<?php

class Realisateur extends Personne
{

	private array $films;

	public function __construct(string $nom, string $prenom, string $sexe, string $laDateNaissance)
	{
		parent::__construct($nom, $prenom, $sexe, $laDateNaissance);
		$this->films = [];
	}

	public function ajoutFilm($leFilm)
	{
		$this->films[] = $leFilm;
	}

	public function afficherParReal()
	{
		$leformat = new IntlDateFormatter('fr_FR', IntlDateFormatter::SHORT, IntlDateFormatter::NONE);
		$display = "";
		$display .= "Le réalisateur ";
		$display .= parent::get_nom_prenom();
		$display .= " à comme filmographie : ";
		foreach ($this->films as $unFilm) {
			$display .= $unFilm->get_titre." en ".$unFilm->get_dateSortieFR()->leformat('d/m/y')."<br>";
		}
		$display = "<br>";
	}
}
