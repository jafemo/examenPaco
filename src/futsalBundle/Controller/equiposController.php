<?php

namespace futsalBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FutsalBundle\Entity\futsal;
use FutsalBundle\Form\JugadorType;
use Symfony\Component\HttpFoundation\Request;

class equiposController extends Controller
{

  /**
   * @Route("/equipos", name="equipos")
   */

   public function nuevoJugadorAction( Request $request){
     $jugador = new Jugador();
     $form = $this->createForm(JugadorType::clase, $jugador);
     $form->handleRequest($request);

     if ($form->isSubmitted() && $form->isValid()) {
       $jugador = $form->getData();
       $em = $this->getDoctrine()->getManager();
       $em->persist($jugador);
       $em->flush();
       return $this->render('futsalBundle:carpeta_equipos:equipos.html.twig', array('jugador'=>$jugador));
     }

     return $this->render('futsalBundle:Default:nuevoJugador.html.twig', array('form'=>$form->createView()));
   }

   /**
    * @Route("/mostrar")
    */
     public function mostrarEquipoAction()
     {
       $repository = $this->getDoctrine()->getRepository('futsalBundle:futsal');
         $futsal = $repository->findAll();
         return $this->render('futsalBundle:carpeta_equipos:equipos.html.twig', array('TablaEquipos' =>$futsal));
     }




}
