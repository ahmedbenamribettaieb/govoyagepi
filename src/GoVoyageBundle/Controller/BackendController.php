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
        return $this->render('GoVoyageBundle:Admin:index_admin.html.twig' );
    }

    public function vpAction(Request $request)
    {
        $user = $this->getUser()->getPrenom();
        $em = $this->getDoctrine()->getManager();
        $queryBuilder = $em->getRepository('GoVoyageBundle:Voyagepersonalise')->createQueryBuilder('v');
        $voyagepersonalises = $em->getRepository('GoVoyageBundle:Voyagepersonalise')->findAll();
        $manager = $this->get('mgilet.notification');
        $x = true;

        if ($request->query->getAlnum('filter')) {
            $queryBuilder->where('v.nom LIKE :nom')
                ->setParameter('nom', '%' . $request->query->getAlnum('filter') . '%');
            $x=false;
        }
        $query = $queryBuilder->getQuery();
        if($x){
            $paginator =$this->get('knp_paginator');
            $res=$paginator->paginate($voyagepersonalises,
            $request->query->getInt('page',1),
            $request->query->getInt('Limit',10)
        );}else{
            $paginator =$this->get('knp_paginator');
            $res=$paginator->paginate($query,
                $request->query->getInt('page',1),
                $request->query->getInt('Limit',10)

            );
        }
        /*$notif = $manager->getAll();*/
        return $this->render('GoVoyageBundle:Admin:voyagepersonaliseadmin.html.twig', array(
            'voyagepersonalises' => $res,'u' => $user/*,'notif'=>$notif*/
        ));
    }
    public function ClientAction(Request $request)
    {
        $user = $this->getUser()->getPrenom();
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('GoVoyageBundle:Users')->findAll();
        $queryBuilder = $em->getRepository('GoVoyageBundle:Users')->createQueryBuilder('v');
        $manager = $this->get('mgilet.notification');
        $notif = $manager->getAll();
        $x = true;

        if ($request->query->getAlnum('filter_nom')) {
            $queryBuilder->where('v.username LIKE :username')
                ->setParameter('username', '%' . $request->query->getAlnum('filter_nom') . '%');
            $x = false;
        }
        $query = $queryBuilder->getQuery();
        if($x){
            $paginator =$this->get('knp_paginator');
            $res=$paginator->paginate($users,
                $request->query->getInt('page',1),
                $request->query->getInt('Limit',10)
            );
        }else{
            $paginator =$this->get('knp_paginator');
            $res=$paginator->paginate($query,
                $request->query->getInt('page',1),
                $request->query->getInt('Limit',10)

            );
            $x = true;
        }
        return $this->render('GoVoyageBundle:Admin:Clientadmin.html.twig', array(
            'users' => $res,'u' => $user,'notif'=>$notif
        ));
    }
    public function GuideAction(Request $request)
    {
        $user = $this->getUser()->getPrenom();
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('GoVoyageBundle:Users')->findAll();
        $queryBuilder = $em->getRepository('GoVoyageBundle:Users')->createQueryBuilder('v');
        /*$manager = $this->get('mgilet.notification');
        $notif = $manager->getAll();*/
        $x = true;

        if ($request->query->getAlnum('filter_nom')) {
            $queryBuilder->where('v.username LIKE :username')
                ->setParameter('username', '%' . $request->query->getAlnum('filter_nom') . '%');
            $x = false;
        }
        $query = $queryBuilder->getQuery();
        if($x){
            $paginator =$this->get('knp_paginator');
            $res=$paginator->paginate($users,
                $request->query->getInt('page',1),
                $request->query->getInt('Limit',10)
            );
        }else{
            $paginator =$this->get('knp_paginator');
            $res=$paginator->paginate($query,
                $request->query->getInt('page',1),
                $request->query->getInt('Limit',10)

            );
            $x = true;
        }

        return $this->render('GoVoyageBundle:Admin:Guidelistadmin.html.twig', array(
            'users' => $res,'u' => $user/*,'notif'=>$notif*/
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
        $manager = $this->get('mgilet.notification');
        /*$notif = $manager->getAll();*/
        return $this->render('GoVoyageBundle:Admin:List_vol_admin.html.twig',array('vols'=>$vols , 'u' => $user/*,'notif'=>$notif*/));
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
}