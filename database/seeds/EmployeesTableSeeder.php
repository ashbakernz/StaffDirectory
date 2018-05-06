<?php

use Illuminate\Database\Seeder;
use App\Employee;

class EmployeesTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get("database/seeds/json/DeveloperTestData.json");
        $data = json_decode($json);
        foreach ($data as $obj) {
          Employee::create(array(
            'first_name' => $obj->first_name,
            'last_name' => $obj->last_name,
            'department_id' => $obj->department_id,
            'email' => $obj->id,
            'bio_description' => $obj->bio_description
          ));
        }
    }
}
