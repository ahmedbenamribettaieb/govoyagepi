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

    public function List2Action( Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $queryBuilder = $em->getRepository('GoVoyageBundle:Vol')->createQueryBuilder('bp');
        $vols=$em->getRepository("GoVoyageBundle:Vol")->findAll();
        $x = true;

        if ($request->query->getAlnum('filter_nom')) {
            $queryBuilder->where('bp.nomVol LIKE :nomVol')
                ->setParameter('nomVol', '%' . $request->query->getAlnum('filter_nom') . '%');
            $x = false;
        }
        $query = $queryBuilder->getQuery();
        if($x){
            $paginator =$this->get('knp_paginator');
            $res=$paginator->paginate($vols,
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

        return $this->render('GoVoyageBundle:Vol:ListVol_Compagnie.html.twig',array("vols"=>$res));
    }

    public function SupprAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $vol=$em->getRepository("GoVoyageBundle:Vol")->find($id);
        $em->remove($vol);
        $em->flush();
        return $this->redirectToRoute('List');
    }

    public function ModifAction(Request $request , $id)
    {

        $em=$this->getDoctrine()->getManager();
        $vol=$em->getRepository("GoVoyageBundle:Vol")->find($id);
        if($request->isMethod('POST')){
            $vol->setNomVol($request->get('nomv'));
            $vol->setDepart($request->get('depart'));
            $vol->setArrivee($request->get('arrivee'));
            $vol->setNomCompagnie($request->get('nomc'));
            $vol->setPrixVol($request->get('prix'));

            $d1 = new \DateTime($request->get('dated'));
            $d1->format('Y-m-d');
            $vol->setDateDepart($d1);

            $d2 = new \DateTime($request->get('datea'));
            $d2->format('Y-m-d');
            $vol->setDateArrivee($d2);

            $em->persist($vol);
            $em->flush();
            return $this->redirectToRoute('List');
        }
        return $this->render('GoVoyageBundle:Vol:ModifVol.html.twig',array("v"=>$vol));
    }

    public function ReserverAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $vo=$em->getRepository("GoVoyageBundle:Vol")->find($id);
        $userid = $this->getUser()->getId();
        if($user = $this->getUser()->get_the_role() == "ROLE_CLIENT")
        {
            $vo->setClientVolFk($userid);
            $em->persist($vo);
            $em->flush();
        }
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

            $d1 = new \DateTime($request->get('dated'));
            $d1->format('Y-m-d');
            $vol->setDateDepart($d1);

            $d2 = new \DateTime($request->get('datea'));
            $d2->format('Y-m-d');
            $vol->setDateArrivee($d2);

            $em=$this->getDoctrine()->getManager();
            $em->persist($vol);
            $em->flush();
            return $this->redirectToRoute('List');
        }
        return $this->render('GoVoyageBundle:Vol:AjoutVol.html.twig',array());
    }

}