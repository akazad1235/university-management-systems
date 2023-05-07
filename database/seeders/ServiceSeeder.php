<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       for ($i=1; $i < 10; $i++) {
        Service::create([
            'name' => 'service'.$i,
            'slug' => 'service'.$i,
            'created_by' =>$i,
        ]);
       }
    }
}
