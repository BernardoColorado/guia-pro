<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Capitulo extends Model{
  
  //establecemos atributos del DAO
  protected $table = 'capitulo';
  protected $primaryKey = 'id';
  protected $fillable = ['idCapitulo','capitulo'];
  public $timestamps = false;

}
?>