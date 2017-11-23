<?php
/**
 * Created by PhpStorm.
 * User: Ghassen
 * Date: 19/11/2017
 * Time: 02:05
 */

namespace GoVoyageBundle\Controller;


use DateTime;
use GoVoyageBundle\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GuideController extends Controller
{
    public function AffAction(){
        $user = $this->getUser()->getId();
        $em=$this->getDoctrine()->getManager();
        $guide=$em->getRepository("GoVoyageBundle:Users")->find($user);
        $date = new DateTime("now");
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

    public function PostulerAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $vo=$em->getRepository("GoVoyageBundle:Voyagepersonalise")->find($id);
        $userid = $this->getUser()->getId();
        if($user = $this->getUser()->get_the_role() == "ROLE_GUIDE")
        {
        $vo->setIdGuideFk($userid);
        $em->persist($vo);
        $em->flush();
        }
        $message = \Swift_Message::newInstance()
            ->setSubject('Validation')
            ->setFrom('jemaighass@gmail.com')
            ->setTo('ghassen.jemai@esprit.tn')
            ->setContentType('text/html')
            ->setBody('Vous avez Postuler dans un voyage personnalisé');
        $this->get('mailer')->send($message);

        return $this->redirectToRoute('AfficherGuideVpList');
    }

    public function EditDataAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $vo=$em->getRepository("GoVoyageBundle:Users")->find($this->getUser()->getId());
        if($request->isMethod('POST')){

            $vo->setNom($request->get('Nom'));
            $vo->setPrenom($request->get('Prenom'));
            $vo->setUsername($request->get('username'));

            $d1 = new \DateTime($request->get('datenaissance'));
            $d1->format('Y-m-d');
            $vo->setDatenaissence($d1);

            $vo->setEmail($request->get('mail'));
            $vo->setPassword($request->get('pass'));
            $vo->setNumtel($request->get('numtel'));
            $vo->setAdresse($request->get('adresse'));
            $vo->setCin($request->get('cin'));
            $em->persist($vo);
            $em->flush();
            return $this->redirectToRoute('AfficherGuideCompte');
        }
        return $this->render('GoVoyageBundle:Guide:GuideModifData.html.twig',array("v"=>$vo));
    }

}