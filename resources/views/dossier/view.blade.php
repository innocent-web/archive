@extends('layouts.index')
@section('content')
<div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-6">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 d-flex align-items-center">
                  <li class="breadcrumb-item"><a href=" {{route('home')}} " class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dossiers</li>
                  <li class="breadcrumb-item active" aria-current="page">view</li>
                </ol>
              </nav>
        </div>
    </div>
</div>
<div class="row">
    <!-- Column -->
    <div class="col-lg-4 col-xlg-3 col-md-5">
        <div class="card">
            <div class="card-body">
                <center class="m-t-30">
                    <a href="{{route('download', $dossier->file)}}" target="_blank" >
                        <img src="../../../images/download-flat.png"
                    class="rounded-circle" width="150" alt="Telecharger" ></a>
                    <h4 class="card-title m-t-10">{{$dossier->file}}</h4>
                    <h6 class="card-subtitle">Reference : {{$dossier->ref}}</h6>
                </center>
            </div>
        </div>

    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="card">
            <div class="card-body">
                    <div class="form-group">
                        <label class="col-md-12"> <strong>Intitule : </strong> {{$dossier->intitule}}</label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12"> <strong>Destination : </strong> {{$dossier->destination}}</label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12"> <strong>Type : </strong> {{$dossier->type}}</label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12"> <strong>Genre : </strong> {{$dossier->genre}}</label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12"> <strong>Observation : </strong> {{$dossier->observation}}</label>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12"> <strong>Date : </strong> {!! date('d/M/y', strtotime($dossier->date)) !!}</label>
                    </div>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
@endsection
