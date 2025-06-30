<?php

class Utilisateur
{
    // Les propriétés de la classe (variables)
    private string $nom;
    private string $email;
    private string $identifiant;
    private \DateTime $dateInscription;

    // Les méthodes de la classe (fonctions)
    /**
     * Get the value of nom
     */ 
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     * @return  self
     */ 
    public function setNom(string $nom): Utilisateur
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail(string $email): Utilisateur
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of identifiant
     */ 
    public function getIdentifiant(): string
    {
        return $this->identifiant;
    }

    /**
     * Set the value of identifiant
     *
     * @return  self
     */ 
    public function setIdentifiant(string $identifiant): Utilisateur
    {
        $this->identifiant = $identifiant;

        return $this;
    }

    /**
     * Get the value of dateInscription
     */
    public function getDateInscription(): \DateTime
    {
        return $this->dateInscription;
    }

    /**
     * Set the value of dateInscription
     * @return  self
     */
    public function setDateInscription(\DateTime $dateInscription): Utilisateur
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }
}
// Ne rien écrire après cette accolade