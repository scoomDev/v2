<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use App\Entity\Article;

/**
 * Class HomeController
 * 
 * @Route("/")
 */
class HomeController extends Controller
{
    /**
     * @Route("home", name="homepage")
     */
    public function IndexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $articlesList = $em->getRepository(Article::class)->findByIsPublished('true');

        return $this->render('home/index.html.twig', [
            'articlesList' => $articlesList
        ]);
    }
}
