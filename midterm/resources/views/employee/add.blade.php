@extends('includes.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 mt-5">
                <h1>Create Employee</h1>
                <form class="formHorisontal" action="{{ route('employee.store') }}" method="POST">
                    @csrf
                    @method("POST")
                    <div class="form-group col-sm-12">
                        <label>Company:</label>
                        <select class="form-control" name="company_id" id="company_id" >
                            <option value="">Select</option>
                            @foreach ($companies as $company)
                                <option value="{{ $company->id }}">{{ $company->name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('company_id'))
                            <span class="text-danger">{{ $errors->first('company_id') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-sm-12">
                        <label for="exampleInputEmail1">Enter Name</label>
                        <input type="text" class="form-control" id="name" name="name"  placeholder="Enter Name">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-sm-12">
                        <label for="exampleInputEmail1">Enter Lastname</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Lastname">
                        @if ($errors->has('lastname'))
                            <span class="text-danger">{{ $errors->first('lastname') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-sm-12">
                        <label for="exampleInputEmail1">Enter Birthdate</label>
                        <input type="date" class="form-control" id="birthdate" name="birthdate" placeholder="Enter Birthdate">
                        @if ($errors->has('birthdate'))
                            <span class="text-danger">{{ $errors->first('birthdate') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-sm-12">
                        <label for="exampleInputEmail1">Enter Personal Id</label>
                        <input type="number" class="form-control" id="personal_id" name="personal_id"  placeholder="Personal Id">
                        @if ($errors->has('personal_id'))
                            <span class="text-danger">{{ $errors->first('personal_id') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-sm-12">
                        <label for="exampleInputEmail1">Enter Salary</label>
                        <input type="number" class="form-control" id="salary" name="salary" placeholder="Enter Salary">
                        @if ($errors->has('salary'))
                            <span class="text-danger">{{ $errors->first('salary') }}</span>
                        @endif
                    </div>
                    <div class="form-group  col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection