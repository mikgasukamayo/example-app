<?php

namespace Database\Seeders;

use App\Models\Costumer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CostumersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Costumer::create([
            'name'=> 'dududud',
            'phone'=> '081918191',
            'email'=> 'amin@gmail.com',
            'gender'=> 'Male',
        ]);
    }
}
