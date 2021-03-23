<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Comment;
use App\Entity\PostLike;
use App\Form\CommentType;
use App\Repository\ArticleRepository;
use App\Repository\PostLikeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectManager;
use Knp\Bundle\PaginatorBundle\Definition\PaginatorAwareInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Knp\Component\Pager\PaginatorInterface;

class BlogController extends AbstractController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;

    }

    /**
     * @Route("/blog", name="blog")
     */
    public function index(Request $request): Response
    {

        $repo = $this->getDoctrine()->getRepository(Article::class);
        $articles = $repo->findAll();




        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
            'articles' => $articles
        ]);
    }

    /**
     * @Route("/", name="home")
     */

    public function home()
    {
        return $this->render('blog/home.html.twig');
    }

    /**
     * @Route("/blog/{id}", name="blog_show")
     */
    public function show($id, Request $request, EntityManagerInterface $manager): Response
    {

        $art = $this->entityManager->getRepository(Article::class)->find($id);
        if (!$art) {
            return $this->redirectToRoute('blog');
        }
        $com = new Comment();
        $form = $this->createForm(CommentType::class, $com);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $com->setCreatedAt(new \DateTime());
            $com->setArticle($art);

            $manager->persist($com);
            $manager->flush();
            return $this->redirectToRoute('blog_show', ['id' => $art->getId()
            ]);
        }

        return $this->render('blog/show.html.twig', [
            'article' => $art,
            'commentForm' => $form->createView()
        ]);
    }


    /**
     * @Route("/blog/{id}/like", name="blog_like")
     */
    /*
     * Permet de liker un article
     * on va return au format json
     */
    public function like(Article $article, EntityManagerInterface $manager, PostLikeRepository $likeRepository): Response
    {

        $user = $this->getUser();

        if (!$user) return $this->json([
            'code' => 403,
            'message' => 'il faut vous connecter'
        ], 403);

        if ($article->isLikedByUser($user)) {

            $like = $likeRepository->findOneBy([
                'post' => $article,
                'user' => $user
            ]);

            $manager->remove($like);
            $manager->flush();

            return $this->json([
                'code' => 200,
                'message' => 'like bien supprimé',
                'likes' => $likeRepository->count([
                    'post' => $article])
            ], 200);

        }

        $like = new PostLike();
        $like->setPost($article)
            ->setUser($user);

        $manager->persist($like);
        $manager->flush();

        return $this->json([
            'code' => 200,
            'message' => 'like ajouté',
            'likes' => $likeRepository->count(['post' => $article])
        ], 200);

    }


}
