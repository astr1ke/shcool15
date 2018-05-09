<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\categorie;


class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categorieSelect = categorie::all();
        return view('article',['categorieSelect' =>$categorieSelect]);
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'articleName' =>'required|min:5|max:20',
            'description' =>'max:100',
            'categorie' =>'required|min:3|max:20',
            'text' =>'required|min:3|max:2000'
        ]);

//        $fileMass = [];
//
//        foreach ($_FILES["file"]["error"] as $key => $error) {
//            if ($error == UPLOAD_ERR_OK) {
//                $tmp_name = $_FILES["file"]["tmp_name"][$key];
//                $name = basename($_FILES["file"]["name"][$key]);
//                move_uploaded_file($tmp_name, "uploads/$name");
//                array_push($fileMass,public_path().'\\' . $name);
//            }
//        }
//        $file = implode($fileMass);
//        $f = str_split($file);
//        dd($f);
        //dd($request);
        $file = public_path().'\\uploads\\'.$_FILES['file']['name'];
        $ff = '\\uploads\\'.$_FILES['file']['name'];
        $tmp_name = $_FILES["file"]["tmp_name"];
        move_uploaded_file($tmp_name, $file);
        //dd($file);
        $request->user()->articles()->create([
            'user' => $request->user,
            'articleName' => $request->articleName,
            'description' => $request->description,
            'categorie' => $request->categorie,
            'text' => $request->text,
            'pictures' => $ff,

        ]);

        return redirect('/news/1');


    }
}
