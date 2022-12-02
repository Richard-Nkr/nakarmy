<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DepistageController extends AbstractController
{
    /**
     * @Route("/depistage", name="depistage")
     */
    public function index(): Response
    {
        return $this->render('depistage/index.html.twig', [
            'controller_name' => 'DepistageController',
        ]);
    }
}
