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
    public function index():Response
    {
        $ibigo = new IbigoProduct();
        $form = $this->createForm(IbigoType::class, $ibigo);

        return $this->render('iBigo.html.twig', [
            "form" => $form->createView()
        ]);
    }

    public function submit(Request $request, ManagerRegistry $doctrine):Response
    {
       //traitement formuilaire
        $ibigo = new IbigoProduct();
        $form = $this->createForm(IbigoType::class, $ibigo);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $doctrine->getManager();

            $em->persist($ibigo);
            $em->flush();
        }

        return $this->redirectToRoute('home');
    }
}