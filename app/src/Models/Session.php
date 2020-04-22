<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Session extends Model{

  protected $table = 'sesion';
  protected $primaryKey = 'id';
  protected $fillable = ['idUsuario'];
  public $timestamps = false;

  public function index(){

    return self::all();

  }
  

}