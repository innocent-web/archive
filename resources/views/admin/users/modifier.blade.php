@extends('layouts.index')


@section('content')

                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <center class="m-t-30"> <img src="../../../images/favicon.ico"
                                        class="rounded-circle" width="150" />
                                    <h4 class="card-title m-t-10">{{$user->name}}</h4>
                                </center>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <div class="card-body"> <small class="text-muted">Email address </small>
                                <h6> {{$user->email}}</h6>
                                <div class="map-box">
                                </div> <small class="text-muted p-t-30 db">Social Profile</small>
                                <br />
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-facebook-f"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-twitter"></i></button>
                                <button class="btn btn-circle btn-secondary"><i class="fab fa-instagram"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2"
                                method="POST" action="{{route('admin.users.update', $user)}}">
                                @csrf
                                @method('PATCH')
                                    <div class="form-group">
                                        <label class="col-md-12"> Name</label>
                                        <div class="col-md-12">
                                            <input type="text" name="name" value="{{ old('name') ?? $user->name}}" class="form-control form-control-line"
                                            required autocomplete="name" autofocus/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Pseudo</label>
                                        <div class="col-md-12">
                                            <input type="text" name="pseudo" value="{{ old('pseudo') ?? $user->pseudo}}" class="form-control form-control-line"
                                            required autocomplete="pseudo" autofocus/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label  class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="text" name="email" value="{{ old('email') ?? $user->email}}" class="form-control form-control-line"
                                            required autocomplete="email" autofocus/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-12">Role</label>
                                        <div class="col-sm-12">
                                            @foreach ($roles as $role)
                                                <div class="form-check">
                                                 <input type="radio" class="form-check-input" name="roles[]" value="{{ old('role') ?? $role->id }}"
                                                 id="{{ $role->id }}" @if ($user->roles->pluck('id')) checked @endif  >
                                            <label for="{{ $role->id }}" class="form-check-label">{{ $role->name}}</label>
                                        </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-success text-white">Modifier le Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
@endsection
