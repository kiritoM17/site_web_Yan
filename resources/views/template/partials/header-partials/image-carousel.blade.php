<section id="featured" class="bg hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Slider -->
                <div id="main-slider" class="main-slider flexslider">
                    <ul class="slides">
                        <li>
                            <img src="{{url('img/slides/flexslider/atlantaa.JPG')}}" alt="" />
                            <div class="flex-caption">
                                <h3>{{ Route::is('formation')?'Formation - Certification':'' }}</h3>
                                <p>{{ Route::is('formation')?'Formation - Certification en création de la valeur ajoutée (V.A.)':'' }}</p>
                                <a href="{{ Route::is('formation')?'document/formation/formulaire_inscription.docx':'#' }}" target="_blanc" class="btn btn-theme">{{Route::is('formation')?'Télécharger la fiche d\'inscription':''}}</a>
                            </div>
                        </li>
                        <li>
                            <img src="{{ url('img/slides/flexslider/gala.JPG') }}" alt="" />
                            <div class="flex-caption">
                                <h3>{{ Route::is('formation')?'Formation - Certification':'' }}</h3>
                                <p>{{ Route::is('formation')?'Formation - Certification en Multi Level Marketing (MLM)':'' }}</p>
                                <a href="{{ Route::is('formation')?'#':'#' }}" class="btn btn-theme">{{ Route::is('formation')?'Télécharger Sylabus':'' }}</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- end slider -->
            </div>
        </div>
    </div>
</section>