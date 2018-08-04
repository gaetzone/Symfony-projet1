<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;


class Lucky2Controller extends Controller
{
    /**
    * @Route("/lucky/numberr")
    */
    public function toutou()
    {
        echo 'Methode toutou()<br><br>';
        
        $number = random_int (0, 100);
        
        $response = new Response('<html><body>Lucky number: '.$number.'</body></html>');
        return $response;
    }
    
    /**
     * Matches /*
     * @Route("/", name="titi")
     */
    public function titi(Request $request)
    {
        echo 'Methode titi()<br><br>';
        
        echo '$request = '.$request; echo '<br><br>';
        
        $response = new Response('Helloooooooo ', Response::HTTP_OK);
        echo '$response = '.$response; echo '<br><br>';
        
        return $this->render('lucky2/index.html.twig', [
                'controller_name' => 'Lucky2Controller',
        ]);
    }
    
    /**
     * Matches /lucky2/*
     * @Route("/lucky2/{slug}", name="lucky2_show")
     */
    public function toto(Request $request, $slug = 'home')
    {      
        // $slug = partie dynamique de l'URL (ex. pour /blog/aaa, $slug='aaa'
        echo 'Methode toto()<br><br>';
        
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
    
    /**
     * @Route("/lucky2/number/{max}")
     */
    public function number($max, LoggerInterface $logger)
    {
        echo 'Methode number()';
        
        $message = $logger->info('We are logging!');
        
        return $this->render('lucky2/index.html.twig', [
            'message' => $message,
        ]);
    }

}
