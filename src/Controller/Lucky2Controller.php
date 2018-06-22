<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
        echo 'Methode tata()';
        return $this->render('lucky2/index.html.twig', [
            'controller_name' => 'Lucky2Controller',
            'year' => $year,
            'slug' => $slug,
        ]);
    }

}
