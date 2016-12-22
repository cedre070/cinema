<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
  //pour lister les films
  public function index(){
    $categories = Categories::all();
    return view('categories/index',['categories' => $categories]);
  }
  //pour crée un film
  public function create(){
    return view('categories/create');
  }
  //pour éditer un film
  public function update(){
    return view('categories/update');
  }
  //pour supprimer un film
  public function remove($id){
    $categories = Categories::find($id);
    $categories ->delete();
    return redirect()->back();
  }
  
}
