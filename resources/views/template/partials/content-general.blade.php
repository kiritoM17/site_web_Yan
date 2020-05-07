<div class="row">
    <div class="col-lg-4 col-md-12">
    <img class=" img-view thumbnail" src="@if(count($pub->albums->medias)>0){{asset('storage/'.$pub->albums->medias[0]->nom_media)}}@endif">
    </div>
    <div class="col-lg-8 col-md-8 actu-div">
        <div class="row">
            <div class="col-md-12 col-lg-12" style="float: none">
                <h3> {!! $pub->title_pub!!}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 description-act">
                {!! $pub->resume_pub!!}
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-5 col-md-6 pull-right floatright ">
                <p ><span>Publier le:</span>  {{ $pub->update_at->format('d-M-Y') }}</p>
            </div>
        </div>
    </div>
</div>