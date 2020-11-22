<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LevelsTAbleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exp = 100;
        for ($i=0; $i < 10; $i++) { 
            $exp = $exp * 2;
            DB::table('levels')->insert([
                'xp' => $exp
            ]);
        }
    }
}
