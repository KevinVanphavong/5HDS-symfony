<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function getHomepage(Request $request, ProductRepository $productRepository, UserRepository $userRepository)
    {
        return $this->render('homepage.html.twig', [
            'products' => $productRepository->findAll(),
            'users' => $userRepository->findAll(),
        ]);
    }
}