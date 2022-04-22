@extends('layouts.index')


@section('content')
<div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-6">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 d-flex align-items-center">
                  <li class="breadcrumb-item"><a href=" {{route('home')}} " class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dossiers</li>
                  <li class="breadcrumb-item active" aria-current="page">Dossier Sortie</li>
                </ol>
              </nav>
        </div>
    </div>
</div>
                <div class="row">
                    <div class="col-lg-12  col-xlg-12 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">{{$dossier->file}}</h4>
                                <form class="form-sample" method="POST" action="{{route('sortidoc')}}"
                                enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Ref</label>
                                        <div class="col-sm-9">
                                        <input type="text" name="ref" value="{{$dossier->ref}}" class="form-control" required/>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Type</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="type" value="{{$dossier->type}}" class="form-control" required/>
                                            </div>
                                        </div>
                                        </div>

                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Intitule</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="intitule" value="{{$dossier->intitule}}" class="form-control" required />
                                        </div>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" style="color: red" >Genre*</label>
                                            <div class="col-sm-9">
                                                <select class="form-select shadow-none form-control-line" name="genre">
                                                    <option>Choisir</option>
                                                    @foreach ($genre as $genre)
                                                    <option value="{{$genre->genre}}">{{$genre->genre}}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label" style="color: red">Destination*</label>
                                            <div class="col-sm-9">
                                            <input type="text" name="destination"  class="form-control" required />
                                            </div>
                                        </div>
                                        </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                        <label class="col-sm-3 col-form-label" style="color: red">Ficher*</label>
                                        <div class="col-sm-9">
                                            <input type="file" value="{{$dossier->file}}" class="form-control" name="file" >
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Date sorti</label>
                                            <div class="col-sm-9">
                                              <input class="form-control" name="date" type="datetime-local" placeholder="dd/mm/yyyy"  required/>
                                            </div>
                                          </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Observation</label>
                                        <div class="col-sm-9">
                                        <input type="text" class="form-control" value="{{$dossier->observation}}"  name="observation" >
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-success text-white">Envoi le Document</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
@endsection

