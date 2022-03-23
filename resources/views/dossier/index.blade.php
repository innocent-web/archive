@extends('layouts.index')


@section('content')
        <!-- partial -->

          <div class="content-wrapper" style="background-color: rgb(131, 128, 128)">
            <div class="page-header">
              <h1 class="page-title"> Basic Tables </h1>
            </div>
            <div class="row" >
              <div class="col-lg-12 grid-margin stretch-card" >
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Nos Archives</h4>
                    <a class="nav-link" href=" {{route('dossiers.create')}} ">
                        <span class="menu-icon">
                          <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title">Nouveau</span>
                      </a>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>ref</th>
                            <th>Destination</th>
                            <th>intitule</th>
                            <th>Documents</th>
                            <th>Type</th>
                            <th>Genre</th>
                            <th>Date</th>
                          </tr>
                        </thead>
                        <tbody>

                          @foreach ($dossier as $dossier)

                          <tr>
                            <td><a href="{{route('dossiers.show',$dossier->id)}}">{{$dossier->ref}}</a></td>
                            <td>{{$dossier->destination}}</td>
                            <td>{{$dossier->intitule}}</td>
                            <td> {{$dossier->file}}</td>
                            <td>{{$dossier->type_id}} </td>
                            <td>{{$dossier->genre_id}}</td>
                            <td>{{$dossier->date}}</td>
                          </tr>

                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
@endsection
