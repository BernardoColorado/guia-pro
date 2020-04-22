<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class User extends Model{

  //
  protected $table = 'usuario';
  protected $primaryKey = 'id';
  protected $fillable = ['nombre','email','apellidoMaterno','apellidoPaterno'];
  protected $guarded = ['password'];
  public $timestamps = false;

  //mandamos llamar todos los elementos
  public function index(){

    //mandamos llamar toda la tabla
    return self::all();

  }
  //obtenemos registro por id
  public function getById(int $id){

    //
    return self::find(1);

  }
  //obtenemos registro por Email
  public function getByEmail(string $email){

    //
    return self::where('email',$email)->first();

  }
  //validamos password
  public function validatePassword(string $email,string $password){

    //preguntamos por el password y el email en una linea
    $record = self::select('email','password')->where('email',$email)->first();

    //de no existir regresamos -1
    if(!isset($record->password)){
      return -1;
    }
    //de existir y ser incorrecto, regresamos 0...   de ser correcto regresamos 1
    else{
      if(!password_verify($password,$record->password)){
        return 0;
      }
      else{
        return 1;
      }
    }

  }
  //insertamos y regresamos status como booleano
  public function signup(string $email,string $nombre, $apellidoPaterno,string $apellidoMaterno,string $password){

    //consultamos registro con el mismo e mail
    $record = self::select('email')->where('email',$email)->first();

    //de existir no insteramos nada y retornamos falso
    if(isset($record->email)){

      //en caso de existir regresamos falso
      return false;

    }
    //en caso de no existir, registramos nuevo usuario
    else{
    
      //nueva instancia de usuario
      $user = new self();

      //insertamos usuario con password hasheado
      $user->email=$email;
      $user->nombre=$nombre;
      $user->apellidoPaterno=$apellidoPaterno;
      $user->apellidoMaterno=$apellidoMaterno;
      $user->password = password_hash($password,PASSWORD_BCRYPT,['cost'=>10]);      
      $user->save();
      
      //regresamos verdadero en caso de insertar
      return true;

    }
  }
  //
  public function session(){

    return $this->hasMany('App\Models\Session','idUsuario');

  }
  //
  public function getSessions($id){

    return self::find($id)->session;

  }

}
?>