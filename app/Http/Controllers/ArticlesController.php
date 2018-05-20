<?php

namespace App\Http\Controllers;

use App\article;
use App\image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\categorie;





class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function editor()
    {
        $categorieSelect = categorie::all();
        return view('newsCreate',['categorieSelect' => $categorieSelect]);
    }

    public function edit($id){

        $article = article::find($id);
        $categorieSelect = categorie::all();

        return view('newsEdit', ['article' => $article,'categorieSelect' => $categorieSelect]);

    }

    public function editStore(Request $request){

        $article = article::find($request->articleId);
        if (!($article)){
            return abort(404);
        }

        $article->categorie = $request->categorie;
        $article->articleName = $request->articleName;
        $article->text = $request->text;
        if ($request->chkDel){
            $article->pictures = '';
        }elseif($request->file){
            $rnd = rand(100,200);
            $file = public_path().'\\uploads\\'.$rnd.$_FILES['file']['name'];
            $ff = '\\uploads\\'.$rnd.$_FILES['file']['name'];
            $tmp_name = $_FILES["file"]["tmp_name"];
            move_uploaded_file($tmp_name, $file);
            $article->pictures =  $ff;
        }

        if($article->save()){
            return redirect('news/1');
        }

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'articleName' =>'required|min:5|max:50',
            'categorie' =>'required|min:3|max:50',
            'text' =>'required|min:20'
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
            'categorie' => $request->categorie,
            'text' => $request->text,
            'pictures' => $ff,
        ]);


        return redirect('/news/1');


    }
}
