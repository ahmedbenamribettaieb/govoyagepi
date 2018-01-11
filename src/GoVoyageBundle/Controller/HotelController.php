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

    public function Listhotel2Action( Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $queryBuilder = $em->getRepository('GoVoyageBundle:Users')->createQueryBuilder('bp');
        $hotel = $em->getRepository('GoVoyageBundle:Users')->findAll();
        $x=true;

        if ($request->query->getAlnum('filter_nom')) {
            $queryBuilder->where('bp.nom LIKE :nom')
                ->setParameter('nom', '%' . $request->query->getAlnum('filter_nom') . '%');
            $x=false ;
        }
        $query = $queryBuilder->getQuery();
        if($x){
            $paginator =$this->get('knp_paginator');
            $res=$paginator->paginate($hotel,
                $request->query->getInt('page',1),
                $request->query->getInt('Limit',2)
            );
        }else{
            $paginator =$this->get('knp_paginator');
            $res=$paginator->paginate($query,
                $request->query->getInt('page',1),
                $request->query->getInt('Limit',2)
            );
            $x = true;
        }

        return $this->render('GoVoyageBundle:Hotel:listehotel2.html.twig', array(
            'hotel' => $res,
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