<?php
class Livre
{
    private string $titre;
    private int $nombreDePage;
    private int $AnneDeParuption; 
    private float $prix;
    private Auteur $auteur;

    public function __construct($titre , $nbp, $anne,$prix, $auteur)
    {
        $this->titre = $titre;
        $this->nombreDePage = $nbp;
        $this->anneDeParuption = $anne;
        $this->prix = $prix;
        $this->auteur = $auteur;

        $this->auteur-> addLivre($this);

    }


    // --------------------------- getter setter

    public function getTitre()
    {
        $this->titre;
    }
    public function getNombreDePage()
    {
        $this->nombreDePage; 
    }
    public function getAnneDeParuption()
    {
        $this->anneDeParuption;
    }
    public function getPrix()
    {
        $this->prix;
    }

//------------------------------------------------ setter


    public function setNombreDePage($nbp)
    {
        $this->nombreDePage = $nbp;

    }

    public function setPrix($Prix)
    {
        $this->prix = $prix;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    public function setAnneDeParuption($anneDeParuption)
    {
        $this->anneDeParuption;
    }

   //---------------------------------------------------- methode  


    public function getInfo()
    {
       return "$this->titre ( $this->anneDeParuption) $this->nombreDePage pages /   $this->prix €";
    }


    //----------------------------------------------- to string

     public function __toString()
    {
        return $this->titre; 
    }
}
