@extends('layouts.index')


@section('content')
<div class="row">
    <!-- column -->
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <!-- title -->
                <div class="d-md-flex">
                    <div>
                        <h4 class="card-title">List User</h4>
                        <a href=" {{route('admin.users.create')}} " class="btn d-block w-100 btn-primary text-white" >Nouveau User</a>
                    </div>

                </div>
                <!-- title -->
                <div class="table-responsive">
                    <table class="table mb-0 table-hover align-middle text-nowrap">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Pseudo</th>
                                <th>Email</th>
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
                                              <button class="btn d-inline  btn-success text-white" >Editer</button>
                                      </form>
                                  @can('delete-users')
                                  <form action="{{route('admin.users.destroy', $item->id)}}" method="post" class="d-inline">
                                  @csrf
                                  @method('Delete')
                                          <button class="btn d-inline  btn-danger text-white" >Supprimer</button>
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
@endsection
