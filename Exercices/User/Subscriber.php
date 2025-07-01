<?php

require_once 'User.php';

class Subscriber extends User
{
    private string $abonnement;

    public function commenter()
    {}

    public function signaler()
    {}

    /**
     * Get the value of abonnement
     */ 
    public function getAbonnement()
    {
        return $this->abonnement;
    }

    /**
     * Set the value of abonnement
     *
     * @return  self
     */ 
    public function setAbonnement($abonnement)
    {
        $this->abonnement = $abonnement;

        return $this;
    }
}