@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                @endif
                <form action="{{action('RolesController@store')}}" method="post">

                    <div class="card">
                        <div class="card-header">Define Name and permissions for the Role</div>
                        <div class="card-body">
                            @csrf
                            <div class="form-group">
                                <label for="text">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter role name">
                            </div>
                            <div class="form-group">
                                @foreach($permissions as $row)
                                    <div class="row">
                                        @foreach($row as $permission)
                                            <div class="col-md-6">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                           value="{{$permission->id}}"
                                                           name="permissions[]"
                                                           id="{{$permission->id}}">
                                                    <label class="custom-control-label" for="{{$permission->id}}">
                                                        {{$permission->name}}</label>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                @endforeach
                            </div>

                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary float-right">Submit</button>
                            <a href="{{url('/roles')}}" class="btn btn-primary float-left">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
