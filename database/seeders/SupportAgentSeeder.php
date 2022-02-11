<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Modules\SupportAgentModule\Models\SupportAgent;

class SupportAgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        SupportAgent::insert([
            'name' => 'Dinura Nemitha',
            'email' => 'dinu.ad.nemitha@gmail.com',
            'password' => Hash::make('123456'),
            'status'=>SupportAgent::STATUS_ACTIVE,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        SupportAgent::insert([
            'name' => 'Gayan Jayawardane',
            'email' => 'gayan.ad.jay@gmail.com',
            'password' => Hash::make('654321'),
            'status'=>SupportAgent::STATUS_ACTIVE,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
