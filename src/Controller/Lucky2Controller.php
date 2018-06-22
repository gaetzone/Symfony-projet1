<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class Lucky2Controller extends Controller
{
    /**
     * Matches /lucky2/*
     *
     * @Route("/lucky2/{slug}", name="lucky2_show")
     */
    public function toto($slug = 'home')
    {      
        // $slug = partie dynamique de l'URL (ex. pour /blog/aaa, $slug='aaa'
        echo 'Methode toto()';
        
        return $this->render('lucky2/index.html.twig', [
            'controller_name' => 'Lucky2Controller',
            'slug' => $slug,
        ]);
    }
    
    public function tata($year, $slug)
    {
        echo 'Methode tata() <br>';
        
        // Création de données au format json
        $status = Response::$statusTexts;
        $json_data = $this->json($status);
        
        // Affichage du resultat de la requete http
        $http_response = new Response();
        echo $http_response; echo '<br>';
        
        // Affichage du header de la requete http
        echo $http_response->headers; echo '<br>';
        // Affichage du code d'etat de la requete http
        echo $http_response->getStatusCode(); echo '<br>';
        
        return $this->render('lucky2/index.html.twig', [
            'controller_name' => 'Lucky2Controller',
            'year' => $year,
            'slug' => $slug,
            'json_data' => $json_data,
        ]);
    }

}
