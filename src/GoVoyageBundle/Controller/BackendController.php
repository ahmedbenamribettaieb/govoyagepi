<?php
/**
 * Created by PhpStorm.
 * User: Ghassen
 * Date: 20/11/2017
 * Time: 19:50
 */

namespace GoVoyageBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BackendController extends Controller
{
    public function testAction()
    {
        return $this->render('GoVoyageBundle:Admin:index_admin.html.twig');
    }

    public function listVolAdminAction()
    {
        $em=$this->getDoctrine()->getManager();
        $vols=$em->getRepository("GoVoyageBundle:Vol")->findAll();
        return $this->render('GoVoyageBundle:Admin:List_vol_admin.html.twig',array('vols'=>$vols));
    }

    public function SupprVolAdminAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $vol=$em->getRepository("GoVoyageBundle:Vol")->find($id);
        $em->remove($vol);
        $em->flush();
        return $this->redirectToRoute('Backend_list_vol');
    }

}