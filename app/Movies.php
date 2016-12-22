<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Movies extends Model
{
/*
*
*/
protected $table ="movies";


/**
* Calcul le nb de films actifs requete

*/
public static function getNbActiveMovies(){
return DB::table('movies')
->where('visible',1)
->count();

}
public static function getSumBudgetMovies(){
return DB::table('movies')
->where('budget','!=','NULL')
->sum('budget');

}
public static function getMoyDureeMovies(){
return DB::table('movies')
->where('duree','!=','NULL')
->avg('duree');

}

}
