<div id="left-menu" class="col-lg-4 col-md-4 col-sm-12 pull-left" style="padding-left: 1.5% !important;padding-right: 1.5% !important;padding-top: 0px !important;">
    <h3 style="text-align: justify;
  text-justify: inter-word;padding-top:-100px!important;margin-top:0px !important">Latest  Magazine Posts</h3>
    <!-- contenu -->
    <ul class="recent">
        @if(count($lastMagazine)>0)
    @foreach ($lastMagazine as $pub)
    @if ($pub->status_pub !== 'delete')
        <li>
            <a href="#" data-toggle="modal" data-target="#alertDialog"><img src="@if(count($pub->albums->medias)>0){{asset('storage/'.$pub->albums->medias[0]->nom_media)}}@endif" width="65" height="65" class="pull-left" alt="" /></a>
            <h5><a href="#" data-toggle="modal" data-target="#alertDialog">{!! $pub->title_pub!!}</a></h5>
            <p style="color:#fff !important;text-align:justify !important">
                {!! $pub->resume_pub!!}
            </p>
        </li>
        @endif
        @endforeach
        @endif
    </ul>
    
    <div class="modal fade" id="alertDialog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content" style="background: rgba(30, 40, 64, 1.0);
           background: -webkit-radial-gradient(bottom right, rgba(30, 40, 64, 1.0), rgba(79, 28, 36, 1.0));
           background: -moz-radial-gradient(bottom right, rgba(30, 40, 64, 1.0), rgba(79, 28, 36, 1.0));
           background: radial-gradient(to top left, rgba(30, 40, 64, 1.0), rgba(79, 28, 36, 1.0));">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alert User Unsuscribe for Masora Magazine</h5>
      </div>
      <div class="modal-body">
        <center><h4>The rest of the article is Reserved for <a style="color:#fff !important" href="{{url('/magazine')}}">subscribers</a></h4></center>
      </div>
      <div class="modal-footer">
          <span class="input-group-btn">
                    <button  type="submit" class="btn btn-form  display-4 form-control-label" style="margin-right:5px !important;color:#fff !important;background:none !important;border:3px solid !important;font-size:17px !important"><a style="color:#fff !important" href="{{url('/magazine')}}">Subscribe</a></button>
            <button data-dismiss="modal" type="submit" class="btn btn-form  display-4 form-control-label" style="color:#fff !important;background:none !important;border:3px solid !important;font-size:17px !important">Close</button>
            
            </span>
      </div>
    </div>
  </div>
</div>
</div>
