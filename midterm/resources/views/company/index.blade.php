@extends('includes.layout')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Companies</h1>
            <div class="col-sm-12 col-md-12 mt-5">
                <a class="btn btn-primary" href="{{ route('company.create') }}">Create Company</a>
                <table class="table table-striped mt-5">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">name</th>
                            <th scope="col">code</th>
                            <th scope="col">address</th>
                            <th scope="col">city</th>
                            <th scope="col">Country</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Updated At</th>
                            <th scope="col">Employees</th>
                            <th scope="col">edit</th>
                            <th scope="col">delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($companies as $company)
                            <tr>
                                <th scope="row">{{ $company->id }}</th>
                                <td>{{ $company->name }}</td>
                                <td>{{ $company->code }}</td>
                                <td>{{ $company->address }}</td>
                                <td>{{ $company->city }}</td>
                                <td>{{ $company->country }}</td>
                                <td>{{ $company->created_at }}</td>
                                <td>{{ $company->updated_at }}</td>
                                <td><a href="{{ route('company.employees', $company->id) }}" class="btn btn-success">Employees</a></td>
                                <td><a href="{{ route('company.edit', $company->id) }}" class="btn btn-warning">Edit</a></td>
                                <td>
                                    <form method="POST" action="{{ route('company.destroy', $company->id) }}">
                                       @csrf
                                       @method("DELETE")
                                       <div class="form-group">
                                          <input type="submit" class="btn btn-danger" value="Delete">
                                       </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
