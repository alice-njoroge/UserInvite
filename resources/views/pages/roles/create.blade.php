@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Define Name and permissions for the Role</div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="text">Name</label>
                                <input type="text" class="form-control" placeholder="Enter role name">
                            </div>
                            <div class="form-group">
                                @foreach($permissions as $permission)
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">
                                            {{$permission->name}}</label>
                                    </div>
                                @endforeach
                            </div>

                        </form>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
