<?php
/**
 * Homepage Controller.
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class HomepageController.
 *
 * @package App\Controller
 *
 * @Route("/")
 */
class HomepageController extends AbstractController
{
    /**
     * Index action.
     *
     * @return \Symfony\Component\HttpFoundation\Response HTTP response
     *
     * @Route(
     *     "/",
     *     methods={"GET"},
     *     name="homepgae_index",
     * )
     */
    public function index(): Response
    {
        return $this->render(
            'homepage/index.html.twig'
        );
    }
}