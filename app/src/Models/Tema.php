<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Tema extends Model{
  
  //establecemos atributos del DAO
  protected $table = 'tema';
  protected $primaryKey = 'id';
  protected $fillable = ['idMateria','tema'];
  public $timestamps = false;

  public function getById($id){

    return self::find($id);

  }
  public function capitulo(){

    return $this->hasMany('App\Models\Capitulo','idTema');

  }
  
}
?>