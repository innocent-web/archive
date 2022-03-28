@extends('layouts.index')


@section('content')
<div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-6">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 d-flex align-items-center">
                  <li class="breadcrumb-item"><a href=" {{route('home')}} " class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Type</li>
                  <li class="breadcrumb-item active" aria-current="page">Ajout_type</li>
                </ol>
              </nav>

        </div>
    </div>
</div>
                <div class="row">
                    <div class="col-lg-12  col-xlg-12 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Ajouter un nouveau Type</h4>
                                <form class="form-sample" method="POST" action="{{route('type.store')}}"
                                enctype="multipart/form-data">
                                    @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Type</label>
                                        <div class="col-sm-9">
                                        <input type="text" name="type" class="form-control" required/>
                                        </div>
                                    </div>
                                    </div>

                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-success text-white">Ajouter le Type</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
@endsection

