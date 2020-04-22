<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Materia extends Model{
  
  //establecemos atributos del DAO
  protected $table = 'materia';
  protected $primaryKey = 'id';
  protected $fillable = ['materia','indice','img'];
  public $timestamps = false;
  
  //obtenemos todas las materias
  public function index(){

    return self::all();

  }
  //
  public function getById($id){

    return self::find($id);

  }
  public function tema(){

    return $this->hasMany('App\Models\Tema','idMateria');

  }

}
?>