<?php
namespace App\Controller;       // on spécifie le namespace à laquelle appartient la classe Lucky1Controller

use Symfony\Component\HttpFoundation\Response;

class Lucky1Controller
{
    public function number()
    {
        $number = random_int(0, 100);
       
        return new Response(
            '<html><body>
            
            Lucky number: '.$number.'
            <br>
            Réponse du serveur: code '.Response::HTTP_FOUND.'

            </body></html>'
        );
    }
}