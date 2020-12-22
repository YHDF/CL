<?php
namespace App\Controller\actors;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ActorController extends AbstractController{
 public function accueil() {
    return new Response(
        '<html><body>Actor</body></html>'
    );
 }

}