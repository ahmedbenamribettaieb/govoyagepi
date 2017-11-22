<?php
/**
 * Created by PhpStorm.
 * User: Ahmed
 * Date: 21/11/2017
 * Time: 05:26
 */

namespace GoVoyageBundle\Controller;


use GoVoyageBundle\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class HotelController extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $hotel = $em->getRepository('GoVoyageBundle:Users')->findAll();

        return $this->render('GoVoyageBundle:Hotel:index.html.twig', array(
            'hotel' => $hotel,
        ));
    }


    public function showAction()
    {

        $id = $this->getUser()->getId();
        $em = $this->getDoctrine()->getManager();

        $hotel = $em->getRepository('GoVoyageBundle:Users')->find($this->getUser()->getId());
        return $this->render('GoVoyageBundle:Hotel:show.html.twig', array(
            'hotel' => $hotel
        ));
    }

    public function editAction(Request $request, Users $hotel)
    {

        $editForm = $this->createForm('GoVoyageBundle\Form\HotelType', $hotel);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('hotel_edit', array('id' => $hotel->getId()));
        }

        return $this->render('GoVoyageBundle:Hotel:edit.html.twig', array(
            'hotel' => $hotel,
            'edit_form' => $editForm->createView()

        ));
    }
}