@extends('layouts.index')


@section('content')
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
<div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Modifier <strong>{{$user->name}}</strong> </h4>
        <form class="form-sample" method="POST" action="{{route('admin.users.update', $user)}}">
            @csrf
            @method('PATCH')
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nom</label>
                <div class="col-sm-9">
                  <input type="text" name="name" value="{{ old('name') ?? $user->name}}" class="form-control"
                   required autocomplete="name" autofocus/>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Pseudo</label>
                <div class="col-sm-9">
                  <input type="text" name="pseudo" value="{{ old('pseudo') ?? $user->pseudo}}" class="form-control"
                    required autocomplete="pseudo" autofocus />
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="email" name="email"  value="{{ old('email') ?? $user->email}}" class="form-control"
                     required autocomplete="email" autofocus />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Role</label>
                @foreach ($roles as $role)
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="roles[]" value="{{ $role->id }}"
                    id="{{ $role->id }}" @if ($user->roles->pluck('id')) checked @endif  >
                   <label for="{{ $role->id }}" class="form-check-label">{{ $role->name}}</label>
                  </div>
                @endforeach
              </div>
            </div>
          </div>

          <button type="submit" class="btn btn-primary mr-2">Modifier les Info</button>
        </form>
      </div>
    </div>
  </div>
@endsection
