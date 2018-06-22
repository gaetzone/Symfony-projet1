<?php
namespace App\Controller;       // on spécifie le namespace à laquelle appartient la classe Lucky1Controller

use Symfony\Component\HttpFoundation\Response;
use Psr\Log\LoggerInterface;

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
            <br>
            </body></html>'
        );
    }
    
    public function getLoggerInterface(LoggerInterface $logger)
    {
        
        echo $logger->info('helloooooo'); echo '<br>';
        
        return new Response(
            '<html><body>
                hello
            
            </body></html>'
                );
    }
}