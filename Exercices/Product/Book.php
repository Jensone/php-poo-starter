<?php

require_once 'Product.php';

/**
 * Classe enfant de Produit, Livre représente 
 * un livre dans l'application
 */
class Book extends Product
{
    // Les propriétés de la classe (variables)
    private int $nbPage;
    private string $auteur;
    private string $edition;
    private string $isbn = 'Non renseigné';

    /**
     * Récupèrer la valeur : nbPage
     */ 
    public function getNbPage(): int
    {
        return $this->nbPage;
    }

    /**
     * Muter la valeur : nbPage
     * @return  self
     */ 
    public function setNbPage(int $nbPage): Book
    {
        $this->nbPage = $nbPage;

        return $this;
    }

    /**
     * Récupèrer la valeur : auteur
     */ 
    public function getAuteur(): string
    {
        return $this->auteur;
    }

    /**
     * Muter la valeur : auteur
     * @return  self
     */ 
    public function setAuteur(string $auteur): Book
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Récupèrer la valeur : edition
     */ 
    public function getEdition(): string
    {
        return $this->edition;
    }

    /**
     * Muter la valeur : edition
     * @return  self
     */ 
    public function setEdition(string $edition): Book
    {
        $this->edition = $edition;

        return $this;
    }

    /**
     * Récupèrer la valeur : isbn
     */ 
    public function getIsbn(): string
    {
        return $this->isbn;
    }

    /**
     * Muter la valeur : isbn
     * @return  self
     */ 
    public function setIsbn(string $isbn): Book
    {
        $this->isbn = $isbn;

        return $this;
    }
}
// Ne rien écrire après cette accolade