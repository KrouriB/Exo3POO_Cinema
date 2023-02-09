<?php

class Acteur extends Personne
{
	private array $roles;
	private Role $role;
	private Casting $cast;

	public function __construct(string $nom, string $prenom, string $sexe, string $laDateNaissance, Role $role)
	{
		parent::__construct($nom, $prenom, $sexe, $laDateNaissance);
		$this->role->ajoutActeur($this);
	}

	public function ajoutRole(Role $lesRoles)
	{
		$this->roles[] = $lesRoles;
	}


	public function afficherRoleDeLActeur()
	{
		$display = "";
		$display .= "Les role ayant été incarer par cette l'acteur ";
		$display .= parent::get_nom_prenom();
		$display = " sont : <br>";
		foreach ($this->roles as $unRole) {
			$unRole->get_role();
		}
		$display = "<br>";
	}
}

?>