<?php

namespace App\Http\Controllers;
use App\Movies;
use Illuminate\Http\Request;
use Validator;

class MovieController extends Controller
{
  //pour lister les films
  public function index(){
    $movies = Movies::all();
    return view('movie/index', ['movies' => $movies]);
  }
  //pour crée un film
  //controlleur qui capture la requete
  //pour controller les donnée entrante (post)
  public function create(Request $request){

// Données du formulaire
//request all permet de recuperer toutes les donnees de la requete ds un tableau
if($request->isMethod('post')){
    $validator = Validator::make($request->all(), [
                'title' => 'required|min:5',
                'synopsis' => 'required|min:7|max:300',
                'description' => 'required|min:10|max:300',
            ]);

            if ($validator->fails()) {
                return redirect('movie/create')
                            ->withErrors($validator)
                            ->withInput();
        }
        else{
        $dateoutput = \DateTime::createFromFormat('d/m/Y',$request->date_release);
        $movie = new Movies();
        $movie->title = $request->title;
        $movie->synopsis = $request->synopsis;
        $movie->description = $request->description;
        $movie->date_release = $dateoutput->format("Y-m-d");
        $movie->distributeur = $request->distributeur;
        $movie->budget = $request->budget;
        $movie->duree = $request->duree;
        $movie->annee = $request->annee;
        //$movie->administrators_id = 1;
        $movie->save();

        return redirect('movie/index');
      }
    }
    return view('movie/create');

}

  //pour éditer un film
  public function update(){
    return view('movie/update');
  }
  //pour supprimer un film

  public function remove($id){
    $movie = Movies::find($id);
    $movie ->delete();
    return redirect()->back();
  }
  public function view($id){
    $movie = Movies::find($id);

    return view('movie/view', ['movie' => $movie]);
  }

}
