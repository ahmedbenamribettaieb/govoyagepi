<?php
/**
 * Created by PhpStorm.
 * User: Ghassen
 * Date: 16/11/2017
 * Time: 02:12
 */

namespace GoVoyageBundle\Controller;

use GoVoyageBundle\Entity\Vol;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class VolController extends Controller
{
    public function ListAction()
    {
        $em=$this->getDoctrine()->getManager();
        $vols=$em->getRepository("GoVoyageBundle:Vol")->findAll();
        return $this->render('GoVoyageBundle:Vol:ListVol.html.twig',array("vols"=>$vols));
    }

    public function List2Action()
    {
        $em=$this->getDoctrine()->getManager();
        $vols=$em->getRepository("GoVoyageBundle:Vol")->findAll();
        return $this->render('GoVoyageBundle:Vol:ListVol_Compagnie.html.twig',array("vols"=>$vols));
    }

    public function SupprAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $vol=$em->getRepository("GoVoyageBundle:Vol")->find($id);
        $em->remove($vol);
        $em->flush();
        return $this->redirectToRoute('ListVol');
    }

    public function AjoutAction(Request $request)
    {
        $vol = new Vol();
        if($request->isMethod('POST')){
            $vol->setNomVol($request->get('nomv'));
            $vol->setDepart($request->get('depart'));
            $vol->setArrivee($request->get('arrivee'));
            $vol->setNomCompagnie($request->get('nomc'));
            $vol->setPrixVol($request->get('prix'));
            $em=$this->getDoctrine()->getManager();
            $em->persist($vol);
            $em->flush();
        }
        return $this->render('GoVoyageBundle:Vol:AjoutVol.html.twig',array());
    }

}