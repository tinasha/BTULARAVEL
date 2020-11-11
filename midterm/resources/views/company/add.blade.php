@extends('includes.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 mt-5">
                <h1>Create Company</h1>
                <form class="formHorisontal" action="{{ route('company.store') }}" method="POST">
                    @csrf
                    @method("POST")
                    <div class="form-group col-sm-12">
                        <label for="exampleInputEmail1">Enter Name</label>
                        <input type="text" class="form-control" id="name" name="name"  placeholder="Enter Name">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-sm-12">
                        <label for="exampleInputEmail1">Enter Code</label>
                        <input type="text" class="form-control" id="surname" name="code" placeholder="Enter Code">
                        @if ($errors->has('code'))
                            <span class="text-danger">{{ $errors->first('code') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-sm-12">
                        <label for="exampleInputEmail1">Enter Address</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter address">
                        @if ($errors->has('address'))
                            <span class="text-danger">{{ $errors->first('address') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-sm-12">
                        <label for="exampleInputEmail1">Enter City</label>
                        <input type="text" class="form-control" id="city" name="city" placeholder="Enter City">
                        @if ($errors->has('city'))
                            <span class="text-danger">{{ $errors->first('city') }}</span>
                        @endif
                    </div>
                    <div class="form-group col-sm-12">
                        <label for="exampleInputEmail1">Enter Country</label>
                        <input type="text" class="form-control" id="country" name="country"  placeholder="Enter Country">
                        @if ($errors->has('country'))
                            <span class="text-danger">{{ $errors->first('country') }}</span>
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