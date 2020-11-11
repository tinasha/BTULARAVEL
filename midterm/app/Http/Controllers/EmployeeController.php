<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeRequest;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employee.index', compact('employees'));
    }

    public function create()
    {
        $companies = Company::all();
        return view('employee.add', compact('companies'));
    }

    public function store(Employee $employee, EmployeeRequest $request)
    {
        $employee->create($request->toArray());
        return redirect(route('employee.index'));
    }

    public function edit(Employee $employee)
    {
        $companies = Company::all();
        return view('employee.edit', compact('employee', 'companies'));
    }

    public function update(Employee $employee, EmployeeRequest $request)
    {
        $employee->update($request->toArray());
        return redirect(route('employee.index'));
    }


    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->back();
    }
}
