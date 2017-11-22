<?php
/**
 * Created by PhpStorm.
 * User: nouha
 * Date: 14/11/2017
 * Time: 19:07
 */

namespace GoVoyageBundle\Controller;

use GoVoyageBundle\Entity\Users;
use GoVoyageBundle\Entity\Voiture;
use GoVoyageBundle\Form\VoitureForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\UserBundle\Model\UserManager;
use FOS\UserBundle\Model\UserManagerInterface;

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
            $voiture->setImgVoiture("images/products/".$request->get('img_voiture'));
            $em = $this->getDoctrine()->getManager();
            $em->persist($voiture);
            $em->flush();
            return $this->redirectToRoute('go_voyage_affichevoitureforAgence');

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




    function ComfirmationForClientAction(Request $request){


        return $this->render("GoVoyageBundle:Voiture:alvPostChildModify.html.twig",array('voiture1'));

    }

    function RentCarForClientAction(Request $request,$id){


         $user=$this->getUser();
        $em = $this->getDoctrine()->getManager();
        $voiture=$em->getRepository("GoVoyageBundle:Voiture")->find($id);
        if($request->isMethod('POST')) {

            $voiture->setRegno($request->get('regNo'));
            $voiture->setModel($request->get('model'));
            $voiture->setDuration($request->get('duration'));
            $voiture->setRate($request->get('rate'));
            $voiture->setType($request->get('type'));
            $voiture->setStatus('0');
            $voiture->setClientVoFk($user);
            $voiture->setAlvVoFk($voiture->getAlvVoFk());
            $voiture->setImgVoiture($request->get('img_voiture'));
            $d1 = new \DateTime($request->get('depart'));
            $d1->format('Y-m-d');
            $voiture->setDepart($d1);
            $d2 = new \DateTime($request->get('arrivee'));
            $d2->format('Y-m-d');
            $voiture->setArrivee($d2);

            $em = $this->getDoctrine()->getManager();
            $em->persist($voiture);
            $em->flush();
            return $this->redirectToRoute('go_voyage_affichevoitureforClient');

        }

        return $this->render("GoVoyageBundle:Voiture:requestRent.html.twig",array('voiture1'=>$voiture));

    }

    function searchForClientAction(Request $request){
        $em=$this->getDoctrine()->getManager();
        $voiture2=new Voiture();
        if($request->isMethod('GET')){
            $voiture2->setModel($request->get('model'));
            $voiture2=$em->getRepository("GoVoyageBundle:Voiture")->findBy(array('model'=>$voiture2->getModel()));

        }
        else{
            $voiture2=$em->getRepository("GoVoyageBundle:Voiture")->findAll();

        }
        return $this->render("GoVoyageBundle:Voiture:searchCarForClient.html.twig",array('voitures'=>$voiture2));

    }



}
