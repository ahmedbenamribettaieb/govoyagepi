<?php
/**
 * Created by PhpStorm.
 * User: Ghassen
 * Date: 20/11/2017
 * Time: 19:50
 */

namespace GoVoyageBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GoVoyageBundle\Entity\Voyagepersonalise;
use Symfony\Component\HttpFoundation\Request;

class BackendController extends Controller
{
    public function testAction()
    {
        return $this->render('GoVoyageBundle:Admin:index_admin.html.twig');
    }

    public function vpAction()
    {
        $user = $this->getUser()->getPrenom();
        $em = $this->getDoctrine()->getManager();
        $voyagepersonalises = $em->getRepository('GoVoyageBundle:Voyagepersonalise')->findAll();
        return $this->render('GoVoyageBundle:Admin:voyagepersonaliseadmin.html.twig', array(
            'voyagepersonalises' => $voyagepersonalises,'u' => $user
        ));
    }
    public function ClientAction()
    {
        $user = $this->getUser()->getPrenom();
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('GoVoyageBundle:Users')->findAll();

        return $this->render('GoVoyageBundle:Admin:Clientadmin.html.twig', array(
            'users' => $users,'u' => $user
        ));
    }
    public function GuideAction()
    {
        $user = $this->getUser()->getPrenom();
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('GoVoyageBundle:Users')->findAll();

        return $this->render('GoVoyageBundle:Admin:Guidelistadmin.html.twig', array(
            'users' => $users,'u' => $user
        ));
    }
    public function vpSupprAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $vol=$em->getRepository("GoVoyageBundle:Voyagepersonalise")->find($id);
        $em->remove($vol);
        $em->flush();
        return $this->redirectToRoute('Backend_vp');
    }
    public function listVolAdminAction()
    {
        $user = $this->getUser()->getPrenom();
        $em=$this->getDoctrine()->getManager();
        $vols=$em->getRepository("GoVoyageBundle:Vol")->findAll();
        return $this->render('GoVoyageBundle:Admin:List_vol_admin.html.twig',array('vols'=>$vols , 'u' => $user));
    }

    public function SupprVolAdminAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $vol=$em->getRepository("GoVoyageBundle:Vol")->find($id);
        $em->remove($vol);
        $em->flush();
        return $this->redirectToRoute('Backend_list_vol');
    }


    public function guideSupprAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $vo=$em->getRepository("GoVoyageBundle:Users")->find($id);
        $em->remove($vo);
        $em->flush();
        return $this->redirectToRoute('Backend_guide');
    }
    public function clientSupprAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $vo=$em->getRepository("GoVoyageBundle:Users")->find($id);
        $em->remove($vo);
        $em->flush();
        return $this->redirectToRoute('Backend_client');
    }
    public function voitureSupprAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $vo=$em->getRepository("GoVoyageBundle:Voiture")->find($id);
        $em->remove($vo);
        $em->flush();
        return $this->redirectToRoute('Backend_voiture_list');
    }

    public function listvoitureAdminAction()
    {
        $user = $this->getUser()->getPrenom();
        $em=$this->getDoctrine()->getManager();
        $vols=$em->getRepository("GoVoyageBundle:Voiture")->findAll();
        return $this->render('GoVoyageBundle:Admin:Voiture_Admin.html.twig',array('vols'=>$vols , 'u' => $user));
    }
    public function hotelAction()
    {
        $user = $this->getUser()->getPrenom();
        $em = $this->getDoctrine()->getManager();
        $hotel = $em->getRepository('GoVoyageBundle:Users')->findAll();
        return $this->render('GoVoyageBundle:Admin:hoteladmin.html.twig', array(
            'hotel' => $hotel,'u' => $user
        ));
    }
    public function hotelSupprAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $hotel=$em->getRepository("GoVoyageBundle:Users")->find($id);
        $em->remove($hotel);
        $em->flush();
        return $this->redirectToRoute('Backend_hotel');
    }
}