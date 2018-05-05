<?php

use Illuminate\Database\Seeder;
use App\Department;
class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
            'name' => 'Sales'
            ],
            [
            'name' => 'Accounts'
            ],
            [
            'name' => 'IT Support'
            ],
            [
            'name' => 'Marketing'
            ],
            [
            'name' => 'Research'
            ],
            [
            'name' => 'Engineering'
            ],
            [
            'name' => 'Legal'
            ],
            [
            'name' => 'Human Resources'
            ]
        ];
        foreach ($data as $department) {
            Department::create($department);
        }
    }
}
