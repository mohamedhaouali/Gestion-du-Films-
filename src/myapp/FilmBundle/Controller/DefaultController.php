<?php

namespace myapp\FilmBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use myapp\FilmBundle\Entity\Film;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em=$this->getDoctrine()->getManager();
       $cat=$em->getRepository("FilmBundle:categorie")->findAll();
       
       $film=$em->getRepository("FilmBundle:Film")->findBy(array(),array('id'=>'desc'));
       $request=$this->get('request');
       
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
        $film,
        $request->query->get('page', 1)/*page number*/,
        3/*limit per page*/
    );
       
       
       
       
        return $this->render('FilmBundle::index.html.twig',array('categ'=>$cat,'film'=>$pagination));
        
       
        
    }
  public function detailsAction($id){
  {
       $cnx=$this->getDoctrine()->getManager();
       $films=new Film();
       $films=$cnx->getRepository("FilmBundle:Film")->find($id);
       
       $id_d=$films->getId();
       $not=$films->getNotif();
       
       if ($id_d==$id){
           $not=$not+1;
           $films->setNotif($not);
           
           $cnx->persist($films);
           $cnx->flush();
       }
      
       return  $this->render('film/show.html.twig',array('not'=>$not,'film'=>$films));
      
    
    
  }
 
    
  }
     public function bienvenueAction($id)
    {
        return $this->render('FilmBundle:Default:bienvenue.html.twig',array('name'=>$id));
    }
     public function rectangleAction($l,$h)
    {
        return $this->render('FilmBundle:Default:rectangle.html.twig',array('l'=>$l,'h'=>$h));
    }
    
   public function layoutAction(){
    {
        return $this->render('FilmBundle::index.html.twig');
    }
    
    } 
}
