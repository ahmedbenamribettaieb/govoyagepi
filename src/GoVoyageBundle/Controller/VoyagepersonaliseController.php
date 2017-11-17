<?php

namespace GoVoyageBundle\Controller;

use GoVoyageBundle\Entity\Voyagepersonalise;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Voyagepersonalise controller.
 *
 */
class VoyagepersonaliseController extends Controller
{
    /**
     * Lists all voyagepersonalise entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $voyagepersonalises = $em->getRepository('GoVoyageBundle:Voyagepersonalise')->findAll();

        return $this->render('GoVoyageBundle:voyagepersonalise:index.html.twig', array(
            'voyagepersonalises' => $voyagepersonalises,
        ));
    }

    /**
     * Creates a new voyagepersonalise entity.
     *
     */
    public function newAction(Request $request)
    {
        $voyagepersonalise = new Voyagepersonalise();
        $form = $this->createForm('GoVoyageBundle\Form\VoyagepersonaliseType', $voyagepersonalise);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($voyagepersonalise);
            $em->flush();

            return $this->redirectToRoute('voyagepersonalise_show', array('idVp' => $voyagepersonalise->getIdvp()));
        }

        return $this->render('GoVoyageBundle:voyagepersonalise:new.html.twig', array(
            'voyagepersonalise' => $voyagepersonalise,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a voyagepersonalise entity.
     *
     */
    public function showAction(Voyagepersonalise $voyagepersonalise)
    {
        $deleteForm = $this->createDeleteForm($voyagepersonalise);

        return $this->render('GoVoyageBundle:voyagepersonalise:show.html.twig', array(
            'voyagepersonalise' => $voyagepersonalise,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing voyagepersonalise entity.
     *
     */
    public function editAction(Request $request, Voyagepersonalise $voyagepersonalise)
    {
        $deleteForm = $this->createDeleteForm($voyagepersonalise);
        $editForm = $this->createForm('GoVoyageBundle\Form\VoyagepersonaliseType', $voyagepersonalise);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('voyagepersonalise_edit', array('idVp' => $voyagepersonalise->getIdvp()));
        }

        return $this->render('GoVoyageBundle:voyagepersonalise:edit.html.twig', array(
            'voyagepersonalise' => $voyagepersonalise,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a voyagepersonalise entity.
     *
     */
    public function deleteAction(Request $request, Voyagepersonalise $voyagepersonalise)
    {
        $form = $this->createDeleteForm($voyagepersonalise);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($voyagepersonalise);
            $em->flush();
        }

        return $this->redirectToRoute('voyagepersonalise_index');
    }

    /**
     * Creates a form to delete a voyagepersonalise entity.
     *
     * @param Voyagepersonalise $voyagepersonalise The voyagepersonalise entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Voyagepersonalise $voyagepersonalise)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('voyagepersonalise_delete', array('idVp' => $voyagepersonalise->getIdvp())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
