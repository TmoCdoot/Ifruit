<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\IbigoProduct;
use App\Form\IbigoType;

class IsuperOrdiController extends AbstractController
{
    public function index(Request $request, ManagerRegistry $doctrine):Response
    {
       // get the user information and notifications somehow

       // the template path is the relative file path from `templates/`
       return $this->render('iSuperOrdi.html.twig');
    }
}