<?php

namespace Core\ContactBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    public function indexAction()
    {
        return $this->render('CoreContactBundle:Contact:index.html.twig');
    }
}
