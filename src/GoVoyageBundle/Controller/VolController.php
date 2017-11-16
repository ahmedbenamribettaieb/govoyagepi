<?php
/**
 * Created by PhpStorm.
 * User: Ghassen
 * Date: 16/11/2017
 * Time: 02:12
 */

namespace GoVoyageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VolController extends Controller
{
    public function ListAction()
    {
        $em=$this->getDoctrine()->getManager();
        $vols=$em->getRepository("GoVoyageBundle:Vol")->findAll();
        return $this->render('GoVoyageBundle:Vol:ListVol.html.twig',array("vols"=>$vols));
    }
}
{

}