<?php

class Router
{

    // Propriétés
    private string $request;

    // Constructeur
    public function __construct()
    {
        $this->request = $_SERVER["REQUEST_METHOD"]; // Récupère la méthode HTTP
    }

    public function handleRequest() 
    {
        switch ($this->request) { // On vérifie la méthode HTTP
            case 'GET': // En cas de requête GET
                return $this->getRequest();
                break;
            case 'POST': // En cas de requête POST
                return "Requête POST effectuée";
                break;
            default: // Pour tout autre cas en dehors de GET et POST
                return "Requête non autorisée";
                break;
        }
    }

    public function getRequest()
    {
        $url = $_SERVER["REQUEST_URI"]; // Récupère l'URL
        return $url;
    }
}
// Ne rien écrire après cette accolade