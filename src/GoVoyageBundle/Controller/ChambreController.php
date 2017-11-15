<?php

namespace GoVoyageBundle\Controller;

use GoVoyageBundle\Entity\Chambre;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Chambre controller.
 *
 */
class ChambreController extends Controller
{
    /**
     * Lists all chambre entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $chambres = $em->getRepository('GoVoyageBundle:Chambre')->findAll();

        return $this->render('chambre/index.html.twig', array(
            'chambres' => $chambres,
        ));
    }

    /**
     * Finds and displays a chambre entity.
     *
     */
    public function showAction(Chambre $chambre)
    {

        return $this->render('chambre/show.html.twig', array(
            'chambre' => $chambre,
        ));
    }
}
