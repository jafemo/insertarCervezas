<?php

namespace cervezasBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use cervezasBundle\Entity\Cervezas;

class CervezaController extends Controller{
    public function crearCervezaAction(){
      $mangeDoct=$this->getDoctrine()->getManager();
      //Nuevo Objeto de tipo Cervezas
      $cerveza = new Cervezas();
      $cerveza->setNombre('nombre');
      $cerveza->setPais('pais');
      $cerveza->setPoblacion('poblacion');
      $cerveza->setTipo('tipo');
      $cerveza->setImportacion(true);
      $cerveza->setTamanyo(20);
      $cerveza->setFechaAlmacen(new \DateTime('20-20-2019'));
      $cerveza->setCantidad(20);
      $cerveza->setFoto('amstel');

      //Doctrine

      $mangeDoct->persist($cerveza);
      $mangeDoct->flush();
      return $this->render('cervezasBundle:Cervezas:crearCerveza.html.twig',array("cervezas"=>$cerveza));
    }
}
