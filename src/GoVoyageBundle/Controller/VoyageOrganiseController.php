<?php

namespace GoVoyageBundle\Controller;


use GoVoyageBundle\Entity\Voyageorganise;
use GoVoyageBundle\Form\VoyageOrgForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;



class VoyageOrganiseController extends Controller
{

    public function DetailsAction(Request $request, $idVoyage)
    {
        $em = $this->getDoctrine()->getManager();
        $voyage = $em->getRepository("GoVoyageBundle:Voyageorganise")->find($idVoyage);

        return $this->render('GoVoyageBundle:VoyageOrganise:DetailsVoyOrg.html.twig', array("voyage" => $voyage));
    }


    public function AjouterVoyageOrgAction(Request $request)
    {


        $voyage = new Voyageorganise();

        if ($request->isMethod('POST')) {
            $voyage->setDestination($request->get('destination'));
            $voyage->setDatedebutvoy($request->get('date depart'));
            $voyage->setDatefinvoy($request->get('date arriv'));
            $voyage->setDatelimiteres($request->get('date limite'));
            $voyage->setPrix($request->get('prix'));
            $voyage->setNbreplacesdisp($request->get('nbrdispo'));
            $voyage->setNbreplacesres($request->get('nbrreserv'));
            $voyage->setDescription($request->get('description'));
            $voyage->setImagevoyorg($request->get('image'));
            $em = $this->getDoctrine()->getManager();
            $em->persist($voyage);
            $em->flush();
            return $this->redirectToRoute('Afficher_Voyage_Org_Agence');
        }

        return $this->render('GoVoyageBundle:VoyageOrganise:AjouterVoyageOrg.html.twig');
    }


    public function AfficherTousVoyagesAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $voyage = $em->getRepository("GoVoyageBundle:Voyageorganise")->findAll();
        if ($request->isMethod('POST')) {

            $voyage = $em->getRepository("GoVoyageBundle:VoyageOrganise")->findBy(array('dest' => $voyage->getDestination()));
        }
        return $this->render('GoVoyageBundle:VoyageOrganise:TousVoyg.html.twig', array("voyages" => $voyage));

    }


    public function ModifierVoyageOrgAction(Request $request, $idVoyage)
    {
        $em = $this->getDoctrine()->getManager();
        $voyage = $em->getRepository("GoVoyageBundle:Voyageorganise")->find($idVoyage);
        if ($request->isMethod('POST')) {
            $voyage->setDestination($request->get('destination'));
            $voyage->setDatedebutvoy($request->get('date depart'));
            $voyage->setDatefinvoy($request->get('date arriv'));
            $voyage->setDatelimiteres($request->get('date limite'));
            $voyage->setPrix($request->get('prix'));
            $voyage->setDescription($request->get('description'));
            $voyage->setImagevoyorg($request->get('image'));
            $em = $this->getDoctrine()->getManager();
            $em->persist($voyage);
            $em->flush();
            return $this->redirectToRoute('Afficher_Voyage_Org_Agence');
        }
        return $this->render('GoVoyageBundle:VoyageOrganise:ModifierVoyageOrg.html.twig', array("voyage" => $voyage));

    }

    public function SupprimerVoyageOrgAction($idVoyage)
    {
        $em = $this->getDoctrine()->getManager();
        $voyage = $em->getRepository("GoVoyageBundle:Voyageorganise")->find($idVoyage);
        $em->remove($voyage);
        $em->flush();
        return $this->redirectToRoute('Afficher_Voyage_Org_Agence');
    }

    public function AfficherVOAgAction()
    {

        $em = $this->getDoctrine()->getManager();
        $voyage = $em->getRepository("GoVoyageBundle:Voyageorganise")->findAll();

        return $this->render('GoVoyageBundle:VoyageOrganise:AfficherVoyageAgence.html.twig', array("voyages" => $voyage));


    }
}
