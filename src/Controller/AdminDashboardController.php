<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

    /**
     * @Route("/admin")
     */
class AdminDashboardController extends AbstractController
{
    /**
     * @Route("/", name="AdminPage")
     */
    public function index()
    {
        return $this->render('admin/index.html.twig', [
          
        ]);
    }
}
