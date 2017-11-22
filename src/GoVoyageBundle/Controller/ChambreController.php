<?php

namespace GoVoyageBundle\Controller;

use GoVoyageBundle\Entity\Chambre;
use GoVoyageBundle\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Chambre controller.
 *
 */
class ChambreController extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $chambres = $em->getRepository('GoVoyageBundle:Chambre')->findBy(["hotelChFk"=>$this->getUser()->getId()]);

        return $this->render('GoVoyageBundle:chambre:index.html.twig', array(
            'chambres' => $chambres,
        ));
    }


    function newAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $chambre = new Chambre();
        if ($request->isMethod('POST')) {
            $chambre->setType($request->get('type'));
            $chambre->setPrix($request->get('prix'));

            $chambre->setHotelChFk($user = $this->getUser()->getId());
            $em = $this->getDoctrine()->getManager();
            $em->persist($chambre);
            $em->flush();


        }
        return $this->render("GoVoyageBundle:chambre:new.html.twig", array());
    }
    public function showAction(Chambre $chambre)
    {


        return $this->render('GoVoyageBundle:chambre:show.html.twig', array(
            'chambre' => $chambre
        ));
    }


    public function editAction(Request $request, Chambre $chambre)
    {

        $editForm = $this->createForm('GoVoyageBundle\Form\ChambreType', $chambre);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('chambre_edit', array('id' => $chambre->getId()));
        }

        return $this->render('GoVoyageBundle:chambre:edit.html.twig', array(
            'chambre' => $chambre,
            'edit_form' => $editForm->createView()

        ));
    }


    public function deleteAction(Chambre $chambre)
    {
        $em=$this->getDoctrine()->getManager();
        $chambre=$em->getRepository("GoVoyageBundle:Chambre")->find($chambre->getId());
        $em->remove($chambre);
        $em->flush();
        return $this->redirectToRoute("chambre_index");
    }

    public function listAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $chambre = $em->getRepository('GoVoyageBundle:Chambre')->findBy(['hotelChFk'=>$id]);
        $hotel = $em->getRepository('GoVoyageBundle:Users')->find($id);
        return $this->render('GoVoyageBundle:chambre:chambre_list.html.twig', array(
            'chambre' => $chambre,
            'hotel'=>$hotel,
        ));
    }

}
