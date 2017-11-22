<?php

namespace GoVoyageBundle\Controller;

use GoVoyageBundle\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Users controller.
 *
 */
class UsersController extends Controller
{
    /**
     * Lists all users entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('GoVoyageBundle:Users')->findAll();

        return $this->render('GoVoyageBundle:users:index.html.twig', array(
            'users' => $users,
        ));
    }

    /**
     * Creates a new user entity.
     *
     */
    public function newAction(Request $request)
    {
        $user = new Users();
        $form = $this->createForm('GoVoyageBundle\Form\UsersType', $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush($user);

            return $this->redirectToRoute('users_show', array('id' => $user->getId()));
        }

        return $this->render('GoVoyageBundle:users:new.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a user entity.
     *
     */
    public function showAction(Users $user)
    {
        $deleteForm = $this->createDeleteForm($user);

        return $this->render('GoVoyageBundle:users:show.html.twig', array(
            'user' => $user,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    public function showclientAction()
    {
        $user = $this->getUser()->getId();
        $em=$this->getDoctrine()->getManager();
        $client=$em->getRepository("GoVoyageBundle:Users")->find($user);
        return $this->render('GoVoyageBundle:users:showclient.html.twig',array("g"=>$client));
    }

    /**
     * Displays a form to edit an existing user entity.
     *
     */
    public function editAction(Request $request, Users $user)
    {
        $deleteForm = $this->createDeleteForm($user);
        $editForm = $this->createForm('GoVoyageBundle\Form\UsersType', $user);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('users_edit', array('id' => $user->getId()));
        }

        return $this->render('GoVoyageBundle:users:edit.html.twig', array(
            'user' => $user,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    public function editclientAction(Request $request)
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
            return $this->redirectToRoute('users_showclient');
        }
        return $this->render('GoVoyageBundle:users:editclient.html.twig',array("v"=>$vo));
    }

    /**
     * Deletes a user entity.
     *
     */
    public function deleteAction(Request $request, Users $user)
    {
        $form = $this->createDeleteForm($user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($user);
            $em->flush($user);
        }

        return $this->redirectToRoute('users_index');
    }

    /**
     * Creates a form to delete a user entity.
     *
     * @param Users $user The user entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Users $user)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('users_delete', array('id' => $user->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
