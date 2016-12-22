<?php

namespace App\Http\Controllers;
use App\Directors;
use Illuminate\Http\Request;

class DirectorsController extends Controller
{
  //pour lister les films
  public function index(){
    $directors = Directors::all();

    return view('directors/index',['directors' => $directors]);
  }
  //pour crée un film
  public function create(){
    return view('directors/create');
  }
  //pour éditer un film
  public function update(){
    return view('directors/update');
  }
  //pour supprimer un film
  public function remove($id){
    $directors = Directors::find($id);
    $directors ->delete();
    return redirect()->back();
  }

}
