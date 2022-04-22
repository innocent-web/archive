@extends('layouts.index')

@section('content')
<div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-6">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 d-flex align-items-center">
                  <li class="breadcrumb-item"><a href=" {{route('home')}} " class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Dossiers</li>
                </ol>
              </nav>
              <h1 class="mb-0 fw-bold">Dossiers</h1>
        </div>
    </div>
</div>
<div class="row">
    <!-- column -->
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <!-- title -->
                <div class="d-md-flex">
                    <div>
                        <h4 class="card-title">Liste</h4>

                    </div>
                    <a href=" {{route('dossiers.create')}} " class="btn d-block ms-auto btn-danger text-white" >Nouveau Document</a>
                    <div class="ms-auto">
                        <div class="dl">
                            <select class="form-select shadow-none">
                                <option value="0" selected>Jour</option>
                                <option value="1">Semaine</option>
                                <option value="2">Mois</option>
                                <option value="3">Annee</option>
                            </select>
                        </div>
                    </div>
                </div>
                <br>
                <!-- title -->
                <div class="table-responsive">
                    <table class="table mb-0 table-hover align-middle text-nowrap">

                        <thead>
                            <h5>Dossier Arrivee</h5>
                            <tr>
                                <th class="border-top-0">Ref</th>
                                <th class="border-top-0">Intitule</th>
                                <th class="border-top-0">Destination</th>
                                <th class="border-top-0">Documents</th>
                                <th class="border-top-0">Date d'arrivee</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dossier as $item)
                            <tr>
                                <td><a href="{{route('dossiers.show',$item->id)}}">
                                    <h4 class="m-b-0 font-16">{{$item->ref}}</h4>
                                    </a></td>
                                <td>{{$item->intitule}}</td>
                                <td>{{$item->destination}}</td>
                                <td>{{$item->file}}</td>
                                <td>
                                    <h5 class="m-b-0">{!! date('d/M/y', strtotime($item->date)) !!}</h5>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
<br>
                    <table class="table mb-0 table-hover align-middle text-nowrap">

                        <thead>
                            <h5>Dossier Sorti</h5>
                            <tr>
                                <th class="border-top-0">Ref</th>
                                <th class="border-top-0">Intitule</th>
                                <th class="border-top-0">Destination</th>
                                <th class="border-top-0">Documents</th>
                                <th class="border-top-0">Date d'envoie</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($dossier_sorti as $item)
                            <tr>
                                <td><a href="{{route('dossiers.show',$item->id)}}">
                                    <h4 class="m-b-0 font-16">{{$item->ref}}</h4>
                                    </a></td>
                                <td>{{$item->intitule}}</td>
                                <td>{{$item->destination}}</td>
                                <td>{{$item->file}}</td>
                                <td>
                                    <h5 class="m-b-0">{!! date('d/M/y', strtotime($item->date)) !!}</h5>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                {{ $dossier -> links() }}
            </div>
        </div>
    </div>
</div>
@endsection
