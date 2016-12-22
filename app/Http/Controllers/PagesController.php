<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movies;
use App\Comments;
use App\User;
use App\Tags;

class PagesController extends Controller
{
  public function welcome(){
    $nbMovies = Movies::getNbActiveMovies();
    $sumBudgetMovies = Movies::getSumBudgetMovies();
    $moyDureeMovies = Movies::getMoyDureeMovies();
    $nbComments = Comments::getNbComments();
    $getDernierUser = User::getDernierUser();
    $tags = Tags::getTags();
    return view('pages/welcome',[
      "nbMovies"=>$nbMovies,
      "nbComments"=>$nbComments,
      "sumBudgetMovies"=>$sumBudgetMovies,
      "moyDureeMovies"=>$moyDureeMovies,
      "getDernierUsers"=>$getDernierUser,
      "tags"=>$tags
    ]);
  }


}
