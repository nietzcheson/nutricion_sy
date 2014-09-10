<?php

namespace Nutricion\EmpresasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Nutricion\EmpresasBundle\Entity;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityRepository;
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
      $empresas = $this->getDoctrine()
      ->getRepository("NutricionEmpresasBundle:Empresas")
      ->findAll();

      if(!$empresas){
        echo "No hay empresas";
        exit();
      }


      return $this->render("NutricionEmpresasBundle:Default:empresas.html.twig",
      array(
        "titulo"=>"Empresas",
        "btn_header" => array(
          "title" => "Crear empresa",
          "href" => $this->generateUrl("nutricion_crear_empresa")
        ),
        "empresas"=>$empresas
      ));
    }

    public function crearEmpresaAction(Request $request)
    {
      $empresa = new Entity\Empresas();
      $empresa->setEmpresa("");
      $empresa->setEmail("");
      $empresa->setTelefono("");
      $empresa->setDireccion("");
      $empresa->setObservaciones("");
      $empresa->setFechaCreacion("");

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
      $errores = "";
      if($clickForm){

        $validador = $this->get("validator");
        $errores = $validador->validate($empresa);

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
          "btn_header" => array(
            "title" => "Regresar",
            "href" => $this->generateUrl("nutricion_empresas")
          ),
          "form"=>$form->createView(),
          "_errores" => $errores
        ));
    }

    public function empresaAction($id, Request $request)
    {
      $empresa = $this->getDoctrine()
      ->getRepository("NutricionEmpresasBundle:Empresas")
      ->find($id);

      if(!$empresa){
        throw $this->createNotFoundException("Parece que lo que buscas no se encuentra");
      }

      $formEmpresa = new Entity\Empresas();
      $formEmpresa->setEmpresa($empresa->getEmpresa());
      $formEmpresa->setEmail($empresa->getEmail());
      $formEmpresa->setTelefono($empresa->getTelefono());
      $formEmpresa->setDireccion($empresa->getDireccion());
      $formEmpresa->setObservaciones($empresa->getObservaciones());

      $form = $this->createFormBuilder($formEmpresa)
      ->add("empresa","text")
      ->add("email","text")
      ->add("telefono","text")
      ->add("direccion",'text')
      ->add("observaciones",'textarea')
      ->add("Guardar","submit", array(
        'attr'=>array(
          'class'=>'btn btn-success btn-lg'
        )
      ))
      ->getForm();

      $form->handleRequest($request);

      $clickForm = $form->get("Guardar")->isClicked();
      $errores = "";
      if($clickForm){

        $validador = $this->get("validator");
        $errores = $validador->validate($empresa);

        if(count($errores) > 0){
          $erroresString = (string) $errores;
        }
      }

      if($form->isValid()){
        $em = $this->getDoctrine()->getManager();
        $empresa->setEmpresa($formEmpresa->getEmpresa());
        $empresa->setEmail($formEmpresa->getEmail());
        $empresa->setTelefono($formEmpresa->getTelefono());
        $empresa->setDireccion($formEmpresa->getDireccion());
        $empresa->setObservaciones($formEmpresa->getObservaciones());

        $em->flush();
        return $this->redirect($this->generateUrl('nutricion_perfil_empresa',array("id"=>$empresa->getId())));
      }


      return $this->render("NutricionEmpresasBundle:Default:empresa.html.twig",
        array(
          "titulo"=>$empresa->getEmpresa(),
          "btn_header" => array(
            "title" => "Regresar",
            "href" => $this->generateUrl("nutricion_empresas")
          ),
          "form"=>$form->createView(),
          "_errores" => $errores,
        ));
    }

    public function perfilesAction()
    {
        return $this->render("NutricionEmpresasBundle:Default:perfiles.html.twig",
          array(
            "titulo"=>"Perfiles",
            "btn_header" => array(
              "title" => "Crear perfil",
              "href" => $this->generateUrl("nutricion_crear_perfil")
            ),
          ));
    }

    public function crearPerfilAction()
    {
      $perfil = new Entity\Perfiles();
      $perfil->setIdTipoperfil("");

      $form = $this->createFormBuilder($perfil)
      ->add("id_tipoperfil","entity",array(
        'class' => 'NutricionEmpresasBundle:TiposPerfil',
        'query_builder' => function(EntityRepository $er){
            return $er->createQueryBuilder('p')->orderBy('p.tipo','ASC');
          },
        'property' => 'tipo',
        'empty_value' => 'Seleccione el tipo de perfil',
        'label' => "Tipo de perfil"
      ))
      ->add('id_empresa','entity',array(
        'class' => 'NutricionEmpresasBundle:Empresas',
        'query_builder' => function(EntityRepository $er){
          return $er->createQueryBuilder('e')->orderBy('e.id','ASC');
          },
        'property' => 'empresa',
        'empty_value' => 'Seleccione la empresa',
        'label' => 'Empresa',
      ))
      ->add('nombres','text')
      ->add('apellidos','text')
      ->add('direccion','text')
      ->add('email','text')
      ->add('frecuencia_email','entity', array(
        'class' => 'NutricionEmpresasBundle:Frecuencias',
        'query_builder' => function(EntityRepository $er){
            return $er->createQueryBuilder('f')->orderBy('f.id','ASC');
          },
        'property' => 'frecuencia',
        'empty_value' => 'Seleccione el tipo de frecuencia',
        'label' => '¿Cada cuánto revisa su correo electrónico?',
      ))
      ->add('telefono_trabajo','text',array('label'=>'Teléfono del trabajo'))
      ->add('telefono_casa','text',array('label'=>'Teléfono de la casa'))
      ->add('telefono_celular','text')
      ->add('edad','text')
      ->add('estatura_metros','text')
      ->add('estatura_centimetros','text')
      ->add('fecha_nacimiento','text')
      ->add('lugar_nacimiento','text')
      ->getForm();

      return $this->render("NutricionEmpresasBundle:Default:crear-perfil.html.twig",
        array(
          "titulo"=>"Crear perfil",
          "btn_header" => array(
            "title" => "Regresar",
            "href" => $this->generateUrl("nutricion_perfiles")
          ),
          "form"=>$form->createView(),
        ));
    }

}
