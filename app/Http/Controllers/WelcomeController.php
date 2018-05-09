<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\article;

class WelcomeController extends Controller
{
    public function index(){
        $a= article::all();
        $a1 =array_reverse($a->toArray());            //получили модель статей из базы, перевели в массив
        $articles = array_slice($a1,1,3); //поменяли порядок и взяли первые(последние) новости
        return view('welcome', ['articles'=>$articles]);

    }
}
