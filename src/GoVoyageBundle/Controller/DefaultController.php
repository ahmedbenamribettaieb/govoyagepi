<?php

namespace GoVoyageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GoVoyageBundle:Default:index.html.twig');
    }
    public function chAction()
    {
        return $this->render('GoVoyageBundle:chambre:layout_template_chambre.html.twig');
    }

    public function extAction()
    {
        return $this->render('GoVoyageBundle::layout_template.html.twig');
    }
    public function ghassenAction()
    {
        return $this->render('GoVoyageBundle:Vol:vol_layout.html.twig');
    }
}
