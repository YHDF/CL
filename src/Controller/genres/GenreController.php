<?php
namespace App\Controller\genres;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GenreController extends AbstractController{
 public function accueil() {
    return new Response(
        '<html><body>Genre</body></html>'
    );
 }

}