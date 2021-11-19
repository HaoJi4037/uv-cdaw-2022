<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Film;

class FilmController extends Controller
{
    public function showAllFilms(){
        $films = Film::where('id',1)->with('category')->get()[0];//get->first,prend premier
        //$authUser = Auth::user();
        //$favs = $authUser->load('favs')['favs'];
        //$favIds = array();
        //foreach($favs as $favs){
        //    array_push($favIds, $fav->id);
        //}
        $data = [
            "films"=>$films,
            //"favs"=>$favs,
            //"favIds"=>$favIds,
            //"idUser"=> Auth::id(),
        ];
        return view('films',$data);
    }
    public function select(){
        Film::all();
        Film::select("name","direction","categories.name")
            ->join("categories","films","=","categories.id");
    }
}
