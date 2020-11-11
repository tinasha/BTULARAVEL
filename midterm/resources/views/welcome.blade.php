@extends('includes.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 mt-5 text-center">
                <h1><a href="{{ route('company.index') }}">Companies</a></h1>
                <h1><a href="{{ route('employee.index') }}">Employees</a></h1>
            </div>
        </div>
    </div>
@endsection