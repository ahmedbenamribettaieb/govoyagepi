<?php
/**
 * Created by PhpStorm.
 * User: Ahmed
 * Date: 21/11/2017
 * Time: 05:26
 */

namespace GoVoyageBundle\Controller;
use FOS\UserBundle\FOSUserBundle;




class HotelController extends Controller
{

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $hotel = $em->getRepository('GoVoyageBundle:Users')->findAll(['role'=>"ROLE_HOTEL"]);

        return $this->render('GoVoyageBundle:Hotel:index.html.twig', array(
            'Hotel' => $hotel,
        ));
    }
}