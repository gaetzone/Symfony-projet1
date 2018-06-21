<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Lucky2Controller extends Controller
{
    /**
     * @Route("/lucky2", name="lucky2")
     */
    public function index()
    {
        return $this->render('lucky2/index.html.twig', [
            'controller_name' => 'Lucky2Controller',
        ]);
    }
}
