<?php
    namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
    class index extends AbstractController
    {
        public function aff_p1(): Response
        {
            return $this->render('pages/page01.html.twig', [

            ]);
        }

        public function aff_p2(): Response
        {
            return $this->render('pages/page02.html.twig', [

            ]);
        }

        public function aff_p3(): Response
        {
            return $this->render('pages/page03.html.twig', [

            ]);
        }

        public function aff_p4(): Response
        {
            return $this->render('pages/page04.html.twig', [

            ]);
        }

        public function aff_p5(): Response
        {
            return $this->render('pages/page05.html.twig', [

            ]);
        }
    }