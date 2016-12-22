<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Tags extends Model
{
  protected $table = "tags";

  public static function getTags(){
  return DB::table('tags')
  ->where('word','!=','NULL')
  ->limit(10)
  ->get();

  }






}
