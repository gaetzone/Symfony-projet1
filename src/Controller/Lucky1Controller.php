<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class Lucky1Controller
{
    public function number()
    {
        $number = random_int(0, 100);
        
        return new Response(
                '<html><body>Lucky number: '.$number.'</body></html>'
                );
    }
}