<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Actualite;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Storage;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums=Album::orderBy('id_album','desc')->where('visibilite_abum','public')->paginate(9);
        return view('adminView.layouts.album.index',compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $validator = Validator::make($request->all(), [
            'nom_album' => 'required',
            'visibilite_abum' => 'required',
            'type_album' => 'required',
        ]);

        if ($validator->fails()) {
           // return view('admin.add-operateur')->withErrors($validator);
            return "error create album fails";
        }

        Album::create($request->except('_token'));

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'id_album' => 'required',
        ]);

        if ($validator->fails()) {
           // return view('admin.add-operateur')->withErrors($validator);
            return "error require  id_album";
        }


        $album = Album::find($request->id_album);

        if( is_null($album) )
        {
            abort(404);
        }


        $album->nom_album = $request->nom_album;
        $album->visibilite_abum = $request->visibilite_abum;
        $album->type_album =$request->type_album;

        $album->save();

        return "album update successfuly";

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_album' => 'required',
        ]);
        if ( $validator->fails() ) {
            return "error require  id_album";
        }
        $album = Album::find($request->id_album);
        if( is_null($album) )
        {
            abort(404);
        }
        foreach ($album->medias as $media) {
          Storage::disk('public')->delete($media->nom_media);
        }
        $album->delete();
        return redirect()->back();
    }
      public function getAlbumById(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'id_album' => 'required',
        ]);

        if ($validator->fails()) {
           // return view('admin.add-operateur')->withErrors($validator);
            return "error require  id_album";
        }

         return Album::find($request->id_album);

    }

    public function getImageAlbumAdmin($id)
    {
        $albums=Album::find($id);
        return view('adminView.layouts.album.galerie.index',compact('albums'));
    }

    public function getImageAlbumPublic($id)
    {
        $recents = Actualite::orderBy('id_act','desc')->take(3)->get();
        $albums=Album::find($id);
        return view('galerie.images.details',compact('albums','recents'));
    }
    public function getImageAlbumPublicVideo($id)
    {
        $recents = Actualite::orderBy('id_act','desc')->take(3)->get();
        $albums=Album::find($id);
        return view('galerie.video.details',compact('albums','recents'));
    }
}
