<?php
/**
 * Created by PhpStorm.
 * User: Ghassen
 * Date: 19/11/2017
 * Time: 02:05
 */

namespace GoVoyageBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GuideController extends Controller
{
    public function AffAction(){
        $user = $this->getUser()->getId();
        $em=$this->getDoctrine()->getManager();
        $guide=$em->getRepository("GoVoyageBundle:Users")->find($user);
        return $this->render('GoVoyageBundle:Guide:GuideShow.html.twig',array("g"=>$guide));

    }

}