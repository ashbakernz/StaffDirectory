<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Transformers\EmployeeTransformer;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;

class EmployeeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $employees = Employee::with('department')->latestFirst()->get();
        
        return fractal()
            ->collection($employees)
            ->parseIncludes(['user'])
            ->transformWith(new EmployeeTransformer)
            ->toArray();
            
    }

    public function show($id)
    {
        $employee = Employee::find($id)->with('department')->latestFirst()->get();

        return view('employee.show');
    }

}
