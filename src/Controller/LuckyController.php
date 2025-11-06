<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController{
    #[Route('/lucky/number')]
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }

    #[Route('/lucky/string')]
    public function string(): Response
    {
        $string = 'Lucky String';

        return $this->render('lucky/string.html.twig', [
            'string' => $string,
        ]);
    }

    #[Route('/lucky/image')]
    public function image(): Response
    {
        return $this->render('lucky/image.html.twig');
    }
}