<?php

namespace futsalBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FutsalBundle\Entity\jornada;
use Symfony\Component\HttpFoundation\Request;

class jornadaController extends Controller
{

   /**
    * @Route("/mostrarJornada")
    */
     public function mostrarJornadaAction()
     {
       $repository = $this->getDoctrine()->getRepository('futsalBundle:jornada');
         $jornada = $repository->findByNumero('Primera Jornada');
         return $this->render('futsalBundle:carpeta_jornada:jornada.html.twig', array('TablaJornada' =>$jornada));
     }

     /**
      * @Route("/buscarJornada",name="buscarJornada")
      */
     public function buscarJornadaAction($id){
       $repository = $this->getDoctrine()->getRepository('futsalBundle:jornada');
       $jornada = $repository->findById($id);
       return $this->render('futsalBundle:carpeta_jornada:jornada.html.twig', array('TablaJornada' =>$jornada));
     }



}
