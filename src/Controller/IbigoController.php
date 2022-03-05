<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\IbigoProduct;
use App\Form\IbigoType;

class IbigoController extends AbstractController
{
    public function index(Request $request, ManagerRegistry $doctrine):Response
    {
       // get the user information and notifications somehow

       // the template path is the relative file path from `templates/`

       $ibigo = new IbigoProduct();
       $form = $this->createForm(IbigoType::class, $ibigo);

       //traitement formuilaire
       $form->handleRequest($request);
       if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();

            $em->persist($ibigo);
            $em->flush();
       }

       return $this->render('iBigo.html.twig', [
           "form" => $form->createView()
       ]);
    }
}