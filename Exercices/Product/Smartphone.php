<?php

require_once 'Product.php';

class Smartphone extends Product
{
    private string $marque;
    private string $reseau;
    private string $stockage;
    private string $ram;
    private string $couleur;



    /**
     * Get the value of marque
     */ 
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set the value of marque
     *
     * @return  self
     */ 
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get the value of reseau
     */ 
    public function getReseau()
    {
        return $this->reseau;
    }

    /**
     * Set the value of reseau
     *
     * @return  self
     */ 
    public function setReseau($reseau)
    {
        $this->reseau = $reseau;

        return $this;
    }

    /**
     * Get the value of stockage
     */ 
    public function getStockage()
    {
        return $this->stockage;
    }

    /**
     * Set the value of stockage
     *
     * @return  self
     */ 
    public function setStockage($stockage)
    {
        $this->stockage = $stockage;

        return $this;
    }

    /**
     * Get the value of ram
     */ 
    public function getRam()
    {
        return $this->ram;
    }

    /**
     * Set the value of ram
     *
     * @return  self
     */ 
    public function setRam($ram)
    {
        $this->ram = $ram;

        return $this;
    }

    /**
     * Get the value of couleur
     */ 
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set the value of couleur
     *
     * @return  self
     */ 
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }
}