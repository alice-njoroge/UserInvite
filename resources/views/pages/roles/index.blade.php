@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">List of Roles
                        <a href="{{url('/roles/create')}}" class="btn btn-primary float-right">Create New</a>

                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($roles as $role)
                                <tr>
                                    <th scope="row">{{$loop->iteration}}</th>
                                    <td>{{$role->name}}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2"> Sorry! no Roles have been added yet</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
