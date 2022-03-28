@extends('layouts.index')

@section('content')
<div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-6">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 d-flex align-items-center">
                  <li class="breadcrumb-item"><a href=" {{route('home')}} " class="link"><i class="mdi mdi-home-outline fs-4"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Genre</li>
                  <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
              </nav>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12  col-xlg-12 col-md-7">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Modifier</h4>
                <form class="form-sample" method="POST" action="{{route('genre.update', $genre->id)}}"
                >
                    @csrf
                    @method('PATCH')
                <div class="row">
                    <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Genre</label>
                        <div class="col-sm-9">
                        <input type="text" name="genre" value="{{$genre->genre}}" class="form-control" required/>
                        </div>
                    </div>
                    </div>

                <div class="form-group">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-success text-white">Modifier</button>
                    </div>
                </div>
                </form>
            </div>
            </div>
        </div>
            </div>
        </div>
    </div>
@endsection
