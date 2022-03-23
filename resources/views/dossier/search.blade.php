@extends('layouts.index')


@section('content')
        <!-- partial -->

          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Basic Tables </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Recherchés</h4>
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


                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
@endsection
