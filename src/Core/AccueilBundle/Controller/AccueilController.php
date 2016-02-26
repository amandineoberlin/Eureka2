<?php

namespace Core\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AccueilController extends Controller
{
    public function indexAction()
    {
        return $this->render('CoreAccueilBundle:Accueil:index.html.twig');
    }
}
