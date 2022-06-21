<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function store($id){
        \Auth::user()->add_favorites($id);
        return back();
    }
    
    public function destroy($id){
        \Auth::user()->unFavorite($id);
        return back();
    }
}
