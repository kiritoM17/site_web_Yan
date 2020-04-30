<section id="featured" class="bg" style="padding:0px !important">
    <div style="width:100% !important">
        <div class="row">
            <div class="col-lg-12">
                <!-- Slider -->
                <div id="main-slider" class="main-slider flexslider" style="width:100% !important">
                    <ul class="slides">
                        <li>
                            <img src="{{url('img/slides/flexslider/atlantaa.JPG')}}" alt="atlanta image" class="car-img"/>
                            <div class="flex-caption">
                                <h3>
                                    {{ Route::is('formation')?'Formation - Certification':'' }}
                                    {{ Route::is('event')?'Evènement':'' }}
                                    {{Route::is('presentation')?'AMAFOR':''}}
                                </h3>
                                <p>
                                    {{ Route::is('formation')?'Formation - Certification en création de la valeur ajoutée (V.A.)':'' }}
                                    {{Route::is('presentation')?'Welcome to AMAFOR and MASSORA GROUP':''}}
                                </p>
                                <a href="{{ Route::is('formation')?'document/formation/formulaire_inscription.docx':'#' }}" target="_blanc" class="btn btn-theme">
                                    {{Route::is('formation')?'Télécharger la fiche d\'inscription':''}}
                                    {{Route::is('event')?'Découvrir l\'évènement du mois':''}}
                                </a>
                            </div>
                        </li>
                        <li>
                            <img src="{{ url('img/slides/flexslider/gala.JPG') }}" alt="" class="car-img" />
                            <div class="flex-caption">
                                <h3>
                                    {{ Route::is('formation')?'Formation - Certification':'' }}
                                    {{Route::is('presentation')?'AMAFOR':''}}
                                </h3>
                                <p>
                                    {{ Route::is('formation')?'Formation - Certification en Multi Level Marketing (MLM)':'' }}
                                    {{Route::is('presentation')?'Our company is firstly a big family and then a global village':''}}
                                </p>
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