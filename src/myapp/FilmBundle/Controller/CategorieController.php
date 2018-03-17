<?php
namespace myapp\FilmBundle\Controller;

use myapp\FilmBundle\Form;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

 use myapp\FilmBundle\Entity\categorie;

/**
 * Description of CategorieController
 *
 * @author Mohamed
 */
class CategorieController extends Controller{
   public function CategorieAction()
    {
       $em=$this->getDoctrine()->getManager();
       $cat=new categorie();
       $cat->setNom("Action");
       $em->persist($cat);
       $em->flush();
        return $this->render('FilmBundle:Default:categorie.html.twig');
    }
   
   public function AfficheAction()
    {
       $em=$this->getDoctrine()->getManager();
       $cat=$em->getRepository("FilmBundle:categorie")->findAll();
      
       return $this->render('FilmBundle:Default:affiche.html.twig',array('categ'=>$cat));
    }
}
