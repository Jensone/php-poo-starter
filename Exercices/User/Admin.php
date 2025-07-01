<?php

require_once 'User.php';

class Admin extends User
{
    private string $niveauAcces;
    
    public function bannir()
    {}

    public function CreerUtilisateur()
    {}

    /**
     * Get the value of niveauAcces
     */ 
    public function getNiveauAcces()
    {
        return $this->niveauAcces;
    }

    /**
     * Set the value of niveauAcces
     *
     * @return  self
     */ 
    public function setNiveauAcces($niveauAcces)
    {
        $this->niveauAcces = $niveauAcces;

        return $this;
    }
}