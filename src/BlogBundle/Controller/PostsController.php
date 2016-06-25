<?php

namespace BlogBundle\Controller;

use BlogBundle\Repository\PostRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class PostsController
{
  protected $posts;

  public function __construct(PostRepository $postRepository)
  {
    $this->posts = $postRepository;
  }


  /**
   * GET /posts
   */
  public function getPostsAction()
  {
    return new JsonResponse($this->posts->findAll());
  }

  /**
   * GET /posts/{id}
   */
  public function getPostAction($id)
  {
    return new JsonResponse($this->posts->find($id));
  }
}
