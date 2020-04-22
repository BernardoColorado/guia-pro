<?php
//espacio de controladores
namespace App\Controllers\Page;
//interfaz para contenedor de dependencias
use Psr\Container\ContainerInterface as ContainerInterface;
//mandamos llamar al controlador abstracto
use Core\Controllers\Parents\AbstractController as AbstractController;
//controlador de pagina principal
class AdminController extends AbstractController{

  /**********************************************/
  /*****Funciones de Intanciacion y constructor**/
  /**********************************************/
  public function __construct(ContainerInterface $container){

    //container y sus dependencias
    $this->container=$container;

    //metodos plantilla de instanciacion
    $this->setMainInstances();

  }
  /*******************************/
  /*****Funciones de Controlador**/
  /*******************************/
  public function index($request,$response){

    $viewData=[];

    $this->twig->render($response,'templates/user/signin.php',$viewData);
    
  }

}

?>