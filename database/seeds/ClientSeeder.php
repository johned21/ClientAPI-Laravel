<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
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
                'name' => 'Alpha',
                'address' => 'Bacong',
                'phone' => '0905091090',
                'capitalization' => 66000,
                'loan' => 120000
            ],
            [
                'name' => 'Omega',
                'address' => 'Banlasan',
                'phone' => '09112234445',
                'capitalization' => 65000,
                'loan' => 460000
            ],
            [
                'name' => 'Auster',
                'address' => 'Vellanueva',
                'phone' => '095511234123',
                'capitalization' => 34000,
                'loan' => 551000
            ],
            [
                'name' => 'Laus',
                'address' => 'Cabulijan',
                'phone' => '090522234123',
                'capitalization' => 44000,
                'loan' => 351000
            ],
            [
                'name' => 'Marky',
                'address' => 'Tinangnan',
                'phone' => '090610904123',
                'capitalization' => 64000,
                'loan' => 511000
            ],
        ];

        foreach($data as $client) {
            \App\Client::create($client);
        }
    }
}
