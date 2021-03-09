<?php

namespace App\Controller;

use Doctrine\DBAL\Connection as DBConnection;
use Symfony\Component\HttpFoundation\{Request, Response};
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PageController extends AbstractController {


  public function __construct(
    DBConnection $db
  ) {
    $this->db = $db;
  }

  /**
   * @param Request $request
   * @return Response
   */
  public function viewIndex(Request $request) {

    return $this->render('page/page-front.html.twig', [
      'title' => 'Rose Nichols',
    ]);
  }

  /**
   * @param Request $request
   * @return Response
   */
  public function viewSkills(Request $request) {

    return $this->render('page/page-skills.html.twig', [
      'title' => 'Feedback',
      'content' => '',
      'menu' => [
        'one' => 'two',
      ]
    ]);
  }
}
