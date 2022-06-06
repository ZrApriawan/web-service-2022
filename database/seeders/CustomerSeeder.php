<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('customer') -> insert([
            'name' => 'Reza',
            'phone' => '67390',
            'email' => 'duiew',
            'address' => 'fweybgfiuwef'
        ]);
    }
}
