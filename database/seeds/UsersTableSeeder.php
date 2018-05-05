<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
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
            'email' => 'admin@example.com',
            'password' => \Hash::make('secret')
            ]
        ];
        foreach ($data as $user) {
            User::create($user);
        }
    }
}
