<?php
/**
 * Created by PhpStorm.
 * User: nouha
 * Date: 14/11/2017
 * Time: 19:07
 */

namespace GoVoyageBundle\Controller;

use GoVoyageBundle\Entity\Voiture;
use GoVoyageBundle\Form\VoitureForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class VoitureController extends Controller
{
    public function indexForAgenceAction(){
        $em=$this->getDoctrine()->getManager();
        $voiture=$em->getRepository("GoVoyageBundle:Voiture")->findAll();
        return $this->render('GoVoyageBundle:Voiture:alvPostChild4.html.twig',array('voitures'=>$voiture));

    }
    public function indexForClientAction()
    {
        $em=$this->getDoctrine()->getManager() ;
        $voiture=$em->getRepository("GoVoyageBundle:Voiture")->findAll();
        return $this->render('GoVoyageBundle:Voiture:alvPostChild.html.twig',array('voitures'=>$voiture));
    }


    /*function ajoutAction(Request $request){
        $voiture=new Voiture();

        $form=$this->createForm(VoitureForm::class,$voiture);
        $form->handleRequest($request);
        if($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($voiture);
            $em->flush();
            return $this->redirectToRoute('go_voyage_affichevoiture');
        }

        return $this->render("GoVoyageBundle:Voiture:ajout.html.twig",array('voiture'=>$voiture,'form'=>$form->createView()));
    }*/

    function ajoutAction(Request $request){
        $voiture=new Voiture();

        if($request->isMethod('POST')) {
            $voiture->setRegno($request->get('regNo'));
            $voiture->setModel($request->get('model'));
            $voiture->setDuration($request->get('duration'));
            $voiture->setRate($request->get('rate'));
            $voiture->setType($request->get('type'));
            $voiture->setStatus($request->get('status'));
            // $voiture->setClientVoFk($request->get('client_vo_fk'));
            // $voiture->setAlvVoFk($request->get('	alv_vo_fk'));
            $voiture->setImgVoiture($request->get('img_voiture'));
            $em = $this->getDoctrine()->getManager();
            $em->persist($voiture);
            $em->flush();
            return $this->redirectToRoute('go_voyage_layout');

        }
        return $this->render("GoVoyageBundle:Voiture:alvPostChild2.html.twig",array('voiture'=>$voiture));
    }


    function suppAction($id){
        $em=$this->getDoctrine()->getManager() ;
        $voiture=$em->getRepository("GoVoyageBundle:Voiture")->find($id);

        $em->remove($voiture);
        $em->flush();
        return $this->redirectToRoute('go_voyage_affichevoitureforAgence');



    }
    function updateForAgenceAction(Request $request,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $voiture=$em->getRepository("GoVoyageBundle:Voiture")->find($id);
        $form=$this->createForm(VoitureForm::class,$voiture);

        $form->handleRequest($request);
        if($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($voiture);
            $em->flush();
            return $this->redirectToRoute('go_voyage_affichevoitureforAgence');
        }

        return $this->render("GoVoyageBundle:Voiture:ajout.html.twig",array('form'=>$form->createView()));

    }
    function updateForAgence2Action(Request $request,$id){

        $em = $this->getDoctrine()->getManager();
        $voiture=$em->getRepository("GoVoyageBundle:Voiture")->find($id);
        if($request->isMethod('POST')) {
            $voiture->setRegno($request->get('regNo'));
            $voiture->setModel($request->get('model'));
            $voiture->setDuration($request->get('duration'));
            $voiture->setRate($request->get('rate'));
            $voiture->setType($request->get('type'));
            $voiture->setStatus($request->get('status'));
            // $voiture->setClientVoFk($request->get('client_vo_fk'));
            // $voiture->setAlvVoFk($request->get('	alv_vo_fk'));
            $voiture->setImgVoiture($request->get('img_voiture'));
            $em = $this->getDoctrine()->getManager();
            $em->persist($voiture);
            $em->flush();
            return $this->redirectToRoute('go_voyage_affichevoitureforAgence');

        }
        return $this->render("GoVoyageBundle:Voiture:alvPostChildModify.html.twig",array('voiture1'=>$voiture));
    }

}