<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Type\Integer;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'nik'=>'3515181107940002',
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password'=> Hash::make('m1ch1n4g4'),
        ]);
        User::factory()->create([
            'nik'=>'3515181107930002',
            'name' => 'adminU',
            'email' => 'adminU@gmail.com',
            'password'=> Hash::make('m1ch1n4g42'),
        ]);
        // \App\Models\User::factory(10)->create([
        //     'nik' => random_int(1234567890123456,9999999999999999),
        //     'name' => Str::name

        // ]);
    }
}
