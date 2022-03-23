@extends('layouts.index')


@section('content')
    <div class="content-wrapper" style="background-color: rgb(153, 148, 148)">
        <div class="page-header">
          <h1 class="page-title"> Basic Tables </h1>
        </div>
<div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Ajouter un nouveau document</h4>
        <form class="form-sample" method="POST" action="{{route('dossiers.store')}}"
        enctype="multipart/form-data">
            @csrf
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Ref</label>
                <div class="col-sm-9">
                  <input type="text" name="ref" class="form-control" required/>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Destination</label>
                <div class="col-sm-9">
                  <input type="text" name="destination" class="form-control" required />
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Intitule</label>
                <div class="col-sm-9">
                    <input type="text" name="intitule" class="form-control" required />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Date</label>
                <div class="col-sm-9">
                  <input class="form-control" name="date" type="datetime-local" placeholder="dd/mm/yyyy" />
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Type</label>
                <div class="col-sm-9">
                  <select class="form-control" name="type_id">

                    <option >Choisir....</option>
                    @foreach ($type as $type)
                    <option value="{{$type->type}}">{{$type->type}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Ficher</label>
                  <div class="col-sm-9">
                      <input type="file" class="form-control" name="file" >
                  </div>
                </div>
              </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Genre</label>
                <div class="col-sm-9">
                  <select class="form-control" name="genre_id">
                    <option>Choisir...</option>
                    @foreach ($genre as $genre)
                    <option value="{{$genre->genre}}">{{$genre->genre}}</option>
                    @endforeach

                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Observation</label>
                <div class="col-sm-9">
                <textarea class="form-control" name="observation" id="exampleTextarea1" rows="5"></textarea>
                </div>
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-primary mr-2">Submit</button>
        </form>
      </div>
    </div>
  </div>

@endsection
