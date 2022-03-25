@extends('layouts.index')


@section('content')
<div class="content-wrapper" style="background-color: rgb(255, 255, 255)">
    <div class="page-header">
      <h1 class="page-title"> Basic Tables </h1>
    </div>

            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                        <h3>Ref: {{$dossier->ref}}</h3>
                        <table class="table">
                          <thead>
                            <tr>
                              <th>Nom du fichier</th>
                              <th>Intitule par</th>
                              <th>Destination</th>
                              <th>Date</th>
                              <th>Telecharger</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>{{$dossier->file}}</td>
                              <td>{{$dossier->intitule}}</td>
                              <td>{{$dossier->destination}}</td>
                              <td>{{$dossier->date}}</td>
                              <td><a href="http://"><i class="mdi mdi-arrow-down-bold-circle-outline"></i></a></td>
                            </tr>
                          </tbody>
                        </table>

                  </div>
                </div>
              </div>
            </div>
@endsection
