<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medium;
use App\Models\Actualite;
use App\Models\Album;
use Validator;
use Illuminate\Support\Facades\Storage;

class MediaControler extends Controller
{
    //
    public function index()
    {
        $future_evenement =Actualite::where('type_act','=','evenement')->orderBy('date_act', 'DESC')->limit(3)->get();
        return view('mediatheque');
    }
    public function image_galery()
    {
        $future_evenement =Actualite::where('type_act','=','evenement')->orderBy('date_act', 'DESC')->limit(3)->get();
        $albums = Album::paginate(9);
        return view('galery/images/index-images',compact('albums','future_evenement'));
    }
    public function video_galery()
    {
        $future_evenement =Actualite::where('type_act','=','evenement')->orderBy('date_act', 'DESC')->limit(3)->get();
        $albums = Album::paginate(9);
        return view('galery/videos/index-video',compact('albums','future_evenement'));
    }

    public function getMediaById(Request $request)
    {

          $validator = Validator::make($request->all(), [
            'id_media' => 'required',
        ]);

           if ($validator->fails()) {
           // return view('admin.add-operateur')->withErrors($validator);
            return "error require  id_media";
        }

         return    Medium::find($request->id_media);

    }
    public function store(Request $request)
    {
          $validator = Validator::make($request->all(), [
            'id_album' => 'required',
        ]);
        if ($validator->fails()) {
           // return view('admin.add-operateur')->withErrors($validator);
            return "error require  id_album";
        }
        if ($request->hasFile('images_medias')) {

          $photos  =  $request->file('images_medias');

          foreach ($photos as $photo ) {
            
            $file_name = $photo->store(config('images.path-simple-media'), 'public');
            $type= explode('/',$photo->getClientMimeType());
            if($type[0]==='video')
            {
                Medium::Create([
                    "nom_media"=>$file_name,
                    "taille_media"=>$photo->getSize(),
                    "mime_type"=>'video',
                    "id_album"=>$request->id_album,
                ]);

            }elseif($type[0]=='image')
            {
                Medium::Create([
                    "nom_media"=>$file_name,
                    "taille_media"=>$photo->getSize(),
                    "mime_type"=>'image',
                    "id_album"=>$request->id_album,
                ]);
            }else
                {
                    if($type[1]==='pdf')
                    {
                        Medium::Create([
                            "nom_media"=>$file_name,
                            "taille_media"=>$photo->getSize(),
                            "mime_type"=>$type[0],
                            "id_album"=>$request->id_album,
                        ]);
                    }else
                    {
                        Medium::Create([
                            "nom_media"=>$file_name,
                            "taille_media"=>$photo->getSize(),
                            "mime_type"=>$photo->getClientMimeType(),
                            "id_album"=>$request->id_album,
                        ]);
                    }

                }


        }
    }else{
          return " error require media ";
    }
      return redirect()->back();
    }

    //function add Register Form
    public function storeRegisterForm(Request $request)
    {
          $validator = Validator::make($request->all(), [
            'id_album' => 'required',
        ]);
        if ($validator->fails()) {
           // return view('admin.add-operateur')->withErrors($validator);
            return "error require  id_album";
        }
        if ($request->hasFile('images_medias')) {

          $photos  =  $request->file('images_medias');

          foreach ($photos as $photo ) {
            
            $file_name = $photo->store(config('images.path-simple-media'), 'public');
            $type= explode('/',$photo->getClientMimeType());
            if($type[1]==='pdf')
            {
                Medium::Create([
                    "nom_media"=>$file_name,
                    "taille_media"=>$photo->getSize(),
                    "mime_type"=>'registerForm',
                    "id_album"=>$request->id_album,
                ]);
            }else
            {
                Medium::Create([
                    "nom_media"=>$file_name,
                    "taille_media"=>$photo->getSize(),
                    "mime_type"=>'registerForm',
                    "id_album"=>$request->id_album,
                ]);
            }


        }
    }else{
          return " error require media ";
    }
      return redirect()->back();
    }

    //function add syllabus document
    public function storeSyllabus(Request $request)
    {
          $validator = Validator::make($request->all(), [
            'id_album' => 'required',
        ]);
        if ($validator->fails()) {
           // return view('admin.add-operateur')->withErrors($validator);
            return "error require  id_album";
        }
        if ($request->hasFile('images_medias')) {

          $photos  =  $request->file('images_medias');

          foreach ($photos as $photo ) {
            
            $file_name = $photo->store(config('images.path-simple-media'), 'public');
            $type= explode('/',$photo->getClientMimeType());
            if($type[1]==='pdf')
            {
                Medium::Create([
                    "nom_media"=>$file_name,
                    "taille_media"=>$photo->getSize(),
                    "mime_type"=>'syllabus',
                    "id_album"=>$request->id_album,
                ]);
            }else
            {
                Medium::Create([
                    "nom_media"=>$file_name,
                    "taille_media"=>$photo->getSize(),
                    "mime_type"=>'syllabus',
                    "id_album"=>$request->id_album,
                ]);
            }


        }
    }else{
          return " error require media ";
    }
      return redirect()->back();
    }






    public function destroy(Request $request)
    {
         $validator = Validator::make($request->all(), [
            'id_media' => 'required',
        ]);

        if ($validator->fails()) {
           // return view('admin.add-operateur')->withErrors($validator);
            return "error require  id_media";
        }
        $media = Medium::find($request->id_media);
        if( is_null($media) )
        {
            abort(404);
        }
        Storage::disk('public')->delete($media->nom_media);
        $media->delete();
        return redirect()->back();
    }
}
