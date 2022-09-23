<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController
{
    public function number(): Response
    {
        #[Route('/lucky/number')]

     // $number = random_int(0, 100);
        $items = array("Coca", "Banh ngot", "C2", "Sting", "Redbull");
        $rand_item = $items[array_rand($items)];

        return new Response(
            '<html><body>Lucky gift: '.$rand_item.'</body></html>'
        );
    }

    public function getdate(): Response
    {
        #[Route('/lucky/getdate')]
        $today = "2022-09-14";

        return new Response(
            '<html><body>Today is: '.$today.'</body></html>'
        );
    }

    public function welcome(): Response
    {
        #[Route('/lucky/welcome')]
        $age = 
        $welcome_word = "GCD1002!";

        return $this->render('lucky/welcome.html.twig', ['welcome_word' => $welcome_word,
    ]);
    }
}




