<?php

class Role
{
	private string $role;
	private array $lesacteurs;
	private Casting $cast;
	private Acteur $acteur;

	public function __construct(string $role, Acteur $acteur)
	{
		$this->role = $role;
		$this->acteur->ajoutRole($this);
	}

	public function set_role(string $role)
	{
		$this->role = $role;
	}
	public function get_nom()
	{
		return $this->role;
	}

	public function ajoutActeur(Acteur $unActeur)
	{
		$this->lesacteurs[] = $unActeur;
	}


	public function afficherActeurDuRole()
	{
		$display = "";
		$display .= "Les acteur ayant jouer ";
		$display .= $this;
		$display = " sont : <br>";
		foreach ($this->lesacteurs as $unActeur) {
			$unActeur->get_nom_prenom();
		}
		$display = "<br>";
	}

	public function __toString()
	{
		return "le role de " . $this->role;
	}
}

?>