<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {       
        for ($i=0; $i < 10 ; $i++) { 
            # code...
            \App\Models\Employee::create([
                'name' => $i.'_employee',
                'email' => 'employee'.$i.'@gmail.com',
                'role' => $i.'_role',
                'phone' => '9876543210',
                'dob' => '2021-01-04'
            ]);
        }
    }
}
