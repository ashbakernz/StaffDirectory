<?php

namespace App\Transformers;

use App\Department;

class DepartmentTransformer extends \League\Fractal\TransformerAbstract
{
    public function transform(Department $department)
    {
        return [
            'name' => $department->name,
        ];
    }
}
