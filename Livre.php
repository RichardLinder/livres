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

    public function getInfo()
    {
       return   "$this->titre ($this->anneDeParuption) $this->nombreDePage pages /   $this->prix €";
    }
}
