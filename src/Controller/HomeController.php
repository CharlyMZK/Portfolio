<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Project;
class HomeController extends Controller
{
     /**
      * @Route("/")
      */
    public function show()
    {
        $projects = $this->getDoctrine()
        ->getRepository(Project::class)
        ->findAll();

        return $this->render('home/home.html.twig', ['projects'=>$projects]);
    }
}

?>