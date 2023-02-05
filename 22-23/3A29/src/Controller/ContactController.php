<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Repository\ContactRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(): Response
    {
        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }

    #[Route('/addContact', name: 'add_contact')]
    public function addContact(ContactRepository $repository,Request $request){
        $contact= new Contact();
        $form= $this->createForm(ContactType::class,$contact);
        $form->handleRequest($request) ;
        if ($form->isSubmitted() && $form->isValid()){
            $repository->save($contact,true);
            #return  $this->redirectToRoute("add_contact");
            return  new Response("Success");
        }
        return $this->renderForm("contact/add.html.twig",array("contactForm"=>$form));
    }
}
