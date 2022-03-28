@extends('layouts.index')


@section('content')
<div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-6">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 d-flex align-items-center">
                  <li class="breadcrumb-item"><a href=" {{route('home')}} " class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Tableau de bord</li>
                </ol>
              </nav>
            <h1 class="mb-0 fw-bold">Tableau de bord</h1>
        </div>
    </div>
</div>
<div class="main-panel" >
    <div class="content-wrapper" >
      <div class="row" >
        <div class="col-sm-4 grid-margin" >
          <div class="card">
            <div class="card-body">
              <h5>Revenue</h5>
              <div class="row">
                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                  <div class="d-flex d-sm-block d-md-flex align-items-center">
                    <h2 class="mb-0">0 Ar</h2>
                    <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                  </div>
                  <h6 class="text-muted font-weight-normal"></h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4 grid-margin">
          <div class="card">
            <div class="card-body">
              <h5>Nbr Doc</h5>
              <div class="row">
                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                  <div class="d-flex d-sm-block d-md-flex align-items-center">
                    <h2 class="mb-0">{{$dossier->count()}}</h2>
                    <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                  </div>
                  <h6 class="text-muted font-weight-normal"></h6>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-4 grid-margin">
          <div class="card">
            <div class="card-body">
              <h5>Nbrs Users</h5>
              <div class="row">
                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                  <div class="d-flex d-sm-block d-md-flex align-items-center">
                    <h2 class="mb-0">{{$user->count()}}</h2>
                    <p class="text-danger ml-2 mb-0 font-weight-medium"></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
