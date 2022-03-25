@extends('layouts.index')


@section('content')
<div class="main-panel" style="background-color: rgb(110, 108, 108)">
    <div class="content-wrapper" style="background-color: rgb(110, 108, 108)">
      <div class="row" style="background-color: rgb(110, 110, 110)">
        <div class="col-sm-4 grid-margin" style="background-color: rgb(110, 109, 109)">
          <div class="card">
            <div class="card-body">
              <h5>Revenue</h5>
              <div class="row">
                <div class="col-8 col-sm-12 col-xl-8 my-auto">
                  <div class="d-flex d-sm-block d-md-flex align-items-center">
                    <h2 class="mb-0">$</h2>
                    <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                  </div>
                  <h6 class="text-muted font-weight-normal"></h6>
                </div>
                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                  <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
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
                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                  <i class="icon-lg mdi mdi-wallet-travel text-danger ml-auto"></i>
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
                  <h6 class="text-muted font-weight-normal"></h6>
                </div>
                <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                  <i class="icon-lg mdi mdi-monitor text-success ml-auto"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>




    </div>
@endsection
