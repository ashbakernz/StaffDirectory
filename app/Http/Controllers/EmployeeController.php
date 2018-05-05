<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Transformers\EmployeeTransformer;
use League\Fractal\Pagination\IlluminatePaginatorAdapter;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::with('department')->latestFirst()->get();
        
        return fractal()
            ->collection($employees)
            ->parseIncludes(['user'])
            ->transformWith(new EmployeeTransformer)
            ->toArray();
            
    }

}
