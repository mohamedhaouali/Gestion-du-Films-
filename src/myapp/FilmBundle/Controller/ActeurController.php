<?php
namespace myapp\FilmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use myapp\FilmBundle\Form\ActeurType;


 use myapp\FilmBundle\Entity\Acteur;

class ActeurController extends Controller {
   public function AjoutAction()
           {
       $message='Ajouter un acteur';
       $em=  $this->getDoctrine()->getManager();
       $acteur= new Acteur();
       $form=$this->createForm(new ActeurType(),$acteur);// syncrhonisation form avec objet
       $request=  $this->get('request');// appel de type request
       if($request->getMethod()=='POST')//VERFICATION DES Donnees
       {
        $form->handleRequest($request);//Methode de recuperation
        if($form->isValid())
        {  
          $em->persist($acteur);
          $em->flush();
          $message="insertion valide";
        }
       }
      
       return $this->get('templating')->renderResponse('FilmBundle:Acteur:ajoutacteur.html.twig',array('form'=>$form->createView(),'message'=>$message));
       
      
   }
     public function AfficheAction()
    {
       $em=$this->getDoctrine()->getManager();
       $acteur=$em->getRepository("FilmBundle:Acteur")->findAll();
      
       return $this->render('FilmBundle:Acteur:afficheacteur.html.twig',array('act'=>$acteur));
    }
    public function ModifierAction($id) {
        $message='Modifier un acteur';
       $em=  $this->getDoctrine()->getManager();
       $acteur= new Acteur();
       $acteur=$em->getRepository("FilmBundle:Acteur")->find($id);
       $form=$this->createForm(new ActeurType(),$acteur);// syncrhonisation form avec objet
       $request=  $this->get('request');// appel de type request
       if($request->getMethod()=='POST')//VERFICATION DES Donnees
       {
        $form->handleRequest($request);//Methode de recuperation
        if($form->isValid())
        {  
          $em->persist($acteur);
          $em->flush();
          $message="modification valide";
        }
       }
      
       return $this->get('templating')->renderResponse('FilmBundle:Acteur:modifierActeur.html.twig',array('form'=>$form->createView(),'message'=>$message));
        
        
    }
    public function SupprimerAction($id) {
  
       $em=  $this->getDoctrine()->getManager();
       $acteur=$em->getRepository("FilmBundle:Acteur")->find($id);
       $em->remove($acteur);
          $em->flush();
       return $this->redirect($this->generateUrl("acteur_affiche"));
    } 
    
    public function editerAction()
    {
       $em=$this->getDoctrine()->getManager();
       $acteur=$em->getRepository("FilmBundle:Acteur")->findAll();
      
       return $this->render('FilmBundle:Acteur:editeracteur.html.twig',array('act'=>$acteur));
    }
       
}
