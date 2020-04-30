@extends('template.master_template')
@section('page-title')
    Magazine
@endsection
@section('content-page')
    <div class="row">
        <embed src="{{ url('document/formation/formulaire_inscription.pdf') }}" style="padding:2.5% !important;width:100%; height:500px !important" type='application/pdf'/>
    </div>
@endsection