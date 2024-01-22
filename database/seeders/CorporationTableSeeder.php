<?php

namespace Database\Seeders;

use App\Models\corporationRegistration;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CorporationTableSeeder extends Seeder
{
    public function run()
    {
        corporationRegistration::all()->each(function($corporation_registration) {
            $corporation_registration->seed()->create([
                'office' => 'boss',
                'function' => 'manage_business',
                'type_of_technology' => 'Big Data',
                'company' => 'TechCompany',
                'modality' => 'pj',
                'wage' => '9.000'
            ]);
        });
    }
}
