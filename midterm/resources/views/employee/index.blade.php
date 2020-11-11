@extends('includes.layout')

@section('content')
    <div class="container">
        <div class="row">
            <h1>Employees</h1>
            <div class="col-sm-12 col-md-12 mt-5">
                <a class="btn btn-primary" href="{{ route('employee.create') }}">Create Employee</a>
                <table class="table table-striped mt-5">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">company</th>
                            <th scope="col">name</th>
                            <th scope="col">lastname</th>
                            <th scope="col">birthdate</th>
                            <th scope="col">personal_id</th>
                            <th scope="col">salary</th>
                            <th scope="col">edit</th>
                            <th scope="col">delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($employees as $employee)
                            <tr>
                                <th scope="row">{{ $employee->id }}</th>
                                <td>{{ $employee->company->name ?? 'Not fixed' }}</td>
                                <td>{{ $employee->name }}</td>
                                <td>{{ $employee->lastname }}</td>
                                <td>{{ $employee->birthdate }}</td>
                                <td>{{ $employee->personal_id }}</td>
                                <td>{{ $employee->salary }}</td>
                                <td><a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-warning">Edit</a></td>
                                <td>
                                    <form method="POST" action="{{ route('employee.destroy', $employee->id) }}">
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
