<?php
class Auteur
{
        
    private string $nom;
    private string $prenom;
    private array  $livres;

    public function __construct($nom, $prenoms)

    {
        $this->nom= $nom;
        $this->prenoms =$prenoms;


        $this->livres = [];
    }

    public function addLivre(livre $livre)
    {
        $this->livres[] =$livre;
    }

    public function Bibliotheque()
    {   
        
        $resultat="<h2> $this->noms $this->prenoms </h2>" ;
        foreach ($this->livres as $key) 
        {
           $resultat= $resultat. $key->getInfo() ."<br>";
        }

        return $resultat;
    }

    public function __toString()
    {
        return $this->nom . $this->prenoms;
    }

}