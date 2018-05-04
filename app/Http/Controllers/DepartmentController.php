<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{   
    public function index()
    {
        $departments = Department::all();  
        return $departments->toArray();      
    }
}
