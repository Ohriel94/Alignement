<?php
    namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Cookie;
    class index extends AbstractController
    {
        public function aff_p1(): Response
        {
            return $this->render('pages/page01.html.twig', [

            ]);
        }
        
    }