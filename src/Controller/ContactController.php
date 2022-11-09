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

    public function __construct(private readonly ContactRepository $contactRepository){

    }

    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $this->contactRepository->save($contact,true);
            $this->addFlash(
                'success',
                'Votre message est bien envoyé'
            );
       }
        return $this->render('contact/index.html.twig', [
            'title' => 'mon titre de  contact',
            'description' => ' Et voila une contact',
            'link_href' => 'app_contact',
            'form' => $form->createView()
        ]);
    }
}
