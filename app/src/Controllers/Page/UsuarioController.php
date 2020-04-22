<?php
//espacio de controladores
namespace App\Controllers\Page;
//interfaz para contenedor de dependencias
use Psr\Container\ContainerInterface as ContainerInterface;
//mandamos llamar al controlador abstracto
use Core\Controllers\Parents\AbstractController as AbstractController;
//controlador de usuario y sesiones
class UsuarioController extends AbstractController{

    /**********************************************/
    /*****Funciones de Intanciacion y constructor**/
    /**********************************************/
    public function __construct(ContainerInterface $container){

        //container y sus dependencias
        $this->container=$container;
        //metodos plantilla de instanciacion
        $this->setMainInstances();
        //mandamos llamar la insrancia de usuario
        $this->user=$this->container['user'];

    }

    /*******************************/
    /*****Funciones de Controlador**/
    /*******************************/
    public function signupGet($request,$response){

        $this->twig->render($response,'layouts/usuario/registrarse.php',[]); 

    }
    //
    public function signupPost($request,$response){
        
        if(!$this->user->signup('email@dominio.com','Lorem','Ipsum','Dolor','passphrase')){

            echo('bad');

        }
        else{

            echo('good');

        }

    }
    //
    public function signinGet($request,$response){

        if(isset($_SESSION['email'])){

            return $response->withRedirect($this->globals['url'].'/');

        }
        else{

            $this->twig->render($response,'layouts/usuario/acceder.php',[]); 

        }
        
    }
    //
    public function signinPost($request,$response){
        
        //variables de usuario a iniciar sesion
        $user=[
            'email'=>$_POST['email'],
            'password'=>$_POST['password']    
        ];
        //establecemos reglas para validar usuario
        $rules=$this->validation['rules']->getRules([
            'email'=>'email',
            'password'=>'alphanumeric'
        ]);

        //datos de vista
        $viewData=[];
        //reglase de validacion checadas
        $validationErrors=$this->validation['check']->getValidationErrors($rules,$user);

        //de existir errores de validacion negamos el acceso y mostramos errores
        if(count($validationErrors)){

            //errores en vista
            $viewData['errors']=$validationErrors;
            //regresamos formulario con errores
            $this->twig->render($response,'layouts/usuario/acceder.php',$viewData);

        }
        else{

            $validation = $this->user->validatePassword($user['email'],$user['password']);

            switch ($validation) {

                case 1:

                    //abrimos sesion de existir
                    session_start();
                    $_SESSION['email'] = $user['email'];
                    return $response->withRedirect($this->globals['url'].'/');
                    break;

                case 0:
                    
                    //
                    $viewData['errors']['password'][]='password incorrecto!';
                    $this->twig->render($response,'layouts/usuario/acceder.php',$viewData);
                    break;

                case -1:

                    //
                    $viewData['errors']['email'][]='usuario no encontrado!';
                    $this->twig->render($response,'layouts/usuario/acceder.php',$viewData);
                    break;
                
                default:
                    break;
            }

        }

    }
    //
    public function signout($request,$response){

        //abrimos sesion de existir
        session_start();
        //destruimos sesion
        session_destroy();
        //redirigimos al login
        return $response->withRedirect($this->globals['url'].'/usuario/acceder');
        
    }
    //
    public function test($request,$response){
        
    }

}

?>