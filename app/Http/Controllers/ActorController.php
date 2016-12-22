<?php

namespace App\Http\Controllers;
use App\Actors;
use Illuminate\Http\Request;

class ActorController extends Controller
{
  //pour lister les films
  public function index(){
    $actors = Actors::all();
    return view('actor/index',['actors' => $actors]);
  }
  //pour crée un film
  public function create(){
    return view('actor/create');
  }
  //pour éditer un film
  public function update(){
    return view('actor/update');
  }
  //pour supprimer un film
  public function remove($id){
    $actors = Actors::find($id);
    $actors ->delete();
    return redirect()->back();
  }
}
