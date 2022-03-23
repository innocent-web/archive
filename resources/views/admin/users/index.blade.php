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
                    <h4 class="card-title">Liste Users</h4>
                    <a class="nav-link" href=" {{route('register')}} ">
                        <span class="menu-icon">
                          <i class="mdi mdi-speedometer"></i>
                        </span>
                        <span class="menu-title">Nouveau User</span>
                      </a>
                    <div class="table-responsive col-lg-12">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Nom</th>
                            <th>Pseudo</th>
                            <th>email</th>
                            <th>Role</th>
                            <th>Action</th>

                          </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $item)
                          <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->pseudo}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{ implode(',', $item->roles()->get()->pluck('name')->toArray()) }}</td>

                            <td>
                                <form action="{{route('admin.users.show', $item->id)}}"  class="d-inline">
                                            <button class="btn btn-success" >Editer</button>
                                    </form>
                                @can('delete-users')
                                <form action="{{route('admin.users.destroy', $item->id)}}" method="post" class="d-inline">
                                @csrf
                                @method('Delete')
                                        <button class="btn btn-danger" >Supprimer</button>
                                </form>
                                @endcan</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
@endsection
