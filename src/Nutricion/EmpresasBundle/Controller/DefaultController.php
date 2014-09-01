<?php

namespace Nutricion\EmpresasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Nutricion\EmpresasBundle\Entity;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $empresas = $this->getDoctrine()
        ->getRepository("NutricionEmpresasBundle:Empresas")
        ->findAll();

        foreach($empresas as $empresa){
          echo $empresa["empresa"]."<br />";
        }
        exit;

        return new Response($empresas);
    }

    public function empresasAction()
    {
      return $this->render("NutricionEmpresasBundle:Default:empresas.html.twig");
    }

    public function crearEmpresaAction(Request $request)
    {
      $empresa = new Entity\Empresas();
      $empresa->setEmpresa("");
      $empresa->setEmail("");
      $empresa->setTelefono("");
      $empresa->setDireccion("");
      $empresa->setObservaciones("");
      $empresa->setFechaCreacion("d/M/A");

      $form = $this->createFormBuilder($empresa)
      ->add("empresa","text")
      ->add("email","text")
      ->add("telefono","text")
      ->add("direccion",'text')
      ->add("observaciones",'textarea')
      ->add("Crear empresa","submit", array(
        'attr'=>array(
          'class'=>'btn btn-success btn-lg'
        )
      ))
      ->getForm();


      $form->handleRequest($request);

      $clickForm = $form->get("Crear empresa")->isClicked();

      if($clickForm){
        $validador = $this->get("validator");
        $errores = $validador->validate($empresa);

        $erroresString = 0;
        if(count($errores) > 0){
          $erroresString = (string) $errores;
        }
      }

      if($form->isValid()){
        $em = $this->getDoctrine()->getManager();
        $em->persist($empresa);
        $em->flush();
        return $this->redirect($this->generateUrl('nutricion_crear_empresa'));
      }

      return $this->render("NutricionEmpresasBundle:Default:crear-empresa.html.twig",
        array(
          "titulo"=>"Crear Empresa",
          "form"=>$form->createView()
        ));
    }

    public function productoAction($id)
    {
      $producto = $this->getDoctrine()
      ->getRepository('NutricionEmpresasBundle:Producto')
      ->find($id);

      if(!$producto){
        throw $this->createNotFoundException("No se encuentra el producto ".$id);
      }


      return new Response("Si existe el producto ".$producto->getNombre());
    }

    public function productosAction()
    {
      $productos = $this->getDoctrine()
      ->getRepository("NutricionEmpresasBundle:Producto")
      ->findAll();

      if(!$productos){
        throw $this->createNotFoundException("No hay productos");
      }

      return $this->render("NutricionEmpresasBundle:Default:index.html.twig",array("productos"=>$productos));

    }

    public function crearAction()
    {
      $empresa = new Entity\empresas();
      $empresa->setEmpresa("Empresa3");
      $empresa->setEmail("empresa3@empresa.com");

      $em = $this->getDoctrine()->getManager();
      $em->persist($empresa);

      echo "Empresa creada ".$empresa->getId();
      exit();
    }
}
