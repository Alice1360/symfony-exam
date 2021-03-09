<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Repository\ContactRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request as Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
* @Route("/default", name="default_")
*/

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(ContactRepository $contactRepository): Response
    {
        $contacts = $contactRepository->findAll();//récupère les données dans la BdD

        return $this->render('default/index.html.twig', [
            'contacts' => $contacts,
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(EntityManagerInterface $entityManager, Request $request): Response
    {
        //Je commente le 3.2 pour pas avoir la donnée en boucle dans ma BdB ^^

        //$test = new Contact();
        //$test->setEmail('test@test.com');
        //$test->setSubject('Ceci est un test');
        //$test->setMessage("Un message de test, pouvant être long, ou non. Celui-ci ne l'est pas :) .");

        //$entityManager->persist($test);//utiliser que pour un nouvel objet pas de MAJ
        //$entityManager->flush();// met à jour, si elle n'est pas appelée pas de modif dans la BdD
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact, [
            'method' => 'POST',
            //'action' => $this->generateUrl('contacts_new'),
        ]);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) { // Si le formulaire est soumis + valide alors il l'enregistre
            
            $entityManager->persist($contact); //utiliser que pour un nouvel objet pas de MAJ et sert à enregistrer
            $entityManager->flush(); // met à jour, si elle n'est pas appeler pas de modif dans la BdD

            return $this->redirectToRoute('default_index');
        }



        return $this->render('default/contact.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/test/{email}")
     *
     * @param string $email
     * @param ContactRepository $contactRepository
     *
     * @return Response
     */
    public function test(string $email, ContactRepository $contactRepository): Response
    {
        $results = $contactRepository->searchEmail($email);
        dd($results);
    }
}
