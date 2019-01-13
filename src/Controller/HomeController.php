<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function index()
    {
       return new Response(
            '<html><body>Lucky number: yo</body></html>'
        );
    }

    public function hello()
    {
      return $this->render('homepage.html.twig');
    }
}

?>
