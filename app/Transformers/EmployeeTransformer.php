<?php

namespace App\Transformers;

use App\Employee;
use App\Department;

class EmployeeTransformer extends \League\Fractal\TransformerAbstract
{
    protected $availableIncludes = ['user', 'department'];

    public function transform(Employee $employee)
    {
        return [
            'id' => $employee->id,
            'name' => $employee->first_name . ' ' . $employee->last_name,
            'bio_description' => $employee->bio_description,
            'department' => $employee->department->name,
            'created_at_human' => $employee->created_at->diffForHumans(),
        ];
    }

    public function includeUser(Employee $employee)
    {
        return $this->item($employee->user, new UserTransformer);
    }

    public function includeDepartment(Employee $employee)
    {
        return $this->item($employee->department, new DepartmentTransformer);
    }
}
