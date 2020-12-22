<?php
namespace App\Controller\movies;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MovieController extends AbstractController{
 public function accueil() {
    return new Response(
        '<html><body>Movie</body></html>'
    );
 }

}