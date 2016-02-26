<?php

namespace Intranet\PlatformBundle\Controller;

//Classes Symfony à utiliser
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
//Entités à utiliser
use Intranet\PlatformBundle\Entity\Demande;

class MainController extends Controller {

    public function accueilAction() {
        return $this->render('IntranetPlatformBundle:Main:accueil.html.twig');
    }

    public function addAction(Request $request) {
// On crée un objet Demande
        $demande = new Demande();

// On crée le FormBuilder grâce au service form factory
        $formBuilder = $this->get('form.factory')->createBuilder('form', $demande);

// On ajoute les champs de l'entité que l'on veut à notre formulaire
        $formBuilder
                ->add('dateDebut', 'date')
                ->add('dateFin', 'date')
                ->add('description', 'textarea')
                ->add('save', 'submit')
        ;

        // À partir du formBuilder, on génère le formulaire
        $form = $formBuilder->getForm();

// On fait le lien Requête <-> Formulaire
// À partir de maintenant, la variable $demande contient les valeurs entrées dans le formulaire par le visiteur
        $form->handleRequest($request);

// On vérifie que les valeurs entrées sont correctes
        if ($form->isValid()) {
// On l'enregistre notre objet $demande dans la base de données, par exemple
            $em = $this->getDoctrine()->getManager();
            $em->persist($demande);
            $em->flush();

            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirect($this->generateUrl('intranet_accueil'));
        }
// On passe la méthode createView() du formulaire à la vue
// afin qu'elle puisse afficher le formulaire toute seule
        return $this->render('IntranetPlatformBundle:Main:add.html.twig', array(
                    'form' => $form->createView(),
        ));
    }

    public function showAllAction() {

        // On récupère le repository
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('IntranetPlatformBundle:Demande')
        ;

        $demandes = $repository->findAll();

        return $this->render('IntranetPlatformBundle:Main:showAll.html.twig', array(
                    'demandes' => $demandes
        ));
    }

    public function showOneAction($id) {

        // On récupère le repository
        $repository = $this->getDoctrine()
                ->getManager()
                ->getRepository('IntranetPlatformBundle:Demande')
        ;

        $maDemande = $repository->find($id);

        return $this->render('IntranetPlatformBundle:Main:showOne.html.twig', array(
                    'maDemande' => $maDemande
        ));
    }

    public function editAction($id, Request $request) {

        $em = $this->getDoctrine()->getManager();
        $demande = $em->getRepository('IntranetPlatformBundle:Demande')->find($id);
        if (!$demande) {
            throw $this->createNotFoundException(
                    'No news found for id ' . $id
            );
        }

        $form = $this->createFormBuilder($demande)
                ->add('dateDebut', 'date')
                ->add('dateFin', 'date')
                ->add('description', 'textarea')
                ->add('save', 'submit')
                ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em->flush();
            return new Response('Demande correctement mise à jour !');
        }

        $build['form'] = $form->createView();

        return $this->render('IntranetPlatformBundle:Main:edit.html.twig', $build);
    }

}
