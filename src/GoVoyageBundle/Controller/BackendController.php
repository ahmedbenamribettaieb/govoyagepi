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
        $em = $this->getDoctrine()->getManager();
        $em2 = $this->getDoctrine()->getManager();
        $voyagepersonalises = $em->getRepository('GoVoyageBundle:Voyagepersonalise')->findAll();
        return $this->render('GoVoyageBundle:Admin:voyagepersonaliseadmin.html.twig', array(
            'voyagepersonalises' => $voyagepersonalises
        ));
    }
    public function SupprAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $vol=$em->getRepository("GoVoyageBundle:Voyagepersonalise")->find($id);
        $em->remove($vol);
        $em->flush();
        return $this->redirectToRoute('Backend_vp');
    }
}