@extends('layouts.type')

@section('content')
<div class="row">
    <!-- column -->
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <!-- title -->
                <div class="d-md-flex">
                    <div>
                        <h4 class="card-title">Nos Types de Document</h4>

                    </div>
                    <div class="ms-auto">
                        <a href=" {{route('dossiers.create')}} " class="btn d-block w-100 btn-primary text-white" >Nouveau Type</a>
                    </div>
                </div>
                <!-- title -->
                <div class="table-responsive">
                    <table class="table mb-0 table-hover align-middle text-nowrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">Type</th>
                                <th class="border-top-0">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($type as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->type}}</td>
                                <td>
                                    <a href="" class="btn d-inline w-100 btn-success text-white" >Editer</a>
                                    <form action=" {{route('type.destroy', $item->id)}}" method="get" class="d-inline">
                                        <a  class="btn d-inline w-100 btn-danger text-white" >Supprimer</a>
                                    </form>

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
