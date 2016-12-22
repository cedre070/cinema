<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Comments extends Model
{
  protected $table ="comments";

  /**
  * Calcul le nb de films actifs requete

  */
  public static function getNbComments(){
  return DB::table('comments')
  ->where('state',1)
  ->orwhere('state',2)
  ->count();
}



}
