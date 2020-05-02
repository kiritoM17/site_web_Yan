<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Publication;
use App\Models\Album;
use App\Models\Medium;
use Validator;


class publicationController extends Controller
{
    //function get publication admin page
    function getPage()
    {
        return view('adminView.layouts.publication.index');
    }
    //function store new publication in dataBase
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title_pub' => 'required',
             'resume_pub' => 'required',
             'description_pub'=>'required',
            'id_type_pub' => 'required',

            ]);
            if ($validator->fails()) {
                // return view('admin.add-operateur')->withErrors($validator);
                 return "error create publication fails";
             }
            $album =  Album::create(['nom_album' => $request->title_pub. '_Publication',
            'visibilite_abum' => 'public',
            'type_album' => 'actualite',]);
            if ($request->hasFile('images_couverture')) {
                $photos  =  $request->file('images_couverture');
                foreach ($photos as $photo ) {
                  $file_name = $photo->store(config('images.path-actualite'), 'public');
                  Medium::Create([
                      "nom_media"=>$file_name,
                      "taille_media"=>$photo->getSize(),
                      "mime_type"=>$photo->getClientMimeType(),
                      "id_album"=>$album->id_album,
                  ]);
              }
          }
          Publication::create([
            "title_pub"=>$request->title_pub ,
             "resume_pub" =>$request->resume_pub,
             "description_pub"=>$request->description_pub,
             "create_at"=>date_create(),
             "update_at"=>date_create(),
             "start_date_pub"=>$request->start_date_pub,
             "end_date_pub"=>$request->end_date_pub,
             "theme_pub"=>$request->theme_pub,
             "edition_pub"=>$request->edition_pub,
             "status_pub"=>'created',
            "id_album"=>$album->id_album,
            "id_type_pub"=>$request->id_type_pub,
              ]);
        return redirect()->back();
    }

    public function updateFormationPublication(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title_pub' => 'required',
             'resume_pub' => 'required',
             'description_pub'=>'required',
            'id_pub' => 'required',
            ]);
            if ($validator->fails())
            {
                // return view('admin.add-operateur')->withErrors($validator);
                 return "error update publication fails";
             }
             Publication::find($request->id_pub)->update([
            "title_pub"=>$request->title_pub ,
             "resume_pub" =>$request->resume_pub,
             "description_pub"=>$request->description_pub,
             "update_at"=>date_create(),
             "start_date_pub"=>$request->start_date_pub,
             "end_date_pub"=>$request->end_date_pub,
             "theme_pub"=>$request->theme_pub,
             "edition_pub"=>$request->edition_pub,
             "status_pub"=>'updated',
            ]);
            return  redirect()->back();
    }
    public function updateGeneralPublication(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title_pub' => 'required',
             'resume_pub' => 'required',
             'description_pub'=>'required',
            'id_pub' => 'required',
            ]);
            if ($validator->fails())
            {
                // return view('admin.add-operateur')->withErrors($validator);
                 return "error update publication fails";
             }
             Publication::find($request->id_pub)->update([
                "title_pub"=>$request->title_pub ,
             "resume_pub" =>$request->resume_pub,
             "description_pub"=>$request->description_pub,
             "update_at"=>date_create(),
             "status_pub"=>'updated',
            ]);
            return  redirect()->back();
    }
    public function updateEventPublication()
    {
        $validator = Validator::make($request->all(), [
            'title_pub' => 'required',
             'resume_pub' => 'required',
             'description_pub'=>'required',
            'id_pub' => 'required',
            ]);
            if ($validator->fails())
            {
                // return view('admin.add-operateur')->withErrors($validator);
                 return "error update publication fails";
             }
             Publication::find($request->id_pub)->update([
                "title_pub"=>$request->title_pub ,
             "resume_pub" =>$request->resume_pub,
             "description_pub"=>$request->description_pub,
             "update_at"=>date_create(),
             "start_date_pub"=>$request->start_date_pub,
             "end_date_pub"=>$request->end_date_pub,
             "status_pub"=>'updated',
            ]);
            return  redirect()->back();
    }



    public function destroy(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_pub' => 'required',
            ]);
            Publication::find($request->id_pub)->update([
                "status_pub"=>'delete',
            ]);
            return  redirect()->back();
    }

    public function allPublicationMagazineNumber()
    {
        $magazine=Publication::orderBy('id_pub','desc')->where('id_type_pub','=',3)->get();
        $tabMagazine=[];
        foreach($magazine as $mag)
        {
            array_push($tabMagazine,$mag->id_pub);
        }
        return $tabMagazine;
    }

    public function allPublicationBusinessNumber()
    {
        $business=Publication::orderBy('id_pub','desc')->where('id_type_pub','=',5)->get();
        $tabBusiness=[];
        foreach($business as $bus)
        {
            array_push($tabBusiness,$bus->id_pub);
        }
        return $tabBusiness;
    }
    public function allPublicationMediaCityNumber()
    {
        $media_city=Publication::orderBy('id_pub','desc')->where('id_type_pub','=',4)->get();
        $tabMediaCity=[];
        foreach($media_city as $bus)
        {
            array_push($tabMediaCity,$bus->id_pub);
        }
        return $tabMediaCity;
    }

    public function allPublicationFormationNumber()
    {
        $formation=Publication::orderBy('id_pub','desc')->where('id_type_pub','=',4)->get();
        $tabFormation=[];
        foreach($formation as $forma)
        {
            array_push($tabFormation,$forma->id_pub);
        }
        return $tabFormation;
    }

    public function allPublicationEventNumber()
    {
        $event=Publication::orderBy('id_pub','desc')->where('id_type_pub','=',4)->get();
        $tabEvent=[];
        foreach($event as $eve)
        {
            array_push($tabEvent,$eve->id_pub);
        }
        return $tabEvent;
    }
    public function getById($id){
        $pub= Publication::find($id);
        return view('details',compact('pub'));
    }

    public function getActualiteAdminById($id)
    {
        $actualites = Publication::find($id);
        return view('adminView.layouts.actualite.partials.details',compact('actualites'));
    }

}
