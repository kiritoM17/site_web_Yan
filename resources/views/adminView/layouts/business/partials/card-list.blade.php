<div class="row clearfix">
    @if (count($business)>0)
    @foreach ($business as $pub)
    @if ($pub->status_pub !== 'delete')
    <div class="col-xs-6 col-sm-6" style="margin-bottom:2.5% !important">
        <div class="container">
            <div class="column">
                <!-- Post-->
                <div class="post-module">
                    <!-- Thumbnail-->
                    <div class="thumbnail">
                        <div class="date">
                            <div class="day">{{ $pub->create_at->format('d') }}</div>
                            <div class="month">{{ $pub->create_at->format('M') }}</div>
                        </div>
                        <img src="@if(count($pub->albums->medias)>0){{asset('storage/'.$pub->albums->medias[0]->nom_media)}}@endif"/>
                    </div>
                    <!-- Post Content-->
                    <div class="post-content">
                        <div class="category">
                            Business
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: white">
                                <i class="material-icons">more_vert</i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li data-toggle="modal" data-target="#addImage{{$pub->id_pub}}"><a href="javascript:void(0);"><span class="hidden-xs">Add MEDIA</span><i class="material-icons" style="color: orangered !important" >add_a_photo</i></a></li>
                                <li data-toggle="modal" data-target="#editActualite{{$pub->id_pub}}"><a href="javascript:void(0);"><span class="hidden-xs">Update</span><i class="material-icons" style="color: orangered !important">edit</i></a></li>
                                <li data-toggle="modal" data-target="#deletePublication{{$pub->id_pub}}"><a href="javascript:void(0);"><span class="hidden-xs">Delete</span><i class="material-icons" style="color: orangered !important">delete</i></a></li>
                                
                            </ul>
                        </div>
                        <h1 class="title align-center">{{ $pub->title_pub }}</h1>
                        <div class="description description-act">{!! $pub->resume_pub!!}</div>
                        <div class="post-meta align-center">
                            <a href="{{url('actualite/getActualiteAdminById/'.$pub->id_pub)}}" class="btn btn-xs bg-deep-orange">
                                <i class="material-icons" style="color: white !important;">visibility</i><span style="color: white !important;"> Previsualiser</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif

    @include('adminView.layouts.publication.partials.edit_publication')
    @include('adminView.layouts.publication.partials.addMedia')
    @include('adminView.layouts.publication.partials.deletePublication')
    @endforeach
    {{ $business->links() }}
    @endif
</div>