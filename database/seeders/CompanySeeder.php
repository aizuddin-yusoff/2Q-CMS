<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $companies = [
            [ 'name' => 'IOI Properties', 'email' => 'admin@ioi.my', 'logo' => '', 'website' => 'www.ioiproperties.com.my' ]
        ];

        DB::table('companies')->insert($companies);
    }
}
