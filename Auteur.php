<?php
class Auteur
{
        
    private string $nom;
    private string $prenom;
    private array  $livres;

    public function __construct( string $nom, string $prenom)

    {
        $this->nom= $nom;
        $this->prenom =$prenom;


        $this->livres = [];
    }

    // ----------------------------------------------------- getter setter

    public function getNom()
    {
        return $this->nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }


    public function setNom($nom)
    {
        $this->prenom = $nom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function addLivre(Livre $livre)
    {
        $this->livres[] =$livre;
    }
    //----------------------------------------- methode

    public function Bibliotheque()
    {   
        
        $resultat="<h2> ".$this->nom . $this->prenom." </h2>" ;
        foreach ($this->livres as $key) 
        {
           $resultat= $resultat. $key->getInfo() ."<br>";
        }

        return $resultat;
    }
    // ----------------------------- to string

    public function __toString()
    {
        return $this->nom . $this->prenom;
    }

}