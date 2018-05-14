<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Category;
use App\Entity\Platform;
use App\Form\ArticleType;
use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class ApiController
 * 
 * @Route("/api")
 */
class ApiController extends FOSRestController
{
    /**
     * @Rest\Get(
     *      path = "/articles/list",
     *      name = "articles-list_show"
     * )
     * 
     * @Rest\View(StatusCode=200)
     */
    public function ArticlesListAction()
    {
        $articlesList = $this->getDoctrine()->getRepository(Article::class)->findAllArticles();
        return $articlesList;
    }

    /**
     * @Rest\Post(
     *      path = "/articles/create",
     *      name = "articles-create"
     * )
     * 
     * @Rest\View(StatusCode=201)
     */
    public function ArticlesCreateAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $data = $this->get('jms_serializer')->deserialize($request->getContent(), 'array', 'json');
        $article = new Article;
        $article->setTitle($data['title']);
        $article->setContent($data['content']);
        $article->setAuthor($data['author']);
        $article->setImage($data['image']);
        $article->setCreatedAt(new \DateTime($data['createdAt']));
        $article->setUpdatedAt(new \DateTime($data['updatedAt']));
        foreach($data['platforms'] as $el) {
            $platform = $em->getRepository(Platform::class)->findOneByName($el[0]['name']);
            $article->addPlatform($platform);
        }
        
        foreach($data['categories'] as $el) {
            $category = $em->getRepository(Category::class)->findOneByName($el[0]['name']);
            $article->addCategory($category);
        }
        $article->setIsPublished($data['isPublished']);

        $em->persist($article);
        $em->flush();
        
        return $this->view(
            $article,
            Response::HTTP_CREATED
        );
    }

    /**
     * @Rest\Post(
     *      path = "/articles/toggleIsPublished/{id}",
     *      name = "toggle-status"
     * )
     * 
     * @Rest\View(StatusCode=201)
     */
    public function ToggleStatusAction(int $id)
    {
        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository(Article::class)->findOneById($id);

        if ($article->getIsPublished() === true) {
            $article->setIsPublished(false);
        } else {
            $article->setIsPublished(true);
        }

        $em->flush();

        return $this->view(
            $article->getIsPublished(),
            Response::HTTP_CREATED
        );
    }

    /**
     * @Rest\Delete(
     *      path = "/articles/delete/{id}",
     *      name = "articles-delete"
     * )
     * 
     * @Rest\View(StatusCode=204)
     */
    public function ArticlesDeleteAction(int $id)
    {
        $em = $this->getDoctrine()->getManager();
        $article = $em->getRepository(Article::class)->findOneById($id);
        $em->remove($article);
        $em->flush();

        return $this->view(
            $article,
            Response::HTTP_CREATED
        );
    }

    /**
     * @Rest\Get(
     *      path = "/categories/list",
     *      name = "categories-list_show"
     * )
     * 
     * @Rest\View(StatusCode=200)
     */
    public function CategoriesListAction()
    {
        $categoriesList = $this->getDoctrine()->getRepository(Category::class)->findAll();
        return $categoriesList;
    }

    /**
     * @Rest\Post(
     *      path = "/categories/create",
     *      name = "category-create"
     * )
     * 
     * @Rest\View(StatusCode=201)
     */
    public function CreateCategoryAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $data = $this->get('jms_serializer')->deserialize($request->getContent(), 'array', 'json');
        $category = new Category();

        $category->setName($data['name']);

        $em->persist($category);
        $em->flush();

        return $this->view(
            $category,
            Response::HTTP_CREATED
        );
    }

    /**
     * @Rest\Put(
     *      path = "/categories/update",
     *      name = "category-update"
     * )
     * 
     * @Rest\View(StatusCode=201)
     */
    public function UpdateCategoryAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $data = $this->get('jms_serializer')->deserialize($request->getContent(), 'array', 'json');
        $category = $em->getRepository(Category::class)->findOneById($data['id']);
        $category->setName($data['name']);
        $em->flush();

        return $this->view(
            $category,
            Response::HTTP_CREATED
        );
    }

    /**
     * @Rest\Delete(
     *      path = "/categories/delete/{id}",
     *      name = "category-delete"
     * )
     * 
     * @Rest\View(StatusCode=204)
     */
    public function DeleteCategoryAction(int $id)
    {
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository(Category::class)->findOneById($id);
        $em->remove($category);
        $em->flush();

        return $this->view(
            $category,
            Response::HTTP_CREATED
        );
    }

    /**
     * @Rest\Get(
     *      path = "/platforms/list",
     *      name = "platforms-list_show"
     * )
     * 
     * @Rest\View(StatusCode=200)
     */
    public function PlatformsListAction()
    {
        $platforms = $this->getDoctrine()->getRepository(Platform::class)->findAllPlatforms();
        return $platforms;
    }

    /**
     * @Rest\Post(
     *      path = "/platforms/create",
     *      name = "platform-create"
     * )
     * 
     * @Rest\View(StatusCode=201)
     */
    public function CreatePlatformAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $data = $this->get('jms_serializer')->deserialize($request->getContent(), 'array', 'json');
        $platform = new Platform();

        $platform->setName($data['name']);

        $em->persist($platform);
        $em->flush();

        return $this->view(
            $platform,
            Response::HTTP_CREATED
        );
    }

    /**
     * @Rest\Put(
     *      path = "/platforms/update",
     *      name = "platform-update"
     * )
     * 
     * @Rest\View(StatusCode=201)
     */
    public function UpdatePlatformAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $data = $this->get('jms_serializer')->deserialize($request->getContent(), 'array', 'json');
        $platform = $em->getRepository(Platform::class)->findOneById($data['id']);
        $platform->setName($data['name']);
        $em->flush();

        return $this->view(
            $platform,
            Response::HTTP_CREATED
        );
    }

    /**
     * @Rest\Delete(
     *      path = "/platforms/delete/{id}",
     *      name = "platform-delete"
     * )
     * 
     * @Rest\View(StatusCode=204)
     */
    public function DeletePlatformAction(int $id)
    {
        $em = $this->getDoctrine()->getManager();
        $platform = $em->getRepository(Platform::class)->findOneById($id);
        $em->remove($platform);
        $em->flush();

        return $this->view(
            $platform,
            Response::HTTP_CREATED
        );
    }

}
