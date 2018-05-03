<?php

namespace App\Controller;

use App\Entity\Article;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ApiController
 * 
 * @Route("/api")
 */
class ApiController extends Controller
{
    /**
     * @Rest\Get(
     *      path = "/articles/list",
     *      name = "articles-list_show"
     * )
     * 
     * @Rest\View
     */
    public function ArticlesListAction()
    {
        $articlesList = $this->getDoctrine()->getRepository(Article::class)->findAll();
        return $articlesList;
    }

}