<?php

namespace futsalBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FutsalBundle\Entity\futsal;
use FutsalBundle\Form\JugadorType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

  /**
   * @Route("/nuevoJugador")
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
       return $this->render('futsalBundle:Default:equipos.html.twig', array('jugador'=>$jugador));
     }

     return $this->render('futsalBundle:carpeta_inicio:nuevoJugador.html.twig', array('form'=>$form->createView()));
   }








}
