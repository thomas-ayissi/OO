<?php

class Personnage
{
    // Attributs ou propriétés, en général toujours private (ou protected qu'on verra lors des extends)
    private  $nom;
    private  $forcePerso;
    private  $degats;
    private  $niveau;
    private  $experience;
    private  $vie;

    // constantes
    const VIE_DE_BASE = 1000;

    // méthodes

    // getters (accessors) : permettent de récupérer en dehors de la classe les attributs private ou protected de l'instance créé

    public function getNom()
    {
        // récupération du nom de l'instance
        return $this->nom;
    }
    public function getForcePerso()
    {
        return $this->forcePerso;
    }
    public function getDegats()
    {
        return $this->degats;
    }
    public function getNiveau()
    {
        return $this->niveau;
    }
    public function getExperience()
    {
        return $this->experience;
    }
    public function getVie()
    {
        return $this->vie;
    }

    // setters (ou mutators) : permettent de modifier dans la classe les attributs private ou protected de l'instance créé

    public function setNom($s)
    {
        // remplissage de l'instance
        $this->nom = $s;
    }
    public function setForcePerso($f)
    {
        $this->forcePerso = $f;
    }
    public function setDegats($d)
    {
        $this->degats = $d;
    }
    public function setNiveau($n)
    {
        $this->niveau = $n;
    }
    public function setExperience($e)
    {
        $this->experience = $e;
    }
    public function setVie($v)
    {
        $this->vie = $v;
    }
}
