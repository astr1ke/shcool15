<?php

namespace App\Http\Controllers;

use App\article;
use App\categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function index($id){
        $n = article::all(); // получение всех статей
        $st = ceil((count($n))/5); //получения количеста страниц для отображения новостей
        $n1 =  array_reverse($n->toArray()); //реверс массива
        $news = array_slice($n1, (($id-1)*5), 5); //получение конкретных записей для отображения на данной странице

        if (Auth::check() and Auth::user()->IsAdmin ){
            $isAdmin = True;}
        else                                             //узнаем есть ли право у пользователя работать со статьями
            $isAdmin = False;
        $cat = categorie::all();

        return view('news',['news'=>$news,'st'=>$st,'id'=>$id,'isAdmin'=>$isAdmin,'categories'=>$cat]);
    }

    public function view($id){
        $news = article::where('id', $id)->get();

        if (Auth::check() and Auth::user()->IsAdmin ){
            $isAdmin = True;}
        else                                             //узнаем есть ли право у пользователя работать со статьями
            $isAdmin = False;
        $cat = categorie::all();

        return view('newsView',['news'=>$news,'st'=>1,'id'=>$id,'isAdmin'=>$isAdmin,'categories'=>$cat]);
    }
}
