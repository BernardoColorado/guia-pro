<?php
//espacio de controladores
namespace App\Controllers\Page;
//interfaz para contenedor de dependencias
use Psr\Container\ContainerInterface as ContainerInterface;
//mandamos llamar al controlador abstracto
use Core\Controllers\Parents\AbstractController as AbstractController;
//controlador de guia
class GuiaController extends AbstractController{
  /**********************************************/
  /*****Funciones de Intanciacion y constructor**/
  /**********************************************/
  public function __construct(ContainerInterface $container){
    //container y sus dependencias
    $this->container=$container;
    //metodos plantilla de instanciacion
    $this->setMainInstances();
    //mandamos llamar usuario
    $this->user = $this->container['user'];
    //mandamos llamar guia
    $this->models['materia']=$this->container['materia'];
    $this->models['tema']=$this->container['tema'];
  }
  /*******************************/
  /*****Funciones de Controlador**/
  /*******************************/
  public function index($request,$response){

    session_start();
    if(!isset($_SESSION['email'])){

      return $response->withRedirect($this->globals['url'].'/usuario/acceder');

    }
    else{

      $this->twig->render($response,'layouts/guia/index.php',[]);

    }

  }
  //
  public function materia($request,$response){

    session_start();
    if(!isset($_SESSION['email'])){

      return $response->withRedirect($this->globals['url'].'/usuario/acceder');

    }
    else{

      $viewData = [];
      $viewData['materias']=$this->models['materia']->index();
      $this->twig->render($response,'layouts/guia/materia.php',$viewData);

    }

  }
  //
  public function temario($request,$response,$args){

    //
    session_start();
    //
    if(!isset($_SESSION['email'])){

      return $response->withRedirect($this->globals['url'].'/usuario/acceder');

    }
    else{

      $materia=$this->models['materia']->getById($args['idMateria']);

      $temas=$materia->tema;
      $tema=$this->models['tema']->getById($args['idTema']);
      $capitulos = $tema->capitulo;

      $viewData=[];
      $viewData['materia']=$materia;
      $viewData['temas'] = $temas;
      $viewData['capitulos']=$capitulos;

      $this->twig->render($response,'layouts/guia/temario.php',$viewData);

    }  
  }
  //
  public function capitulo($request,$response,$args){

    session_start();
    //
    if(!isset($_SESSION['email'])){

      return $response->withRedirect($this->globals['url'].'/usuario/acceder');

    }
    else{

      echo('capitulo');

    }  

  }

}

?>