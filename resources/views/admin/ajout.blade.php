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
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2"
                                method="POST" action="{{route('admin.users.store')}}">
                                @csrf

                                    <div class="form-group">
                                        <label class="col-md-12"> Name</label>
                                        <div class="col-md-12">
                                            <input type="text" name="name"  class="form-control form-control-line"
                                            required autocomplete="name" autofocus/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Pseudo</label>
                                        <div class="col-md-12">
                                            <input type="text" name="pseudo"  class="form-control form-control-line"
                                            required autocomplete="pseudo" autofocus/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label  class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="text" name="email"  class="form-control form-control-line"
                                            required autocomplete="email" autofocus/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label  class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <input type="password" name="password"  class="form-control form-control-line"
                                            required autocomplete="password" autofocus/>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-success text-white">Ajouter</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
@endsection

