<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyNumberController extends AbstractController
{
    #[Route('/lucky/number', name: 'lucky_number')]
    // public function index(): Response
    public function number(): Response 
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky Number: '.$number.'</body></html>'
        
    );
        // return $this->render('lucky_number/index.html.twig', [
        //     'controller_name' => 'LuckyNumberController',
        // ]);
    }
}
