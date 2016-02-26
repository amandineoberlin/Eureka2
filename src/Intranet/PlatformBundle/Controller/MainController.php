<?php

namespace Intranet\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller {

    public function accueilAction() {
        return $this->render('IntranetPlatformBundle:Main:accueil.html.twig');
    }

}
