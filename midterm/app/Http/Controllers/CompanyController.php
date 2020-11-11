<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyRequest;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::all();
        return view('company.index', compact('companies'));
    }

    public function create()
    {
        return view('company.add');
    }

    public function store(Company $company, CompanyRequest $request)
    {
        $company->create($request->toArray());
        return redirect(route('company.index'));
    }

    public function edit(Company $company)
    {
        return view('company.edit', compact('company'));
    }

    public function update(Company $company, CompanyRequest $request)
    {
        $company->update($request->toArray());
        return redirect(route('company.index'));
    }


    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->back();
    }

    public function employees($id)
    {
        $employees = Employee::where('company_id',$id)->get();
        return view('employee.index', compact('employees'));
    }
}
