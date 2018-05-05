<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;

class DepartmentController extends Controller
{ 

    public function __construct()
    {
        $this->middleware('auth');
    }  
    
    public function index()
    {
        $departments = Department::all();  
        return $departments->toArray();      
    }
}
