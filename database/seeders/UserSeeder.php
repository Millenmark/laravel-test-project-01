<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use database\seeders\Traits\TruncateTable;

class UserSeeder extends Seeder
{
    // use TruncateTable;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();
        User::factory(10)->create();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
