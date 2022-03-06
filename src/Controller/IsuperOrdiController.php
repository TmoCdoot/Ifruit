<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\IsuperOrdiProduct;
use App\Form\IsuperOrdiType;

class IsuperOrdiController extends AbstractController
{
    public function index(Request $request, ManagerRegistry $doctrine):Response
    {
       return $this->render('iSuperOrdi.html.twig');
    }
}