<?php

namespace myapp\FilmBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use myapp\FilmBundle\Entity\Film;
use myapp\FilmBundle\Form\FilmType;

/**
 * Film controller.
 *
 */
class FilmController extends Controller {

    /**
     * Lists all Film entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $films = $em->getRepository('FilmBundle:Film')->findAll();

        return $this->render('film/index.html.twig', array(
                    'films' => $films,
        ));
    }

    public function modifierAction() {
        $em = $this->getDoctrine()->getManager();

        $films = $em->getRepository('FilmBundle:Film')->findAll();

        return $this->render('film/modifier.html.twig', array(
                    'films' => $films,
        ));
    }

    /**
     * Creates a new Film entity.
     *
     */
    public function newAction(Request $request) {
        $film = new Film();
        $form = $this->createForm('myapp\FilmBundle\Form\FilmType', $film);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $film->upload();
            $em->persist($film);
            $em->flush();

            return $this->redirectToRoute('film_show', array('id' => $film->getId()));
        }

        return $this->render('film/new.html.twig', array(
                    'film' => $film,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Film entity.
     *
     */
    public function showAction(Film $film) {
        $deleteForm = $this->createDeleteForm($film);

        return $this->render('film/show.html.twig', array(
                    'film' => $film,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Film entity.
     *
     */
    public function editAction(Request $request, Film $film) {
        $deleteForm = $this->createDeleteForm($film);
        $editForm = $this->createForm('myapp\FilmBundle\Form\FilmType', $film);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $film->upload();
            $em->persist($film);
            $em->flush();

            return $this->redirectToRoute('film_edit', array('id' => $film->getId()));
        }

        return $this->render('film/edit.html.twig', array(
                    'film' => $film,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Film entity.
     *
     */
    public function deleteAction($id) {
        
        $cox = $this->getDoctrine()->getManager();

        $acteur = $cox->getRepository("FilmBundle:Film")->find($id);
        $cox->remove($acteur);
        $cox->flush();
        return $this->redirect($this->generateUrl("film_index"));
        
        
   
    }

    /**
     * Creates a form to delete a Film entity.
     *
     * @param Film $film The Film entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Film $film) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('film_delete', array('id' => $film->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }
    
     public function rechercheAction() {
        $em = $this->getDoctrine()->getManager();
        $request=  $this->get('request');
        $motcle=$request->get('motcle');

        $films= $em->getRepository('FilmBundle:Film')->findFilmsBytitre($motcle);
       
        
        

        return $this->render('film/index.html.twig', array(
                    'films' => $films,
        
    ));
 }
}
