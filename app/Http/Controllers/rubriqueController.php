<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;

class rubriqueController extends Controller
{
    //return rubrique page
    function getPage()
    {
        return view('adminView.layouts.type_actualite.index');
    }
    //store rubrique in data base
    // public function store(Request $request)
    //  {
    //      $validator = Validator::make($request->all(),[
    //          'titre_type_actualite'=>'required',
    //          'description_type_actualite'=>'required'
    //      ]);

    //      if($validator->fails())
    //      {
    //          return "error create type actualite fails";
            
    //      }

    //      TypeActualite::create([
    //          "titre_type_actualite"=>$request->titre_type_actualite,
    //          "description_type_actualite"=>$request->description_type_actualite,
    //      ]);
    //      return redirect()->back();

    //  }

    //  public function update(Request $request){
    //     $validator = Validator::make($request->all(),[
    //         'id_type_actualite'=>'required',
    //         'titre_type_actualite'=>'required',
    //         'description_type_actualite'=>'required',
    //     ]);
    //     TypeActualite::find($request->id_type_actualite)->update([
    //         'titre_type_actualite'=>$request->titre_type_actualite,
    //         'description_type_actualite'=>$request->description_type_actualite,
    //     ]);
    //     return redirect()->back();
    //  }
    //  public function destroy(Request $request)
    //  {
    //     $validator = Validator::make($request->all(),[
    //         'id_type_actualite'=>'required'
    //     ]);
    //     TypeActualite::find($request->id_type_actualite)->delete();
    //     return redirect()->back();
    //  }
}
