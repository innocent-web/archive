@extends('layouts.index')

@section('content')
<div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-6">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 d-flex align-items-center">
                  <li class="breadcrumb-item"><a href=" {{route('home')}} " class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Type</li>
                </ol>
              </nav>
            <h1 class="mb-0 fw-bold">Type</h1>
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
                    <div class="ms-auto">
                        <a href=" {{route('type.create')}} " class="btn d-block w-100 btn-primary text-white" >Nouveau Type</a>
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
                                    <a href="{{route('type.edit', $item->id)}}"  class="btn d-inline w-100 btn-success text-white" >Editer</a>
                                    <form action=" {{route('type.destroy', $item->id)}}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" href="{{route('type.destroy', $item->id)}}"
                                        class="btn d-inline btn-danger text-white" >Supprimer</button>
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
