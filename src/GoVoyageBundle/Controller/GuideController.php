<?php
/**
 * Created by PhpStorm.
 * User: Ghassen
 * Date: 19/11/2017
 * Time: 02:05
 */

namespace GoVoyageBundle\Controller;


use GoVoyageBundle\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GuideController extends Controller
{
    public function AffAction(){
        $user = $this->getUser()->getId();
        $em=$this->getDoctrine()->getManager();
        $guide=$em->getRepository("GoVoyageBundle:Users")->find($user);
        return $this->render('GoVoyageBundle:Guide:GuideShow.html.twig',array("g"=>$guide));
    }

    public function ListvpAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $voyagepersonalises = $em->getRepository('GoVoyageBundle:Voyagepersonalise')->findAll();
        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $paginator =$this->get('knp_paginator');
        $res=$paginator->paginate($voyagepersonalises,
            $request->query->getInt('page',1),
            $request->query->getInt('Limit',20)
        );
        return $this->render('GoVoyageBundle:Guide:GuideVpShow.html.twig', array(
            'voyagepersonalises' => $res));
    }

    public function PostulerAction($id){
        $em=$this->getDoctrine()->getManager();
        $vo=$em->getRepository("GoVoyageBundle:Voyagepersonalise")->find($id);
        $vo->setIdGuideFk($user = $this->getUser()->getId());
        $em->persist($vo);
        $em->flush();
        return $this->redirectToRoute('AfficherGuideVpList');
    }

}