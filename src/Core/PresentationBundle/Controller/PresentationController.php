<?php

namespace Core\PresentationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PresentationController extends Controller
{
    public function indexAction()
    {
        return $this->render('CorePresentationBundle:Presentation:index.html.twig');
    }
}
