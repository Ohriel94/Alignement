<?php
    namespace App\Controller;
    use Symfony\Component\HttpFoundation\Response;
    class index
    {
        public function default(): Response
        {
            
            return new Response(
                '<html><h1>Index.php</h1>
                <p>Bienvenue sur la page index.php</p>
                </html>'
            );
        }
    }
