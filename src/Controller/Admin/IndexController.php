<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin', name: "admin_")]
class IndexController extends AbstractController
{
    #[Route('/', name: 'index', defaults: ['_format' => 'html',], methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig');
    }

}