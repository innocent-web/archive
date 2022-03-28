@extends('layouts.dossier')


@section('content')
<div class="row">
    <!-- column -->
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <!-- title -->
                <div class="d-md-flex">
                    <div>
                        <h4 class="card-title">Nos Documents</h4>
                        <a href=" {{route('dossiers.create')}} " class="btn d-block w-100 btn-danger text-white" >Nouveau Document</a>
                    </div>
                    <div class="ms-auto">
                        <div class="dl">
                            <select class="form-select shadow-none">
                                <option value="0" selected>Monthly</option>
                                <option value="1">Daily</option>
                                <option value="2">Weekly</option>
                                <option value="3">Yearly</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- title -->
                <div class="table-responsive">
                    <table class="table mb-0 table-hover align-middle text-nowrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">Ref</th>
                                <th class="border-top-0">Intitule</th>
                                <th class="border-top-0">Type</th>
                                <th class="border-top-0">Genre</th>
                                <th class="border-top-0">Destination</th>
                                <th class="border-top-0">Documents</th>
                                <th class="border-top-0">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dossier as $dossier)
                            <tr>
                                <td><a href="{{route('dossiers.show',$dossier->id)}}">
                                    <h4 class="m-b-0 font-16">{{$dossier->ref}}</h4>
                                    </a></td>
                                <td>{{$dossier->intitule}}</td>
                                <td>{{$dossier->type_id}}</td>
                                <td>{{$dossier->genre_id}}</td>
                                <td>{{$dossier->destination}}</td>
                                <td>{{$dossier->file}}</td>
                                <td>
                                    <h5 class="m-b-0">{{$dossier->date}}</h5>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
